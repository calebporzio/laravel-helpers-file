<?php

namespace CalebPorzio\LaravelHelpersFile;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
    	if ($this->app->runningInConsole()) {
	        $this->commands([
	            InstallCommand::class
	        ]);
    	}

        if (File::exists(app_path('helpers.php'))) {
        	require_once app_path('helpers.php');
        }
    }
}
