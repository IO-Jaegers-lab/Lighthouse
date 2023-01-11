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
        <?php
            if($controller->isHTTP())
            {
                echo "true";
            }
            else
            {
                echo "false";
            }
        ?>
    </p>
</div>
<div>
    <p>
        HTTPS:
    </p>
    <p>
        <?php
        if($controller->isHTTPS())
        {
            echo "true";
        }
        else
        {
            echo "false";
        }
        ?>
    </p>
</div>
</html>
