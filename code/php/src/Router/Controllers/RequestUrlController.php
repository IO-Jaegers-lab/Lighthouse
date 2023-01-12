<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse\Router\Controllers;

    use IoJaegers\Lighthouse\Router\Base\RouterEngineQuery;
use IoJaegers\Lighthouse\Router\Base\RouterEngineURL;


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

        }

        // Variables
        private RouterEngineURL|null $url = null;

        /**
         * @return void
         */
        public function load(): void
        {

        }

        // Accessor
        /**
         * @return RouterEngineURL|null
         */
        public final function getUrl(): ?RouterEngineURL
        {
            return $this->url;
        }

        /**
         * @param RouterEngineURL|null $url
         */
        public final function setUrl( ?RouterEngineURL $url ): void
        {
            $this->url = $url;
        }

    }
?>

