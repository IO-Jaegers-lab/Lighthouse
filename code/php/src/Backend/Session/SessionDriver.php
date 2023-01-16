<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse\Backend\Session;


    /**
     *
     */
    class SessionDriver
    {
        /**
         * @throws \ErrorException
         */
        public function __construct()
        {
            if( SessionState::isDisabled() )
            {
                throw new \ErrorException('Sessions are disabled.');
            }
        }

    }
?>
