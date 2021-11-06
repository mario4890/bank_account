<?php

namespace App\Http\Controllers\Wallet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Libraries\Wallet\Amount;


class AmountController extends Controller
{
    public function add(Request $request, Amount $amountObj)
    {
        $wallet = $amountObj->add($request->walletID, $request->amount);

        return redirect()->route('home');
    }

    public function subtract(Request $request, Amount $amountObj)
    {
        $wallet = $amountObj->subtract($request->walletID, $request->amount);

        return redirect()->route('home');
    }
}
