<?php
    /**
 *
     */
    namespace IoJaegers\Lighthouse;

    use IoJaegers\Lighthouse\Router\Engine;


    /**
     *
     */
    class EngineLoader
    {
        /**
         * @param Engine $engine
         */
        public function __construct( Engine $engine )
        {
            $this->setEngine( $engine );
        }

        /**
         * @return void
         */
        public function load(): void
        {

        }

        // Variables
        private ?Engine $engine = null;

        /**
         * @return Engine|null
         */
        public final function getEngine(): ?Engine
        {
            return $this->engine;
        }

        /**
         * @param Engine|null $engine
         * @return void
         */
        public final function setEngine( ?Engine $engine ): void
        {
            $this->engine = $engine;
        }
    }

?>

