<?php
	namespace IoJaegers\Lighthouse;
	
	// Start the process
use IoJaegers\Lighthouse\Backend\Session\SessionMaintenance;

	//$engineController = new EngineController();
	//$engineController->startup();
?>

<pre>
	<?php
	print_r(session_id());
	if(SessionMaintenance::isStarted())
	{
		echo "true";
	}
	else
	{
		echo "false";
	}
	?>
</pre>

