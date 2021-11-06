<?php

namespace App\Http\Controllers\Api\Wallet;

use App\Models\History;
use App\Models\Wallet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddController extends Controller
{
    public function add(Request $request, Wallet $walletObj, History $historyObj)
    {
        $wallet     = $walletObj->newEntity($request->name, $request->amount);
        $historyObj->newEntity($wallet->id, 1);

        return $wallet;
    }
}
