<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse\Router;


    class RequestUrlController
    {
        function __construct()
        {

        }

        function isHTTP(): bool
        {
            if( !$this->isHTTPS() )
            {
                return true;
            }

            return false;
        }

        function isHTTPS(): bool
        {
            if( $this->isHttpsSet() )
            {
                if( $_SERVER[ 'HTTPS' ] == 'on' )
                {
                    return true;
                }
            }

            return false;
        }

        private function isHttpsSet(): bool
        {
            return isset( $_SERVER[ 'HTTPS' ] );
        }
    }
?>