<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVodywed\EccubeDevProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVodywed/EccubeDevProjectContainer.php') {
    touch(__DIR__.'/ContainerVodywed.legacy');

    return;
}

if (!\class_exists(EccubeDevProjectContainer::class, false)) {
    \class_alias(\ContainerVodywed\EccubeDevProjectContainer::class, EccubeDevProjectContainer::class, false);
}

return new \ContainerVodywed\EccubeDevProjectContainer([
    'container.build_hash' => 'Vodywed',
    'container.build_id' => '1e799a91',
    'container.build_time' => 1590872106,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVodywed');
