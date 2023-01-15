<?php
    namespace IoJaegers\Lighthouse\Utility\Files;

    class Navigation
    {
        public function __construct()
        {

        }



        /** What directory am i in.
         * @return string
         * @throws \ErrorException
         */
        public static function Here(): string
        {
            $value = getcwd();

            if( $value === false )
            {
                throw new \ErrorException( 'getcwd failed.' );
            }

            return $value;
        }

        /** Move to this directory
         * @param string $path
         * @return bool
         */
        public static function MoveTo( string $path ): bool
        {


            return false;
        }
    }
?>