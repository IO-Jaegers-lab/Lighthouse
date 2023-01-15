<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse\Registry;


    /**
     *
     */
    class RegistryKey
    {
        function __construct()
        {

        }

        function __deconstruct(): void
        {

        }

        private ?string $value = null;

        /**
         * @return string
         */
        public function getLabel(): string
        {
            return $this->value;
        }

        /**
         * @param string $label
         * @return void
         */
        public function setLabel( string $label ): void
        {
            $this->value = $label;
        }
    }
?>
