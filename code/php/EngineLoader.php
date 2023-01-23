<?php
    /**
 *
     */
    namespace IoJaegers\Lighthouse;

    /**
     *
     */
    class EngineLoader
    {
        // Constructors
        /**
         * @param EngineController|null $engine
         */
        public function __construct( ?EngineController $engine )
        {
            $this->setEngineController( $engine );
        }

        //
    
        /**
         * @return void
         * @throws \Exception
         */
        public function load(): void
        {
            $this->validateEngineControllerIsInstantiated();
            
            $loader = $this->getEngineController()->instantiateLoader();
            $loader->load();
        }
    
        /**
         * @return void
         * @throws \ErrorException
         */
        public function validateEngineControllerIsInstantiated(): void
        {
            if( $this->isEngineControllerNull() )
            {
                throw new \ErrorException();
            }
        }

        // Variables
        private ?EngineController $engineController = null;
        
        // Accessor
        /**
         * @return EngineController|null
         */
        public final function getEngineController(): ?EngineController
        {
            return $this->engineController;
        }
    
        /**
         * @return bool
         */
        public final function isEngineControllerNull(): bool
        {
            return !isset( $this->engineController );
        }
    
        /**
         * @param EngineController|null $engineController
         * @return void
         */
        public final function setEngineController( ?EngineController $engineController ): void
        {
            $this->engineController = $engineController;
        }
    }
?>

