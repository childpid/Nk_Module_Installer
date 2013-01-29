<?php

/*
 * This file is part of NkModuleInstaller.
 *
 * (c) Chilpid <childpid@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

function includeIfExists($file)
{
    if (file_exists($file)) {
        return include $file;
    }
}

if ((!$loader = includeIfExists(__DIR__.'/../vendor/autoload.php')) && (!$loader = includeIfExists(__DIR__.'/../autoload.php'))) {
    echo "A file named 'autoload.php' must be created in your main or vendor directory".PHP_EOL.

        exit(1);
}

return $loader;