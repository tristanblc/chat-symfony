<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOCfEfD2\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOCfEfD2/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOCfEfD2.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOCfEfD2\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOCfEfD2\App_KernelDevDebugContainer([
    'container.build_hash' => 'OCfEfD2',
    'container.build_id' => 'fff2c376',
    'container.build_time' => 1636472311,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOCfEfD2');