<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse;

    use IoJaegers\Lighthouse\Autoloaders\Autoloader;
    use IoJaegers\Lighthouse\Router\Engine;


    /**
     *
     */
    class EngineController
    {
        /**
         *
         */
        function __construct()
        {
            $this->setEngine(
                new Engine()
            );
        }

        /**
         * @return void
         */
        function __deconstruct(): void
        {

        }


        // Variables
        private ?Engine $engine = null;


        // Code Structure
        /**
         * @return void
         */
        public function setup(): void
        {
            $this->engine->requirements();
        }

        /**
         * @return void
         */
        public function execute(): void
        {

        }

        /**
         * @return void
         */
        public function save(): void
        {

        }

        /**
         * @return void
         */
        public function load(): void
        {
            $loader = new EngineLoader( $this->engine );
            $loader->load();
        }

        /**
         * @return void
         *
         */
        public function cleanup(): void
        {

        }


        // Accessors
        /**
         * @return Engine|null
         */
        public final function getEngine(): ?Engine
        {
            return $this->engine;
        }

        /**
         * @param Engine|null $engine
         */
        public final function setEngine( ?Engine $engine ): void
        {
            $this->engine = $engine;
        }
    }
?>
