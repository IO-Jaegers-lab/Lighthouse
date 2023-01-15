<?php
    /**
 *
     */
    namespace IoJaegers\Lighthouse\Backend\Session;


    /**
     *
     */
    class SessionMaintenance
    {
        public static function Setup(): void
        {
            session_start();
        }

        public static function DeleteStorage(): void
        {
            session_unset();
        }

        public static function Destroy(): void
        {
            session_destroy();
        }
    }
?>
