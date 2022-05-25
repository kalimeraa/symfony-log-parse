<?php

declare(strict_types=1);

namespace Tests\Controller;

use App\Repository\LogRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LogControllerTest extends WebTestCase
{
    public function testLogCountEndpoint(): void
    {
        $client = static::createClient();
        $logRepository = static::getContainer()->get(LogRepository::class);
        $client->request('GET', '/count');

        $this->assertJson('{"counter": '.count($logRepository->findAll()).'}');
        $this->assertResponseIsSuccessful();
    }

    public function testItShouldBeReceivedOnlyGivenServiceNamesCount(): void
    {
        $client = static::createClient();
        $logRepository = static::getContainer()->get(LogRepository::class);
        $client->request('GET', '/count?serviceNames[]=USER-SERVICE&serviceNames[]=INVOICE-SERVICE');

        $logs = $logRepository->findByFilters(
            ['serviceNames' => [
            'USER-SERVICE',
            'INVOICE-SERVICE',
        ]]);

        $this->assertJson('{"counter": '.count($logs).'}');
        $this->assertResponseIsSuccessful();
    }

    public function testItShouldBeReceivedOnlyGivenStatusCodeCount(): void
    {
        $client = static::createClient();
        $logRepository = static::getContainer()->get(LogRepository::class);
        $client->request('GET', '/count?statusCode[]=200');

        $logs = $logRepository->findByFilters(['statusCode' => 200]);

        $this->assertJson('{"counter": '.count($logs).'}');
        $this->assertResponseIsSuccessful();
    }

    public function testItShouldBeReceivedOnlyGivenBetweenSpecifiedDateCount(): void
    {
        $endDate = (new DateTime('now'))->format('Y-m-d H:i:s');
        $startDate = (new DateTime('1997-01-01'))->format('Y-m-d H:i:s');
        $client = static::createClient();
        $logRepository = static::getContainer()->get(LogRepository::class);
        $client->request('GET', '/count?startDate='.$startDate.'&endDate='.$endDate);

        $logs = $logRepository->findByFilters(['startDate' => $startDate, 'endDate' => $endDate]);

        $this->assertJson('{"counter": '.count($logs).'}');
        $this->assertResponseIsSuccessful();
    }

    public function testItShouldBeReceivedInvalidDatesResponse(): void
    {
        $client = static::createClient();
        $client->request('GET', '/count?startDate=sdfsd&endDate=sdf');

        $this->assertJson('{"[startDate]":"This value is not a valid datetime.","[endDate]":"This value is not a valid datetime."}');
        $this->assertResponseIsUnprocessable();
    }

    public function testItShouldBeReceivedValuesShouldBeBlankResponse(): void
    {
        $client = static::createClient();
        $client->request('GET', '/count?startDate=&endDate=&statusCode=&serviceNames=');

        $this->assertJson('{"[startDate]":"This value should not be blank.","[endDate]":"This value should not be blank.","[serviceNames]":"This value should not be blank.","[statusCode]":"This value should not be blank."}');
        $this->assertResponseIsUnprocessable();
    }

    public function testItShouldBeReceivedServiceNamesValueShouldBeArrayResponse(): void
    {
        $client = static::createClient();
        $client->request('GET', '/count?serviceNames=test');

        $this->assertJson('{"[serviceNames]":"This value should be of type array."}');
        $this->assertResponseIsUnprocessable();
    }
}
