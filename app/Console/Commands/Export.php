<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Export extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'export:history {walletID}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export history wallet to CSV';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $exportObj  = new \App\Libraries\History\Export();
        $csv        = $exportObj->csv($this->argument('walletID'));

        $this->info('Data exported correctly');
    }
}
