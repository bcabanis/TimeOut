<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCgnDQK0\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCgnDQK0/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCgnDQK0.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCgnDQK0\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCgnDQK0\App_KernelDevDebugContainer([
    'container.build_hash' => 'CgnDQK0',
    'container.build_id' => '29fb6843',
    'container.build_time' => 1690278988,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCgnDQK0');
