<?php

namespace App\Http\Controllers\Api\Wallet;

use App\Models\History;
use App\Models\Wallet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AmountController extends Controller
{
    public function add(Request $request, Wallet $walletObj)
    {
        $wallet     = $walletObj->getByID($request->walletID);
        $wallet->addAmount($request->amount);

        return $wallet;
    }

    public function subtract(Request $request, Wallet $walletObj)
    {
        $wallet     = $walletObj->getByID($request->walletID);
        $wallet->subtractAmount($request->amount);

        return $wallet;
    }
}
