<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse\Router\States;


    /**
     *
     */
    class CliState
        extends StateObject
    {
        public function __construct()
        {

        }

        public function detect(): bool
        {
            switch( $this->getDetectState() )
            {
                case CliState::UsingCliInterface:
                    return true;

                default:
                    return true;
            }

            return false;
        }

        const UsingCliInterface = 0;

    }
?>