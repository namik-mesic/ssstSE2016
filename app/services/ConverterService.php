<?php

namespace App\Services;

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
     */
    public function calculate($amount, $from, $to)
    {
        $url = "http://www.google.com/finance/converter?a=$amount&from=$from&to=$to";
        $req = curl_init();
        curl_setopt ($req, CURLOPT_URL, $url);
        curl_setopt ($req, CURLOPT_RETURNTRANSFER, 1);
        $time=0;
        curl_setopt ($req, CURLOPT_USERAGENT,"Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
        curl_setopt ($req, CURLOPT_CONNECTTIMEOUT, $time);
        $r= curl_exec($req);
        curl_close($req);

        $pos = strpos($r, 'class=bld');

        return $r;
    }


}
