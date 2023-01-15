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
         */
        public function run()
        {
            $controller = $this->getEngineController();

            $controller->load();
            $controller->setup();

            $controller->execute();
            $controller->cache();

            $controller->save();
            $controller->cleanup();
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
         * @param EngineController|null $controller
         */
        public final function setEngineController( ?EngineController $controller ): void
        {
            $this->controller = $controller;
        }
    }
?>