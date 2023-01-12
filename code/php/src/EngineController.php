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

        public function setup()
        {
            Autoloader::SetupLoader();
        }

        public function execute()
        {
            $engine = new Engine();
            $loader = new EngineLoader( $engine );

            $engine->load();
        }

        public function save()
        {

        }

        public function load()
        {

        }

        public function cleanup()
        {

        }
    }
?>
