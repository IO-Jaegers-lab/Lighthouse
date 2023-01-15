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
        public function startup(): void
        {
            $process = $this->instantiateProcess();
            $process->run();
        }
        
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
        public function cache(): void
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

        /**
         * @param EngineController $engineController
         * @return EngineProcess
         */
        public static function createProcess( EngineController $engineController ): EngineProcess
        {
            $interface = new EngineProcess( $engineController );
            return $interface;
        }
    
        
        /**
         * @param EngineController $controller
         * @return EngineLoader
         */
        public static function createLoader( EngineController $controller ): EngineLoader
        {
            $loader = new EngineLoader( $controller );
            return $loader;
        }

        /**
         * @return EngineProcess
         */
        public function instantiateProcess(): EngineProcess
        {
            return self::createProcess( $this );
        }

        /**
         * @return EngineLoader
         */
        public function instantiateLoader(): EngineLoader
        {
            return self::createLoader( $this );
        }
    }
?>
