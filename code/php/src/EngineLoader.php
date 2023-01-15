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
         * @param EngineController $engine
         */
        public function __construct( EngineController $engine )
        {
            $this->setEngineController( $engine );
        }

        //
        /**
         * @return void
         */
        public function load(): void
        {
            $loader = $this->getEngineController()->instantiateLoader();
            $loader->load();
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
         * @param EngineController|null $engineController
         * @return void
         */
        public final function setEngineController( ?EngineController $engineController ): void
        {
            $this->engineController = $engineController;
        }
    }
?>

