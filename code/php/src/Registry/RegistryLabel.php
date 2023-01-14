<?php
/**
 *
 */
namespace IoJaegers\Lighthouse\Router;


    /**
     *
     */
    class RegistryLabel
    {
        function __construct()
        {

        }

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
