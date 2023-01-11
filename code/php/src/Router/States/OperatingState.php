<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse\Router\States;


    // https://www.php.net/manual/en/function.php-uname.php

    /**
     *
     */
    class OperatingState
        extends StateObject
    {
        public function detect(): bool
        {
            return false;
        }
    }
?>