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
                    return self::isCli();
            }

            return false;
        }

        const UsingCliInterface = 0;

        public static function isCli(): bool
        {
            if( !php_sapi_name() )
            {
                return false;
            }

            if ( php_sapi_name() == 'cli' )
            {
                return true;
            }

            return false;
        }
    }


?>