<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse\Router\States;


    /**
     *
     */
    interface StateInterface
    {
        /**
         * @return bool
         */
        public function detect(): bool;

        /**
         * @param int $argument
         * @return void
         */
        public function setType( int $argument ): void;
    }
?>