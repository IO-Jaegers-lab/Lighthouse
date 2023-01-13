<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse\Router\Base;


    /**
     *
     */
    class UniformResourceLocator
    {
        function __construct( ?RouterEngineDomain $domain,
                              ?RouterEngineQuery $query )
        {
            $this->setInterface( new RouterEngineInterface() );
            $this->setProtocol( RouterEngineProtocol::Unknown );

            $this->setDomain( $domain );
            $this->setQuery( $query );
        }

        // variables
        private ?RouterEngineInterface $interface = null;

        private ?RouterEngineDomain $domain = null;

        private ?RouterEngineQuery $query = null;

        private ?RouterEngineProtocol $protocol = null;


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

        /**
         * @return RouterEngineProtocol|null
         */
        public function getProtocol(): ?RouterEngineProtocol
        {
            return $this->protocol;
        }

        /**
         * @param RouterEngineProtocol|null $protocol
         */
        public function setProtocol( ?RouterEngineProtocol $protocol ): void
        {
            $this->protocol = $protocol;
        }

        /**
         * @return RouterEngineInterface|null
         */
        public function getInterface(): ?RouterEngineInterface
        {
            return $this->interface;
        }

        /**
         * @param RouterEngineInterface|null $interface
         */
        public function setInterface( ?RouterEngineInterface $interface ): void
        {
            $this->interface = $interface;
        }


        /**
         * @return string|null
         */
        public function toString(): ?string
        {
            return null;
        }
    }
?>


