<?php
    /**
 *
     */
    namespace IoJaegers\Lighthouse;

    print "Testing=====================================================================";
    echo "</br>";

    use IoJaegers\Lighthouse\Router\Controllers\RequestUrlController;

    $requestController = new RequestUrlController();
    $requestController->load();
?>

<pre>
    <?php
        $requestController->debug();
    ?>
</pre>

<?php
echo "a:" . $_SERVER['REQUEST_URI']

?>
