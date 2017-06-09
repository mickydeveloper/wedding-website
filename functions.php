<?php
spl_autoload_register(function ($class) {
    $prefix  = "NuvoPoint\\Themes\\FedericoNicole"; // Change "NuvoPoint\\<PROJECT>" as required. MUST be camelcase!
    $baseDir = __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR;
    $len = strlen($prefix);

    if (strncmp($prefix . '\\', $class, $len + 1) !== 0) {
        // Skip (next registered autoloader gets a shot)
        return;
    }

    $namespaceAndClass = substr($class, $len);
    $lastIndex = strrpos($namespaceAndClass, '\\');
    if ($lastIndex) {
        $namespace = substr($namespaceAndClass, 1, $lastIndex);
    }
    else {
        $namespace = '';
    }
    $class = substr($namespaceAndClass, $lastIndex+1);
    $file          = $baseDir . strtolower(str_replace('\\', DIRECTORY_SEPARATOR, $namespace)) . $class . '.php';
    /** @noinspection PhpIncludeInspection */
    require $file;
});

define('FEDERICO_NICOLE_VERSION', '1.0.8');

new \NuvoPoint\Themes\FedericoNicole\Init();