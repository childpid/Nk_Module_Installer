<?php
require_once __DIR__ . '/vendor/Symfony/Component/ClassLoader/UniversalClassLoader.php';
use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();
$loader->registerNamespaces(array('NkModuleInstaller'=> __DIR__ . '/src'));
$loader->useIncludePath(true);
$loader->register();

return $loader;