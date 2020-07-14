<?php

foreach (array(__DIR__ . '/../../../bedrock/vendor/autoload.php', __DIR__ . '/../../autoload.php', __DIR__ . '/../vendor/autoload.php', __DIR__ . '/vendor/autoload.php') as $file) {
    if (file_exists($file)) {
        return require_once(__DIR__ . '/container.php');
    }
}

