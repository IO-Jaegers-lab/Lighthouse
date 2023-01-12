<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse\Router\Base;


    /**
     *
     */
    class RouterEngineURL
    {
        function __construct( ?RouterEngineDomain $domain,
                              ?RouterEngineQuery $query )
        {
            $this->setDomain( $domain );
            $this->setQuery( $query );
        }

        // variables
        private ?RouterEngineDomain $domain = null;

        private ?RouterEngineQuery $query = null;


        // Accessors
        /**
         * @return RouterEngineDomain|null
         */
        public function getDomain(): ?RouterEngineDomain
        {
            return $this->domain;
        }

        /**
         * @param RouterEngineDomain|null $domain
         */
        public function setDomain( ?RouterEngineDomain $domain ): void
        {
            $this->domain = $domain;
        }

        /**
         * @return RouterEngineQuery|null
         */
        public function getQuery(): ?RouterEngineQuery
        {
            return $this->query;
        }

        /**
         * @param RouterEngineQuery|null $query
         */
        public function setQuery( ?RouterEngineQuery $query ): void
        {
            $this->query = $query;
        }

    }
?>


