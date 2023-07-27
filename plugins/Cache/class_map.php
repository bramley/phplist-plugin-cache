<?php

$pluginsDir = dirname(__DIR__);

return [
    'phpList\plugin\Cache\Cache' => $pluginsDir . '/Cache/Cache.php',
    'phpList\plugin\Cache\DatabaseCache' => $pluginsDir . '/Cache/DatabaseCache.php',
    'phpList\plugin\Cache\FileCache' => $pluginsDir . '/Cache/FileCache.php',
];
