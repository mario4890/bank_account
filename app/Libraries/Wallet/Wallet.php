<?php

namespace App\Libraries\Wallet;

use Ixudra\Curl\Facades\Curl;

class Wallet
{
    public function getAllWallets() {
        $url            = 'http://' . $_SERVER['SERVER_NAME'] . '/api/wallets';
        $jsonResponse   = Curl::to($url)->get();
        $wallets        = json_decode($jsonResponse);

        return $wallets;
    }
}
