<?php
    namespace IoJaegers\Lighthouse\Router;


    class RequestUrlController
    {
        function __construct()
        {

        }

        function isHTTP(): bool
        {
            if( $this->isHTTPSet() )
            {

            }

            return false;
        }

        function isHTTPS(): bool
        {
            if( $this->isHTTPSet() )
            {
                if( $_SERVER[ 'HTTPS' ] == 'on' )
                {
                    return true;
                }
            }

            return false;
        }

        private function isHTTPSet(): bool
        {
            return isset( $_SERVER[ 'HTTPS' ] );
        }
    }
?>