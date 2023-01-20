<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse\Router\Base;


    /**
     *
     */
    class RouterEngineQuery
    {
        /**
         * @param String|null $query
         */
        function __construct( ?String $query )
        {
            $this->setQuery( $query );
        }

        // Variables
        private $query = null;

        // Accessors
        /**
         * @return String|null
         */
        public final function getQuery(): ?String
        {
            return $this->query;
        }

        /**
         * @param String $query
         * @return void
         */
        public final function setQuery( String $query )
        {
            $this->query = $query;
        }


        /**
         * @return string|null
         */
        public final function toString(): ?string
        {
            return null;
        }
    }
?>


