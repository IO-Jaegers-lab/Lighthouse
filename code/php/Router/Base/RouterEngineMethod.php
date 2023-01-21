<?php
    /**
 *
     */
    namespace IoJaegers\Lighthouse\Router\Base;

    /**
     *
     */
    enum RouterEngineMethod
    {
        case Delete;

        case Get;

        case Options;

        case Head;

        case Patch;

        case Post;

        case Put;


        /**
         * For the usage of custom methods
         */
        case Custom;
    }
?>