<?php

namespace Agpretto\Metadata\Console\Commands;

use Illuminate\Console\Command;

class MetadataInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'metadata:install
                            {--T|template : include publishing the template}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Agpretto Metadata Package';

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
        if (app()->environment('production')) {
            $this->alert('Running in production mode.');
            if ($this->confirm('Proceed installing Agpretto Metadata?')) {
                return;
            }
        }

        $this->comment('Publishing Metadata configuration files...');
        $this->callSilent('vendor:publish', ['--tag' => 'metadata-configs']);

        if ($this->option('template')) {
            $this->callSilent('vendor:publish', [ '--tag' => 'metadata-views' ]);
        } else {
            $this->info('You can publish the Metadata template so you can modify it.');

            if ($this->confirm('Publish Metadata template?')) {
                $this->comment('Publishing Metadata template..');
                $this->callSilent('vendor:publish', [ '--tag' => 'metadata-views' ]);
            }
        }

        $this->info('Metadata installed successfully.');
    }
}
