<?php

namespace NkModuleInstaller\Installer;

use NkModuleInstaller\Decompressor\Untar;
use NkModuleInstaller\Decompressor\Unzip;
use NkModuleInstaller\Util\Filesystem;

class SimpleInstaller
{
    /**
     * @var source path
     */
    protected $sourcePath;

    /**
     * @var destination path
     */
    protected $destinationPath;

    /**
     * @var untar instance
     */
    protected $untar;

    /**
     * @var unzip instance
     */
    protected $unzip;

    /**
     * @var filesystem instance
     */
    protected $filesystem;

    /**
     * Sets the source path
     *
     * @param string $sourcePath The source path
     */
    public function setSourcePath($sourcePath)
    {
        if (!empty($sourcePath)) {
            $this->sourcePath = $sourcePath;
        }
    }

    /**
     * Returns the source path
     *
     * @return string
     */
    public function getSourcePath()
    {
        return $this->sourcePath;
    }

    /**
     * Sets the destination paths
     *
     * @param string $destinationPath The destination path
     */
    public function setDestinationPath($destinationPath)
    {
        if (!empty($destinationPath)) {
            $this->destinationPath = $destinationPath;
        }
    }

    /**
     * Returns the destination path
     *
     * @return string destination The destination path
     */
    public function getDestinationPath()
    {
        return $this->destinationPath;
    }

    /**
     * Checks if the source path exist
     *
     * @param string $sourcePath The source path
     *
     * @return bool
     */
    public function isSourcePathExist($sourcePath)
    {
        return file_exists($sourcePath) ? true : false;
    }

    /**
     * Is the source path readable
     *
     * @param string $sourcePath The source path
     *
     * @return bool
     */
    public function isSourcePathReadable($sourcePath)
    {
        return is_readable($sourcePath) ? true : false;
    }

    /**
     * Is the destination path exist
     *
     * @param string $destinationPath The destination path
     *
     * @return bool
     */
    public function isDestinationPathExist($destinationPath)
    {
        return file_exists($destinationPath) ? true : false;
    }

    /**
     * Is the destination path writable
     *
     * @param string $destinationPath The destination path
     *
     * @return bool
     */
    public function isDestinationPathWritable($destinationPath)
    {
        return is_writable($destinationPath) ? true : false;
    }
}