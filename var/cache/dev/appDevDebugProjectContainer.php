<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7xxalho\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7xxalho/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container7xxalho.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container7xxalho\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container7xxalho\appDevDebugProjectContainer();
