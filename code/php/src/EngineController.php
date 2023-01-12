<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse;

    use IoJaegers\Lighthouse\Autoloaders\Autoloader;
    use IoJaegers\Lighthouse\Router\Engine;


    class EngineController
    {
        function __construct()
        {

        }


        public function execute()
        {
            Autoloader::SetupLoader();

            $engine = new Engine();
            $loader = new EngineLoader( $engine );

            $engine->load();
        }
    }
?>
