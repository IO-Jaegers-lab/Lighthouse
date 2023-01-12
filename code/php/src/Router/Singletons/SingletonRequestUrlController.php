<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse\Router\Singletons;

    use IoJaegers\Lighthouse\Router\Controllers\RequestUrlController;


    /**
     *
     */
    class SingletonRequestUrlController
    {
        /**
         *
         */
        function __construct()
        {

        }

        private static $singleton = null;

        /**
         * @return RequestUrlController
         */
        public static function getSingleton(): RequestUrlController
        {
            if( self::isSingletonNull() )
            {
                self::setSingleton( new RequestUrlController() );
            }

            return self::$singleton;
        }

        /**
         * @param RequestUrlController $singleton
         * @return void
         */
        public static function setSingleton( RequestUrlController $singleton ): void
        {
            self::$singleton = $singleton;
        }

        /**
         * @return bool
         */
        public static function isSingletonNull(): bool
        {
            return self::$singleton == null;
        }
    }
?>
