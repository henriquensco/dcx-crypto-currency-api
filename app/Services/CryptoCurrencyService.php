<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use PHPUnit\Util\Exception;

class CryptoCurrencyService
{
    public function __construct()
    {
        
    }

    public function getCrypto($params)
    {
        try {
            $from = $params['from'];
            $to = $params['to'];

            $response = Http::get("https://api.coingecko.com/api/v3/simple/price?ids={$from}&vs_currencies={$to}&include_market_cap=true&include_24hr_vol=true&include_24hr_change=true&include_last_updated_at=true");
        } catch (Exception $e) {
            return $e;
        }

        return $response;
    }
}