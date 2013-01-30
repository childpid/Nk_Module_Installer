<?php

namespace NkModuleInstaller\Installer;

use NkModuleInstaller\Decompressor\Untar;
use NkModuleInstaller\Decompressor\Unzip;

class SimpleInstaller
{
    public $destinationPath;

    protected $untar;

    protected $unzip;

    public function setDestinationPath($destinationPath = null)
    {
        if (null !== $destinationPath) {
            $this->destinationPath = $destinationPath;
        }
    }

    public function getDestinationPath()
    {
        return $this->destinationPath;
    }
}