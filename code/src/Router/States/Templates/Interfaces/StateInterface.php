<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse\Router\States\Templates\Interfaces;


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
         * @param int|null $detect_state
         * @return mixed
         */
        public function setDetectState(?int $detect_state);
    }
?>

