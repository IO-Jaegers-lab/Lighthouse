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
        public function __construct()
        {

        }


        /**
         * @return bool
         */
        public function default(): bool
        {
            return false;
        }


        /**
         * @param int $state
         * @return bool
         */
        public function detect( int $state ): bool
        {
            return true;
        }

        // Variables
        private $stateInterface = null;


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

