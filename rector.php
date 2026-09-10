<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Php80\Rector\Switch_\ChangeSwitchToMatchRector;
use Rector\Set\ValueObject\LevelSetList;

return RectorConfig::configure()
    ->withPaths([
        __DIR__,
    ])
    ->withSets([
        LevelSetList::UP_TO_PHP_82,
    ])
    ->withSkip([
        // Legacy kodda switch -> match dönüşümünü şimdilik yapma.
        // 75 dosyada değişiklik oluşturuyor.
        ChangeSwitchToMatchRector::class,

        // Rector'un kendi dosyalarını ve bağımlılıklarını tarama
        __DIR__ . '/.git',
        __DIR__ . '/.github',
        __DIR__ . '/vendor',

        // Syntax hataları bulunan legacy klasör
        __DIR__ . '/tr',

        // PHP kodu olmayan klasörler
        __DIR__ . '/css',
        __DIR__ . '/css_menu',
        __DIR__ . '/font',
        __DIR__ . '/image',
        __DIR__ . '/img_menu',
        __DIR__ . '/jquery',
        __DIR__ . '/psd',
        __DIR__ . '/swf',
    ]);
