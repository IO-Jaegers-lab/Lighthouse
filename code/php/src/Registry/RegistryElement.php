<?php
    /**
 *
     */
    namespace IoJaegers\Lighthouse\Router;


    /**
     *
     */
    class RegistryElement
    {
        function __construct()
        {

        }

        function __deconstruct(): void
        {

        }

        // Variables
        private RegistryLabel|null $label = null;

        private RegistryKey|null $key = null;

        // Accessors
        /**
         * @return RegistryKey|null
         */
        public function getKey(): ?RegistryKey
        {
            return $this->key;
        }

        /**
         * @param RegistryKey $key
         * @return void
         */
        public function setKey( RegistryKey $key ): void
        {
            $this->key = $key;
        }

        /**
         * @return RegistryLabel|null
         */
        public function getLabel(): ?RegistryLabel
        {
            return $this->label;
        }

        /**
         * @param RegistryLabel|null $label
         */
        public function setLabel( ?RegistryLabel $label ): void
        {
            $this->label = $label;
        }
    }
?>
