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

    }
?>