<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\job;
class Reset extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'remember:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command Used To Reset Msg Status In DB';

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
        $jobs=job::all();
        foreach ($jobs as $job){
            $job->msgstatus=0;
            $job->save();
        }
    }
}
