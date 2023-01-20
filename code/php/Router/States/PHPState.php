<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse\Router\States;

    use IoJaegers\Lighthouse\Router\States\Templates\StateObject;

    /**
     *
     */
    class PHPState
        extends StateObject
    {
        /**
         * @return bool
         */
        public function detect(): bool
        {
            return false;
        }
    }
?>

