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

        }

        // Variables
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
         * @return string|null
         */
        public final function toString(): ?string
        {
            return null;
        }
    }
?>


