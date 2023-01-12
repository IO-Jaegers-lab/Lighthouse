<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse\Router\Singletons;

    use IoJaegers\Lighthouse\Router\RequestUrlController;


    class SingletonRequestUrlController
    {
        function __construct()
        {

        }

        private static $singleton = null;

        public static function getSingleton(): RequestUrlController
        {
            if( self::isSingletonNull() )
            {
                self::setSingleton( new RequestUrlController() );
            }

            return self::$singleton;
        }

        public static function setSingleton( RequestUrlController $singleton ): void
        {
            self::$singleton = $singleton;
        }

        public static function isSingletonNull(): bool
        {
            return self::$singleton == null;
        }
    }
?>
