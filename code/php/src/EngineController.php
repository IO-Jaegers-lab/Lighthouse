<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse;

    use IoJaegers\Lighthouse\Autoloaders\Autoloader;
    use IoJaegers\Lighthouse\Backend\Session\SessionMaintenance;
    use IoJaegers\Lighthouse\Backend\Setup\SetupExtensionController;
    
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
        public function startup(): void
        {
            $this->isEngineInstantiated();
            $process = $this->instantiateProcess();
            $process->run();
        }
        
        /**
         * @return void
         */
        public function setup(): void
        {
            $this->isEngineInstantiated();
            $this->engine->requirements();
            
            $setup = new SetupExtensionController();
            $setup->execute();
        }

        /**
         * @return void
         */
        public function execute(): void
        {
            $this->isEngineInstantiated();
        }

        /**
         * @return void
         */
        public function cache(): void
        {
            $this->isEngineInstantiated();
            
        }

        /**
         * @return void
         */
        public function save(): void
        {
            $this->isEngineInstantiated();
            SessionMaintenance::Close();
        }

        /**
         * @return void
         */
        public function load(): void
        {
            $this->isEngineInstantiated();
        }

        /**
         * @return void
         *
         */
        public function cleanup(): void
        {
            $this->isEngineInstantiated();

        }

        // Errors
        /**
         * @return void
         */
        public function isEngineInstantiated(): void
        {
            if( $this->isEngineNull() )
            {
                throw new \Error();
            }
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
         * @return bool
         */
        public final function isEngineNull(): bool
        {
            return !isset( $this->engine );
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
