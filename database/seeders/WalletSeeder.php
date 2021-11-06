<?php

namespace Database\Seeders;

use App\Models\Wallet;
use Illuminate\Database\Seeder;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wallet::create([
            'name'      => 'first wallet',
            'amount'    => 12.00,
            'active'    => 1,
        ]);
    }
}
