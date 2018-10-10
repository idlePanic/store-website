<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ShowGreeting extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Hamid:salaam {name=Hamid} {--greeting=Hi}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Say Hello!!';

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
     * @return mixed
     */
    public function handle()
    {
        $this->info($this->option('greeting') .', ' . $this->argument('name') );
    }
}
