<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerY5x5FkJ\App_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerY5x5FkJ/App_KernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerY5x5FkJ.legacy');

    return;
}

if (!\class_exists(App_KernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerY5x5FkJ\App_KernelTestDebugContainer::class, App_KernelTestDebugContainer::class, false);
}

return new \ContainerY5x5FkJ\App_KernelTestDebugContainer([
    'container.build_hash' => 'Y5x5FkJ',
    'container.build_id' => 'ee5cdb0b',
    'container.build_time' => 1584287226,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerY5x5FkJ');
