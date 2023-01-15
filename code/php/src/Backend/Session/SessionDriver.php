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
        public function __construct()
        {
            if( SessionState::isDisabled() )
            {
                throw new \ErrorException('Sessions are disabled.');
            }
        }

    }
?>
