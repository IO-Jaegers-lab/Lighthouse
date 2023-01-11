<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse\Router\States;


    /**
     *
     */
    class HttpState
        extends StateObject
    {
        public function __construct()
        {

        }

        public function detect(): bool
        {
            switch( $this->getDetectState() )
            {
                case HttpState::UsingWebInterface:
                    return true;

                case HttpState::UsingHttp:
                    return true;

                case HttpState::UsingHttps:
                    return true;

                default:
                    return true;
            }

            return false;
        }

        const UsingWebInterface = 0;

        const UsingHttp = 1;

        const UsingHttps = 2;
    }
?>