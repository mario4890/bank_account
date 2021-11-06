<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Libraries\Wallet\Wallet;

class IndexController extends Controller
{
    public function index(Wallet $walletObj)
    {
        $wallets = $walletObj->getAllWallets();

        return view('home.index', compact('wallets'));
    }
}
