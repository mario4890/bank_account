<?php

namespace App\Libraries\Wallet;

use Ixudra\Curl\Facades\Curl;

class Amount
{
    public function add(int $walletID,float $amount) {
        $url            = 'http://' . $_SERVER['SERVER_NAME'] . '/api/wallets/amount/add';
        $jsonResponse   = Curl::to($url)
                            ->withData([
                                'walletID'  => $walletID,
                                'amount'    => $amount
                            ])
                            ->put();
        $wallet         = json_decode($jsonResponse);

        return $wallet;
    }

    public function subtract(int $walletID,float $amount) {
        $url            = 'http://' . $_SERVER['SERVER_NAME'] . '/api/wallets/amount/subtract';
        $jsonResponse   = Curl::to($url)
                            ->withData([
                                'walletID'  => $walletID,
                                'amount'    => $amount
                            ])
                            ->put();
        $wallet         = json_decode($jsonResponse);

        return $wallet;
    }
}

