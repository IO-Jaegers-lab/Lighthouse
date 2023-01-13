<?php
    /**
     * nginx - php-fpm = fpm-fcgi
     */
    namespace IoJaegers\Lighthouse\Router\States;

    use IoJaegers\Lighthouse\Router\States\Templates\StateObject;


    /**
     *
     */
    class HttpState
        extends StateObject
    {
        /**
         *
         */
        public function __construct()
        {


        }

        /**
         * @return bool
         */
        public function detect(): bool
        {
            switch( $this->getDetectState() )
            {
                case self::UsingWebInterface:
                    return $this->detectWebInterface();

                case HttpState::UsingHttp:
                    return $this->detectHttp();

                case HttpState::UsingHttps:
                    return $this->detectHttps();
            }

            return false;
        }

        /**
         * @return bool
         */
        protected function detectHttp(): bool
        {

            return self::getIsHttp();
        }

        /**
         * @return bool
         */
        protected function detectHttps(): bool
        {
            return self::getIsHttps();
        }

        /**
         * @return bool
         */
        protected function detectWebInterface(): bool
        {
            return true;
        }

        // Constants
        const UsingWebInterface = 0;

        const UsingHttp = 1;

        const UsingHttps = 2;

        public static function getServerProtocol(): ?string
        {
            return $_SERVER[ 'SERVER_PROTOCOL' ];
        }


        public static function getIsHttp(): bool
        {
            if( isset( $_SERVER[ 'SERVER_PROTOCOL' ] ) )
            {
                $value = strtolower( $_SERVER[ 'SERVER_PROTOCOL' ] );

                $result = explode("/", $value );

                if( $result[0] == 'http' )
                {
                    return true;
                }
            }

            return false;
        }

        public static function getIsHttps(): bool
        {
            if( isset( $_SERVER[ 'HTTPS' ] ) )
            {
                $value = strtolower( $_SERVER[ 'HTTPS' ] );

                if( $value == 'on' )
                {
                    return true;
                }
            }

            return false;
        }
    }
?>

