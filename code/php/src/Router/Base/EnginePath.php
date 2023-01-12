<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse\Router\Base;

    /**
     *
     */
    class EnginePath
    {
        function __construct( ?String $query )
        {
            $this->setQuery( $query );
        }

        // Variables
        private $query = null;

        public function getQuery(): ?String
        {
            return $this->query;
        }

        public function setQuery( String $query )
        {
            $this->query = $query;
        }
    }
?>


