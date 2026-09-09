<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;

return RectorConfig::configure()
    ->withPaths([
        __DIR__,
    ])
    ->withSets([
        LevelSetList::UP_TO_PHP_82,
    ])
    ->withSkip([
        __DIR__ . '/.git',
        __DIR__ . '/.github',
        __DIR__ . '/vendor',
        __DIR__ . '/node_modules',

        __DIR__ . '/css',
        __DIR__ . '/tr',
        __DIR__ . '/css_menu',
        __DIR__ . '/font',
        __DIR__ . '/image',
        __DIR__ . '/img_menu',
        __DIR__ . '/jquery',
        __DIR__ . '/psd',
        __DIR__ . '/swf',
    ]);
