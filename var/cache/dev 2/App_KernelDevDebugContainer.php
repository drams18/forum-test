<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYgpJOQd\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYgpJOQd/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYgpJOQd.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYgpJOQd\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYgpJOQd\App_KernelDevDebugContainer([
    'container.build_hash' => 'YgpJOQd',
    'container.build_id' => '0c09563a',
    'container.build_time' => 1704199807,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYgpJOQd');
