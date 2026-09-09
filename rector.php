<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src', // Kodlarınızın bulunduğu klasörleri belirtin (örn: app, public, vb.)
    ])
    ->withPhpSets(
        php85: true // PHP 7.2'den 8.5'e kadar olan tüm kuralları uygular
    );
