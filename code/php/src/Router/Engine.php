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
        function __construct()
        {

        }

        function __deconstruct(): void
        {

        }

        function requirements(): void
        {
            SessionMaintenance::Setup();



        }
    }
?>
