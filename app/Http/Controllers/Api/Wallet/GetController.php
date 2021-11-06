<?php

namespace App\Http\Controllers\Api\Wallet;

use App\Models\History;
use App\Models\Wallet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GetController extends Controller
{
    public function all(Wallet $walletObj)
    {
        $wallets    = $walletObj->getAll();

        return $wallets;
    }
}
