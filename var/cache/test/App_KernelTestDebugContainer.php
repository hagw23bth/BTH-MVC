<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTPQlFl3\App_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTPQlFl3/App_KernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerTPQlFl3.legacy');

    return;
}

if (!\class_exists(App_KernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerTPQlFl3\App_KernelTestDebugContainer::class, App_KernelTestDebugContainer::class, false);
}

return new \ContainerTPQlFl3\App_KernelTestDebugContainer([
    'container.build_hash' => 'TPQlFl3',
    'container.build_id' => '676071a5',
    'container.build_time' => 1724524672,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTPQlFl3');
