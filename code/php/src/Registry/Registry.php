<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse\Registry;


    /**
     *
     */
    class Registry
    {
        /**
         *
         */
        function __construct()
        {

        }
    
        /**
         * @return void
         */
        function __deconstruct(): void
        {

        }

        private RegistryCache|null $cache = null;

        //
        /**
         * @return void
         */
        public function load():void
        {

        }

        /**
         * @return void
         */
        public function save(): void
        {

        }

        /**
         * @return RegistryCache|null
         */
        public function getCache(): ?RegistryCache
        {
            return $this->cache;
        }

        /**
         * @param RegistryCache|null $cache
         */
        public function setCache( ?RegistryCache $cache ): void
        {
            $this->cache = $cache;
        }

    }
?>
