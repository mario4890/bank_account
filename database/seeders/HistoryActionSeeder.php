<?php

namespace Database\Seeders;

use App\Models\HistoryAction;
use Illuminate\Database\Seeder;

class HistoryActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HistoryAction::create([
            'name'  => 'Create wallet'
        ]);

        HistoryAction::create([
            'name'  => 'Adding an amount'
        ]);

        HistoryAction::create([
            'name'  => 'Subtracting the amount'
        ]);
    }
}
