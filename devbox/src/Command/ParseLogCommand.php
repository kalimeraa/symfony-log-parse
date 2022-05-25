<?php

declare(ticks=1);

namespace App\Command;

use App\Entity\Log;
use App\Service\LogParser;
use Doctrine\Persistence\ManagerRegistry;
use Exception;
use Generator;
use InvalidArgumentException;
use SplFileObject;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBag;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;

#[AsCommand(
    name: 'app:parse-log',
    description: 'parse log file',
    hidden: false,
    aliases: ['app:parse']
)]
class ParseLogCommand extends Command
{
    private LogParser $logParser;
    private ContainerBag $containerBag;
    private ManagerRegistry $doctrine;

    public function __construct(LogParser $logParser, ContainerBagInterface $containerBag, ManagerRegistry $doctrine)
    {
        $this->logParser = $logParser;
        $this->containerBag = $containerBag;
        $this->doctrine = $doctrine;
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->addArgument('saveLog', InputArgument::OPTIONAL, 'Save Log (yes/no)', 'no');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $saveLog = mb_strtolower($input->getArgument('saveLog'), 'UTF-8');
        if (!in_array($saveLog, [
            'no',
            'yes',
        ])) {
            throw new InvalidArgumentException('please type only yes or no');
        }
        if ('yes' === $saveLog) {
            foreach ($this->readTheLogFile() as $currentLineAndIndex) {
                try {
                    $parsedLog = $this->logParser->parse($currentLineAndIndex['content']);
                    $log = new Log();
                    $log->setServiceName($parsedLog['serviceName']);
                    $log->setStatusCode($parsedLog['statusCode']);
                    $log->setStartDate($parsedLog['startDate']);
                    $entityManager = $this->doctrine->getManager();
                    $entityManager->persist($log);
                    $entityManager->flush();
                } catch (Exception $exception) {
                    file_put_contents($this->containerBag->get('kernel.logs_dir').'/left_off.txt', $currentLineAndIndex['index']);
                    dump($exception);

                    return Command::FAILURE;
                }
            }

            $lefOffTxt = $this->containerBag->get('kernel.logs_dir').'/left_off.txt';
            if (file_exists($lefOffTxt)) {
                unlink($lefOffTxt);
            }
        } else {
            foreach ($this->readTheLogFile() as $currentLineAndIndex) {
                dump($currentLineAndIndex);
            }
        }

        return Command::SUCCESS;
    }

    public function readTheLogFile(): Generator
    {
        $file = new SplFileObject($this->containerBag->get('kernel.logs_dir').'/logs.txt', 'r');
        $i = 0;
        $leftOff = null;

        $lefOffTxt = $this->containerBag->get('kernel.logs_dir').'/left_off.txt';
        if (file_exists($lefOffTxt)) {
            $leftOff = file_get_contents($lefOffTxt);
        }

        // start where it left off when interrupted.
        if (!empty($leftOff)) {
            $file->seek((int) $leftOff);
            $i = (int) $leftOff;
        }

        while (!$file->eof()) {
            yield ['index' => $i, 'content' => $file->fgets()];
            ++$i;
        }
    }
}
