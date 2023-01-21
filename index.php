<?php
    // include autoloader
    require_once 'vendor/autoload.php';

	// Start the process
	use IoJaegers\Lighthouse\EngineController;

	$engineController = new EngineController();
	$engineController->startup();
?>