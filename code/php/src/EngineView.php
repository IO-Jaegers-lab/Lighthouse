<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse;

    /**
     *
     */
    class EngineView
    {
        /**
         * @param EngineController|null $engine
         */
        public function __construct( ?EngineController $engine )
        {
            $this->setEngine( $engine );
        }


        /**
         * @return void
         */
        public function run()
        {
            $controller = $this->getEngine();

            $controller->setup();
            $controller->load();

            $controller->execute();
            $controller->cache();

            $controller->save();

            $controller->cleanup();
        }

        // Variables
        private ?EngineController $engine = null;

        /**
         * @return EngineController|null
         */
        public final function getEngine(): ?EngineController
        {
            return $this->engine;
        }

        /**
         * @param EngineController|null $engine
         */
        public final function setEngine( ?EngineController $engine ): void
        {
            $this->engine = $engine;
        }
    }
?>