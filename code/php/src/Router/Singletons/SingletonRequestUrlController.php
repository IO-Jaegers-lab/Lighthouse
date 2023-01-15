<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse\Router\Singletons;

    use IoJaegers\Lighthouse\Router\Controllers\RequestUrlFactory;


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
         * @return RequestUrlFactory
         */
        public static function getSingleton(): RequestUrlFactory
        {
            if( self::isSingletonNull() )
            {
                self::setSingleton( new RequestUrlFactory() );
            }

            return self::$singleton;
        }

        /**
         * @param RequestUrlFactory $singleton
         * @return void
         */
        public static function setSingleton(RequestUrlFactory $singleton ): void
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
