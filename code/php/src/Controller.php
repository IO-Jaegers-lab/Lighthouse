<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse;

    require_once 'Setup/Autoloader.php';

    use IoJaegers\Lighthouse\Router\RequestUrlController;

    $engine = new Router\Engine();
    $engine->load();
?>