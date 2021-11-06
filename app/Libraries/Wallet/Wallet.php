<?php

namespace App\Libraries\Wallet;

use Ixudra\Curl\Facades\Curl;
use PhpParser\Node\Expr\Cast\Object_;

class Wallet
{
    public function getAllWallets() {
        $url            = 'http://' . $_SERVER['SERVER_NAME'] . '/api/wallets';
        $jsonResponse   = Curl::to($url)->get();
        $wallets        = json_decode($jsonResponse);

        return $wallets;
    }

    public function add(string $name, float $amount): Object
    {
        $url            = 'http://' . $_SERVER['SERVER_NAME'] . '/api/wallets/add';
        $jsonResponse   = Curl::to($url)
                            ->withData([
                                'name'      => $name,
                                'amount'    => $amount
                            ])
                            ->post();
        $wallets        = json_decode($jsonResponse);
        
        return $wallets;
    }
}
