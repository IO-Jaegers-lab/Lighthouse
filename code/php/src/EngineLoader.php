<?php
    /**
 *
     */
    namespace IoJaegers\Lighthouse;

    use IoJaegers\Lighthouse\Router\Engine;

    class EngineLoader
    {
        public function __construct( Engine $engine )
        {
            $this->setEngine( $engine );
        }

        //
        private ?Engine $engine = null;

        /**
         * @return Engine|null
         */
        public function getEngine(): ?Engine
        {
            return $this->engine;
        }

        /**
         * @param Engine|null $engine
         * @return void
         */
        public function setEngine( ?Engine $engine ): void
        {
            $this->engine = $engine;
        }
    }

?>

