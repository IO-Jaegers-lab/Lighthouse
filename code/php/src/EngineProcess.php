<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse;

    /**
     *
     */
    class EngineProcess
    {
        // Constructors
        /**
         * @param EngineController|null $engine
         */
        public function __construct( ?EngineController $engine )
        {
            $this->setEngineController( $engine );
        }
	
		/**
		 * @return void
		 * @throws \ErrorException
		 */
        public function run(): void
        {
			$this->validateEngineControllerIsInstantiated();
			
            $controller = $this->getEngineController();

            $controller->load();
            $controller->setup();

            $controller->execute();
            $controller->cache();

            $controller->save();
            $controller->cleanup();
        }
		
		public function validateEngineControllerIsInstantiated(): void
		{
			if( $this->isEngineControllerNull() )
			{
				throw new \ErrorException();
			}
		}

        // Variables
        private ?EngineController $controller = null;

        // Variables
        /**
         * @return EngineController|null
         */
        public final function getEngineController(): ?EngineController
        {
            return $this->controller;
        }
	
		/**
		 * @return bool
		 */
		public function isEngineControllerNull(): bool
		{
			return !isset( $this->controller );
		}

        /**
         * @param EngineController|null $controller
         */
        public final function setEngineController( ?EngineController $controller ): void
        {
            $this->controller = $controller;
        }
    }
?>