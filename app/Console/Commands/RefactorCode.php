<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RefactorCode extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'refactor:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'refactor code in your application';

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
        $this->info('Code refactored successfully!');
    }
}
