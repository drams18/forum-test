<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPxATgUo\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPxATgUo/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPxATgUo.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPxATgUo\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPxATgUo\App_KernelDevDebugContainer([
    'container.build_hash' => 'PxATgUo',
    'container.build_id' => '88cd36dd',
    'container.build_time' => 1705338623,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPxATgUo');
