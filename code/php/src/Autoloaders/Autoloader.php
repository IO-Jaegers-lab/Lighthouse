<?php
    namespace IoJaegers\Lighthouse\Autoloaders;

    class Autoloader
    {
        public function load( $class_name )
        {

        }

        public static function SetupLoader(): void
        {
            spl_autoload_register(
                function ( $class_name )
                {


                }
            );
        }
    }
?>
