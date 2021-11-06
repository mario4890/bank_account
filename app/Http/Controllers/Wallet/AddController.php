<?php

namespace App\Http\Controllers\Wallet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Libraries\Wallet\Wallet;


class AddController extends Controller
{
    public function add(Request $request, Wallet $walletObj)
    {
        $wallet = $walletObj->add($request->name, $request->amount);

        return redirect()->route('home');
    }
}
