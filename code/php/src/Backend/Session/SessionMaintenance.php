<?php
    /**
 *
     */
    namespace IoJaegers\Lighthouse\Backend\Session;


    /**
     * Headers used by the driver and Engine.
     */
    final class SessionMaintenance
    {
        
        // Variables
        protected static bool $isStarted = false;
    
        /**
         * @return bool
         */
        public static function isStarted(): bool
        {
            if( self::getIsStarted() )
            {
                return self::$isStarted;
            }
            
            if( SessionState::isAllowed()  )
            {
                self::setIsStarted( true );
                return self::getIsStarted();
            }
            
            return self::getIsStarted();
        }
    
        /**
         * @param bool $isStarted
         */
        public static function setIsStarted( bool $isStarted ): void
        {
            self::$isStarted = $isStarted;
        }
    
        /**
         * @return bool
         */
        public static function getIsStarted(): bool
        {
            return self::$isStarted;
        }
    
        /** runs in the beginning. to setup a session
         * @return void
         */
        public static function Setup(): void
        {
            if( !self::isStarted() )
            {
                self::setIsStarted( true );
                session_start();
            }
        }
    
        /** Deletes the storage associated with the session
         * @return void
         */
        public static function DeleteStorage(): void
        {
            session_unset();
        }
    
        /** Destroys the current session
         * @return void
         */
        public static function Destroy(): void
        {
            session_destroy();
        }
    
        
        /**
         * @return void
         */
        public static function Close(): void
        {
            session_commit();
        }
        
    }
?>
