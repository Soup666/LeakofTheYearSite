<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBadr8TX\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBadr8TX/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBadr8TX.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBadr8TX\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBadr8TX\App_KernelDevDebugContainer([
    'container.build_hash' => 'Badr8TX',
    'container.build_id' => '29831ce1',
    'container.build_time' => 1672684679,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBadr8TX');