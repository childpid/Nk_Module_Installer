<?php

namespace NkModuleInstaller\Tests\Installer;

use NkModuleInstaller\Installer\SimpleInstaller;
use NkModuleInstaller\Decompressor\Untar;
use NkModuleInstaller\Decompressor\Unzip;

class SimpleInstallerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var destination path
     */
    protected $destinationPath;

    /**
     * @var NkModuleInstaller\Decompressor\Untar;
     */
    protected $untar;

    /**
     * @var NkModuleInstaller\Decompressor\Unzip
     */
    protected $unzip;

    /**
     * @var NkModuleInstaller\Installer\SimpleInstaller
     */
    protected $installer;

    /**
     * Setup
     */
    public function setUp()
    {
        $this->untar = new Untar();
        $this->unzip = new Unzip();
        $this->installer = new SimpleInstaller();
    }

    public function tearDown()
    {
        $this->untar = null;
        $this->unzip = null;
        $this->installer = null;
    }

    public function testSetDestinationPath()
    {
        $destinationPath = './my/destination/path';
        $this->installer->setDestinationPath($destinationPath);

        $this->assertSame($this->installer->getDestinationPath(), $destinationPath);
    }

    public function testGetDestinationPath()
    {
        $this->destinationPath = './my/destination/path';
        $this->installer->setDestinationPath($this->destinationPath);

        $this->assertNotEmpty($this->installer->getDestinationPath());
        $this->assertSame($this->installer->getDestinationPath(), $this->destinationPath);
    }
}