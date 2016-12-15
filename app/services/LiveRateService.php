<?php

namespace App\Services;

use GuzzleHttp\Client;

/**
 * Class FixerService
 * @package App\Services
 */
class LiveRateService
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
    public function getLive()
    {
        $response = $this->client->get("http://webrates.truefx.com/rates/connect.html?f=html");
        return json_decode($response->getBody()->getContents());
    }

   }