<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXndyOwb\okpt_my_web_page_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXndyOwb/okpt_my_web_page_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXndyOwb.legacy');

    return;
}

if (!\class_exists(okpt_my_web_page_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXndyOwb\okpt_my_web_page_KernelDevDebugContainer::class, okpt_my_web_page_KernelDevDebugContainer::class, false);
}

return new \ContainerXndyOwb\okpt_my_web_page_KernelDevDebugContainer([
    'container.build_hash' => 'XndyOwb',
    'container.build_id' => '1e0d3229',
    'container.build_time' => 1700355127,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXndyOwb');
