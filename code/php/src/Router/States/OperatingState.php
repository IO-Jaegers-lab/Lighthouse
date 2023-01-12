<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse\Router\States;

    use IoJaegers\Lighthouse\Router\States\Templates\StateObject;

    // https://www.php.net/manual/en/function.php-uname.php

    /**
     *
     */
    class OperatingState
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

