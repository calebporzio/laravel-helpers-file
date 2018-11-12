<?php

namespace CalebPorzio\LaravelHelpersFile;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class InstallCommand extends Command
{
    protected $signature = 'calebporzio:helpers';
    protected $description = 'Add a app/helpers.php file to your project';

    public function handle()
    {
        $helpersFilePath = app_path('helpers.php');

        if (File::exists($helpersFilePath)) {
            $this->info('Looks like you\'ve already created a helpers file');
            return;
        }

        File::put($helpersFilePath, $this->helpersFileContents());
        $this->info('Hooray! Your app/helpers.php file awaits you...');
    }

    protected function helpersFileContents()
    {
        return <<<EOT
<?php

/**
 *  Custom Laravel Helpers
 */

use Illuminate\Support\Carbon;

if (! function_exists('carbon')) {
    function carbon(\$parseString = null, \$tz = null)
    {
        return new Carbon(\$parseString, \$tz);
    }
}

EOT;
    }
}
