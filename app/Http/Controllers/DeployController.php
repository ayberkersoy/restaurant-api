<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;

class DeployController extends Controller
{
    public function deploy(Request $request)
    {
        /**
             * GIT DEPLOYMENT SCRIPT
             *
             *
             * Used for automatically deploying websites via github or bitbucket, more deets here:
             * https://gist.github.com/riodw/71f6e2244534deae652962b32b7454e2
             * How To Use:
             * https://medium.com/riow/deploy-to-production-server-with-git-using-php-ab69b13f78ad
             */
        // The commands
        $commands = [
            'cd /home/admin/web/api.maycreator.com/public_html',
            'echo $PWD',
            'whoami',
            'git reset --hard HEAD',
            'git pull origin master',
            'git status',
            'git submodule sync',
            'git submodule update',
            'git submodule status',
        ];
        // Run the commands for output
        $output = '';
        foreach ($commands as $command) {
            // Run it
            $tmp = shell_exec($command);
            // Output
            $output .= "{$command}\n";
            $output .= htmlentities(trim($tmp)) . "\n";
            echo $output;
        }
        // Make it pretty for manual user access (and why not?)
        // $root_path = base_path();
        // $process = new Process('cd ' . $root_path . '; ./deploy.sh');
        // $process->run(function ($type, $buffer) {
        //     echo $buffer;
        // });
    }
}
