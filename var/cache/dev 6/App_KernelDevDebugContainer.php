<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBVLed1s\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBVLed1s/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBVLed1s.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBVLed1s\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBVLed1s\App_KernelDevDebugContainer([
    'container.build_hash' => 'BVLed1s',
    'container.build_id' => '8ad058a9',
    'container.build_time' => 1705314066,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBVLed1s');
