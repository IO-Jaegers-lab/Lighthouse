<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse\Router;

    use IoJaegers\Lighthouse\Router\States\Templates\Interfaces\StateInterface;


    /**
     *
     */
    class StateDetector
    {
        /**
         *
         */
        public function __construct( ?StateInterface $state )
        {
            $this->setStateInterface( $state );
        }

        /**
         * @return void
         */
        public function __deconstruct(): void
        {

        }

        public const default = 0;


        /**
         * @return bool
         */
        public final function default(): bool
        {
            return $this->detect( self::default );
        }


        /**
         * @param int $state
         * @return bool
         */
        public function detect( int $state ): bool
        {
            $this->getStateInterface()->setDetectState( $state );
            return $this->getStateInterface()->detect();
        }

        // Variables
        private ?StateInterface $stateInterface = null;


        /**
         * @return StateInterface|null
         */
        public function getStateInterface(): ?StateInterface
        {
            return $this->stateInterface;
        }

        /**
         * @param StateInterface $stateInterface
         * @return void
         */
        public function setStateInterface( StateInterface $stateInterface ): void
        {
            $this->stateInterface = $stateInterface;
        }

    }
?>

