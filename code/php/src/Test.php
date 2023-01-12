<?php
    /**
 *
     */
    namespace IoJaegers\Lighthouse;

    $controller = new EngineController();
    $view = $controller->instantiateView();
    $view->run();
?>