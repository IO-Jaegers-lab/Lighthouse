<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse\Router;
    
    use IoJaegers\Lighthouse\Backend\Session\SessionMaintenance;

    
    /**
     *
     */
    class Engine
    {
        /**
         *
         */
        function __construct()
        {

        }
    
        /**
         * @return void
         */
        function __deconstruct(): void
        {

        }
    
        /**
         * @return void
         */
        function requirements(): void
        {
            SessionMaintenance::Setup();



        }
    }
?>
