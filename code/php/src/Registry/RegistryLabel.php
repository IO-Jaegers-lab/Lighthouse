<?php
    /**
 *
 */
    namespace IoJaegers\Lighthouse\Registry;


    /**
     *
     */
    class RegistryLabel
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

        private ?string $label = null;

        /**
         * @return string
         */
        public function getLabel(): string
        {
            return $this->label;
        }

        /**
         * @param string $label
         * @return void
         */
        public function setLabel( string $label ): void
        {
            $this->label = $label;
        }
    }
?>
