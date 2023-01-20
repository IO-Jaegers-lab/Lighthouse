<?php
    namespace IoJaegers\Lighthouse\Router\States\Templates;

    use IoJaegers\Lighthouse\Router\States\Templates\Interfaces\StateInterface;


    /**
     *
     */
    abstract class StateObject
        implements StateInterface
    {
        /**
         *
         */
        public function __construct()
        {

        }

        // Variables
        private int $detect_state = 0;


        // Accessors
        /**
         * @return int|null
         */
        public function getDetectState(): ?int
        {
            return $this->detect_state;
        }

        /**
         * @param int|null $detect_state
         */
        public function setDetectState( ?int $detect_state ): void
        {
            $this->detect_state = $detect_state;
        }
    }
?>

