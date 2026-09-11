<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Php80\Rector\Class_\ClassPropertyAssignToConstructorPromotionRector;
use Rector\Php80\Rector\Switch_\ChangeSwitchToMatchRector;
use Rector\Php70\Rector\FuncCall\RandomFunctionRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__,
    ])
    ->withSets([
        \Rector\Set\ValueObject\LevelSetList::UP_TO_PHP_82,
    ])
    ->withSkip([
        // Legacy switch/case yapısını match'e dönüştürme.
        ChangeSwitchToMatchRector::class,

        // rand() -> random_int() dönüşümünü şimdilik yapma.
        RandomFunctionRector::class,

        // Constructor property promotion'ı şimdilik yapma.
        ClassPropertyAssignToConstructorPromotionRector::class,

        // Git / Composer / Node
        __DIR__ . '/.git',
        __DIR__ . '/.github',
        __DIR__ . '/vendor',
        __DIR__ . '/node_modules',

        // Syntax problemi bulunan eski klasör
        __DIR__ . '/tr',

        // PHP olmayan / legacy asset klasörleri
        __DIR__ . '/css',
        __DIR__ . '/css_menu',
        __DIR__ . '/font',
        __DIR__ . '/image',
        __DIR__ . '/img_menu',
        __DIR__ . '/jquery',
        __DIR__ . '/psd',
        __DIR__ . '/swf',
    ]);
