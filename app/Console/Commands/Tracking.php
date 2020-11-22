<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Device;

class Tracking extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'track';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Query devices and corresponding reports from the database and dumps them to the screen';

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
        $output = Device::with('reports')
            ->get()
            ->toArray();
        dd($output);
    }
}
