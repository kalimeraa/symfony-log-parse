<?php

namespace App\DataFixtures;

use App\Entity\Log;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LogFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $names = [
            'USER-SERVICE',
            'INVOICE-SERVICE',
            'PAYMENT-SERVICE',
        ];

        $httpCodes = [
            200,
            201,
            400,
            500,
            503,
            502,
        ];

        foreach (range(0, 30) as $i) {
            $log = new Log();
            $log->setServiceName($names[rand(0, count($names) - 1)]);
            $log->setStatusCode($httpCodes[rand(0, count($httpCodes) - 1)]);
            $log->setStartDate(new DateTime('now'));
            $manager->persist($log);
            $manager->flush();
        }
    }
}
