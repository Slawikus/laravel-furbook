<?php

namespace Furbook\Console\Commands;

use Furbook\Cat;
use Illuminate\Console\Command;

class ExportCatsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'export:cats';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export all cats';

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
        $cats = Cat::with('breed')->get();
        foreach ($cats as $cat) {
            $output[] = [
              $cat->name,
              $cat->date_of_birth,
              $cat->breed->name
            ];
        }
        $headers = ['Name', 'Date of birth', 'Breed'];
        $this->table($headers, $output);
    }
}
