<?php

namespace App\Services;

use GuzzleHttp\Client;

/**
 * Class FixerService
 * @package App\Services
 */
class FixerService
{
    /**
     * @var Client
     */
    private $client;

    /**
     * FixerService constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param $date
     * @param $currency
     * @return Object
     */
    public function getHistory($date, $curr)
    {
        $response = $this->client->get("http://api.fixer.io/{$date}?base={$curr}");
        return json_decode($response->getBody()->getContents());
    }
}