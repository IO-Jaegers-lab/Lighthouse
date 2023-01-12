<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse;

    use IoJaegers\Lighthouse\Autoloaders\Autoloader;
    use IoJaegers\Lighthouse\Router\Engine;

    Autoloader::SetupLoader();

    $engine = new Engine();
    $loader = new EngineLoader( $engine );

    $engine->load();
?>
