<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class IndexController extends Controller
{
    public function index()
    {
        $jsonResponse = Curl::to('http://' . $_SERVER['SERVER_NAME'] . '/api/wallets')
            ->get();

        $wallets = json_decode($jsonResponse);

        dump($wallets);

        return view('home.index', compact('wallets'));
    }

    private function getAllWallets() {
        $response = Curl::to('/api/wallets')
            ->get();

        return $response;
    }
}
