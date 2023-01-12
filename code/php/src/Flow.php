<?php
    /**
 *
     */
    namespace IoJaegers\Lighthouse;

    $controller = new EngineController();

    $controller->setup();
    $controller->load();

    $controller->execute();
    $controller->save();

    $controller->cleanup();
?>