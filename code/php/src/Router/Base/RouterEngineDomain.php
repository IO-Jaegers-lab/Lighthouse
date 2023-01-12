<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse\Router\Base;

    /**
     *
     */
    class RouterEngineDomain
    {
        public function __construct()
        {
            $this->setProtocol( RouterEngineProtocol::Unknown );
        }

        // Variables
        private RouterEngineProtocol $protocol;

        private ?string $host = null;


        // Accessors
        /**
         * @return string|null
         */
        public final function getHost(): ?string
        {
            return $this->host;
        }

        /**
         * @param string|null $host
         */
        public final function setHost( ?string $host ): void
        {
            $this->host = $host;
        }

        /**
         * @return RouterEngineProtocol
         */
        public function getProtocol(): RouterEngineProtocol
        {
            return $this->protocol;
        }

        /**
         * @param RouterEngineProtocol $protocol
         * @return void
         */
        public function setProtocol( RouterEngineProtocol $protocol ): void
        {
            $this->protocol = $protocol;
        }

    }
?>


