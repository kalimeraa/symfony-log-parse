<?php

declare(strict_types=1);

namespace App\Service;

use DateTime;
use RuntimeException;

class LogParser
{
    private string $serviceName;
    private int $statusCode;
    private DateTime $startDate;
    private string $currentLine;

    public function parse(string $line): array
    {
        $this->setCurrentLine(trim($line));
        $this->setServiceName();
        $this->setStatusCode();
        $this->setStartDate();

        return [
            'serviceName' => $this->serviceName,
            'statusCode' => $this->statusCode,
            'startDate' => $this->startDate,
        ];
    }

    private function setCurrentLine(string $currentLine): void
    {
        $this->currentLine = $currentLine;
    }

    private function setStartDate(): void
    {
        preg_match('/\[(.*?)\]/', $this->currentLine, $output);
        if (empty($output)) {
            throw new RuntimeException('There is no start date');
        }
        $this->startDate = new DateTime(trim($output[1]));
    }

    private function setServiceName(): void
    {
        preg_match('/.*(?=- -)/', $this->currentLine, $output);
        if (empty($output)) {
            throw new RuntimeException('There is no service name');
        }
        $this->serviceName = trim($output[0]);
    }

    private function setStatusCode(): void
    {
        $this->statusCode = (int) substr($this->currentLine, -3);
    }
}
