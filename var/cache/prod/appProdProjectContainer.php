<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUcn2w6p\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUcn2w6p/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerUcn2w6p.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerUcn2w6p\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerUcn2w6p\appProdProjectContainer([
    'container.build_hash' => 'Ucn2w6p',
    'container.build_id' => 'efffd941',
    'container.build_time' => 1663427805,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUcn2w6p');
