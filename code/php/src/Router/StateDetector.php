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
         * @param StateInterface|null $state
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

        // Variables
        private ?StateInterface $stateInterface = null;

        public const default = 0;


        /**
         * @return bool
         */
        public final function reset_state(): bool
        {
            return $this->detect( self::default );
        }


        /**
         * @param int $state
         * @return bool
         */
        public function detect_state( int $state ): bool
        {
            $this->getStateInterface()->setDetectState( $state );
            return $this->getStateInterface()->detect();
        }

        /**
         * @return bool
         */
        public function selected_state(): bool
        {
            return $this->getStateInterface()->detect();
        }


        // Accessors
        /**
         * @return StateInterface|null
         */
        public final function getStateInterface(): ?StateInterface
        {
            return $this->stateInterface;
        }

        /**
         * @param StateInterface $stateInterface
         * @return void
         */
        public final function setStateInterface( StateInterface $stateInterface ): void
        {
            $this->stateInterface = $stateInterface;
        }

    }
?>

