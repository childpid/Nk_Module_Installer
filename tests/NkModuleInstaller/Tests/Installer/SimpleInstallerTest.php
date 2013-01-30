<?php

namespace NkModuleInstaller\Tests\Installer;

use NkModuleInstaller\Installer\SimpleInstaller;
use NkModuleInstaller\Decompressor\Untar;
use NkModuleInstaller\Decompressor\Unzip;
use NkModuleInstaller\Util\Filesystem;

class SimpleInstallerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Source path
     */
    protected $sourcePath;

    /**
     * @var Destination path
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
     * @var NkModuleInstaller\Util\Filesystem
     */
    protected $filesystem;

    /**
     * Setup
     */
    public function setUp()
    {
        $this->sourcePath = __DIR__ . '/../../../../test/my/source/path';
        $this->destinationPath = __DIR__ . '/../../../../test/my/destination/path';
        $this->untar = new Untar();
        $this->unzip = new Unzip();
        $this->installer = new SimpleInstaller();
        $this->filesystem = new Filesystem();
    }

    public function tearDown()
    {
        $this->untar = null;
        $this->unzip = null;
        $this->installer = null;
        $this->filesystem = null;
    }

    public function testSetGetSourcePath()
    {
        $this->installer->setSourcePath($this->sourcePath);

        $this->assertNotEmpty($this->installer->getSourcePath());
        $this->assertSame($this->installer->getSourcePath(), $this->sourcePath);
    }

    public function testSetGetDestinationPath()
    {
        $this->installer->setDestinationPath($this->destinationPath);

        $this->assertNotEmpty($this->installer->getDestinationPath());
        $this->assertSame($this->installer->getDestinationPath(), $this->destinationPath);
    }

    public function testIsSourcePathExist()
    {
        $this->installer->setSourcePath($this->sourcePath);

        $this->assertTrue(file_exists($this->installer->getSourcePath()));
    }

    public function testIsSourcePathReadable()
    {
        $this->installer->setSourcePath($this->sourcePath);

        $this->assertTrue(is_readable($this->installer->getSourcePath()));
    }

    public function testIsDestinationPathExist()
    {
        $this->installer->setDestinationPath($this->destinationPath);

        $this->assertTrue(file_exists($this->installer->getDestinationPath()));
    }

    public function testIsDestinationPathWritable()
    {
        $this->installer->setDestinationPath($this->destinationPath);

        $this->assertTrue(is_writable($this->installer->getDestinationPath()));
    }

}