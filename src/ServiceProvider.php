<?php

namespace CalebPorzio\LaravelHelpersFile;

use CalebPorzio\AddLaravelHelpersFile;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        $this->commands([
            InstallCommand::class
        ]);

        $helpersFilePath = $this->app->make('path') . DIRECTORY_SEPARATOR . 'helpers.php';

        require_once($helpersFilePath);
    }
}
