<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerF39a4EF\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerF39a4EF/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerF39a4EF.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerF39a4EF\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerF39a4EF\App_KernelDevDebugContainer([
    'container.build_hash' => 'F39a4EF',
    'container.build_id' => 'bbfdc926',
    'container.build_time' => 1653311958,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerF39a4EF');
