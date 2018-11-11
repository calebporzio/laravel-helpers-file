<?php

namespace CalebPorzio\LaravelHelpersFile;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class InstallCommand extends Command
{
    protected $signature = 'calebporzio:helpers';

    public function handle()
    {
        $app = $this->getApplication()->getLaravel();

        $helpersFilePath = $app->make('path') . DIRECTORY_SEPARATOR . 'helpers.php';

        $files = $app->make('files');

        if ($files->exists($helpersFilePath)) {
            $this->info('Looks like you\'ve already created a helpers file');
        }

        $helpersFileContents = <<<EOT
<?php

/**
 *  Custom Laravel Helpers
 */

if (! function_exists('carbon')) {
    function carbon(\$parseString = null, \$tz = null)
    {
        return new Carbon(\$parseString, \$tz);
    }
}

EOT;

        $files->put($helpersFilePath, $helpersFileContents);

        $this->info('Hooray! Your app/helpers.php file awaits you...');
    }
}
