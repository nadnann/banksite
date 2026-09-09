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
        __DIR__ . '/.settings',
        __DIR__ . '/.svn',
        __DIR__ . '/_notes',
        __DIR__ . '/_private',
        __DIR__ . '/_vti_bin',
        __DIR__ . '/_vti_cnf',
        __DIR__ . '/_vti_log',
        __DIR__ . '/_vti_pvt',
        __DIR__ . '/_vti_txt',
        __DIR__ . '/cgi-bin',
        __DIR__ . '/css',
        __DIR__ . '/css_menu',
        __DIR__ . '/font',
        __DIR__ . '/image',
        __DIR__ . '/img_menu',
        __DIR__ . '/jquery',
        __DIR__ . '/psd',
        __DIR__ . '/swf',
    ]);
