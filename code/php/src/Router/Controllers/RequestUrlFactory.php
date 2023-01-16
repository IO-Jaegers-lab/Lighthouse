<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse\Router\Controllers;

    use IoJaegers\Lighthouse\Router\Base\RouterEngineDomain;
    use IoJaegers\Lighthouse\Router\Base\RouterEngineProtocol;
    use IoJaegers\Lighthouse\Router\Base\RouterEngineQuery;
    use IoJaegers\Lighthouse\Router\Base\RequestUniformResourceLocator;

    use IoJaegers\Lighthouse\Router\StateDetector;
    use IoJaegers\Lighthouse\Router\States\HttpState;


    /**
     *
     */
    class RequestUrlFactory
    {
        // Constructor
        /**
         *
         */
        public function __construct()
        {
            $this->setUrl(
                new RequestUniformResourceLocator( null, null ) );
        }

        // Variables
        private RequestUniformResourceLocator|null $url = null;

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
            $httpState = new StateDetector( new HttpState() );

            // 0 Web CGI
            if( $httpState->selected_state() )
            {
                if( $httpState->detect_state( HttpState::UsingHttps ) )
                {
                    $this->getUrl()->setProtocol( RouterEngineProtocol::HTTPS );
                    return;
                }

                if( $httpState->detect_state( HttpState::UsingHttp ) )
                {
                    $this->getUrl()->setProtocol( RouterEngineProtocol::HTTP );
                    return;
                }
            }
            else
            {
                print( "Error" );
            }
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
         * @return RequestUniformResourceLocator|null
         */
        public final function getUrl(): ?RequestUniformResourceLocator
        {
            return $this->url;
        }

        /**
         * @param RequestUniformResourceLocator|null $url
         */
        public final function setUrl( ?RequestUniformResourceLocator $url ): void
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
        /**
         * @return string|null
         */
        public static function queueInterface(): ?string
        {
            return $_SERVER[ 'GATEWAY_INTERFACE' ];
        }
    
        /**
         * @return string|null
         */
        public static function queueHostname(): ?string
        {
            return $_SERVER[ 'HTTP_HOST' ];
        }
    
        /**
         * @return string|null
         */
        public static function queueRequestUri(): ?string
        {
            return $_SERVER[ 'REQUEST_URI' ];
        }
    }
?>

