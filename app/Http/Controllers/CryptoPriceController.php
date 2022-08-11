<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\CryptoCurrencyService;

class CryptoPriceController extends Controller
{
    protected $cryptoService;

    public function __construct()
    {
        $this->cryptoService = new CryptoCurrencyService();    
    }

    public function get(Request $params)
    {
        if (!isset($params['from']) || !isset($params['to'])) {
            return response()->json([
                'status' => false,
                'message' => 'You must send the from and to parameters'
            ]);
        }

        $res = $this->cryptoService->getCrypto($params);

        return $res;
    }

    public function broadcasting()
    {
        //$ably = new AblyBroadcaster('r5WSWg.Kydeug:yQtuCAA36jjZ8q4fU20cTxK2bwxv7fb1lkT4KSSeSHY');
        return response()->json([
            'status' => true
        ]);
    }
}
