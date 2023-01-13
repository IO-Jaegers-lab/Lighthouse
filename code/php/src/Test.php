<?php
    /**
 *
     */
    namespace IoJaegers\Lighthouse;

    print "Testing=====================================================================";
    echo "</br>";

    use IoJaegers\Lighthouse\Router\Controllers\RequestUrlFactory;

    $requestController = new RequestUrlFactory();
    $requestController->load();
?>

<pre>
    <?php
        $requestController->debug();
    ?>
</pre>
