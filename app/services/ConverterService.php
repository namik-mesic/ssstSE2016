<?php

namespace App\Services;
use Illuminate\Support\Str;

/**
 * Class ConverterService
 * @package App\Services
 */
class ConverterService
{
    /**
     * @param double $amount
     * @param string $from
     * @param string $to
     *
     * @return double
     *
     * */
    public function calculate($amount, $from, $to)
    {
        $amount = urlencode($amount);
        $from = urlencode($from);
        $to= urlencode($to);
        $get = file_get_contents("https://www.google.com/finance/converter?a=$amount&from=$from&to=$to");
        $get = explode("<span class=bld>",$get);
        $get = explode("</span>",$get[1]);
        $r = preg_replace("/[^0-9\.]/", null, $get[0]);

        return $r;
    }

    /** This service was written by Ajla */



}
