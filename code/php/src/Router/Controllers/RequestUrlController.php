<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse\Router\Controllers;

    use IoJaegers\Lighthouse\Router\Base\RouterEngineDomain;
use IoJaegers\Lighthouse\Router\Base\RouterEngineQuery;
    use IoJaegers\Lighthouse\Router\Base\UniformResourceLocator;


    /**
     *
     */
    class RequestUrlController
    {
        // Constructor
        /**
         *
         */
        public function __construct()
        {
            $this->setUrl(
                new UniformResourceLocator( null, null ) );
        }

        // Variables
        private UniformResourceLocator|null $url = null;

        private bool $is_url_case_sensitive = true;


        // Execute
        /**
         * @return void
         */
        public function load(): void
        {
            $this->loadInterface();

            $this->loadProtocol();
            $this->loadHostname();

            $this->loadRequestUriQuery();
        }

        /**
         * @return void
         */
        protected function loadInterface(): void
        {
            $interface = self::queueInterface();
            $this->getUrl()->getInterface()->setName( $interface );
        }

        /**
         * @return void
         */
        protected function loadProtocol(): void
        {
            $protocol = self::queueProtocol();


        }

        /**
         * @return void
         */
        protected function loadHostname(): void
        {
            $hostname = self::queueHostname();

            $domain = new RouterEngineDomain();
            $domain->setHost( $hostname );

            $this->getUrl()->setDomain( $domain );
        }

        /**
         * @return void
         */
        protected function loadRequestUriQuery(): void
        {
            $uri = self::queueRequestUri();
            $uri_query = new RouterEngineQuery( $uri );

            $this->getUrl()->setQuery( $uri_query );
        }

        // Accessor
        /**
         * @return UniformResourceLocator|null
         */
        public final function getUrl(): ?UniformResourceLocator
        {
            return $this->url;
        }

        /**
         * @param UniformResourceLocator|null $url
         */
        public final function setUrl( ?UniformResourceLocator $url ): void
        {
            $this->url = $url;
        }

        /**
         * @return bool
         */
        public function isIsUrlCaseSensitive(): bool
        {
            return $this->is_url_case_sensitive;
        }

        /**
         * @param bool $is_url_case_sensitive
         */
        public function setIsUrlCaseSensitive( bool $is_url_case_sensitive ): void
        {
            $this->is_url_case_sensitive = $is_url_case_sensitive;
        }

        /**
         * @return void
         */
        public function debug()
        {
            print_r( $this );
        }

        //
        public static function queueInterface(): ?string
        {
            return $_SERVER[ 'GATEWAY_INTERFACE' ];
        }

        public static function queueProtocol(): ?string
        {
            return $_SERVER[ 'SERVER_PROTOCOL' ];
        }

        public static function queueHostname(): ?string
        {
            return $_SERVER[ 'HTTP_HOST' ];
        }

        public static function queueRequestUri(): ?string
        {
            return $_SERVER[ 'REQUEST_URI' ];
        }
    }
?>

