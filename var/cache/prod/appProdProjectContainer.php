<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0qsi3nf\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0qsi3nf/appProdProjectContainer.php') {
    touch(__DIR__.'/Container0qsi3nf.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container0qsi3nf\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container0qsi3nf\appProdProjectContainer([
    'container.build_hash' => '0qsi3nf',
    'container.build_id' => 'c4a4929e',
    'container.build_time' => 1604440241,
], __DIR__.\DIRECTORY_SEPARATOR.'Container0qsi3nf');
