<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTjlcQ4N\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTjlcQ4N/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTjlcQ4N.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTjlcQ4N\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTjlcQ4N\App_KernelDevDebugContainer([
    'container.build_hash' => 'TjlcQ4N',
    'container.build_id' => '648f688a',
    'container.build_time' => 1678954443,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTjlcQ4N');
