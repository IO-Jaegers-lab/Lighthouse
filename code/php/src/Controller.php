<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse;

    use IoJaegers\Lighthouse\Router\RequestUrlController;

    $engine = new Router\Engine();
    $engine->load();

    $controller = new RequestUrlController();
?>

<html>
<div>
    <p>
        HTTP:
    </p>
    <p>
        <?php echo $controller->isHTTP()?>
    </p>
</div>
<div>
    <p>
        HTTPS:
    </p>
    <p>
        <?php echo $controller->isHTTPS()?>
    </p>
</div>
</html>
