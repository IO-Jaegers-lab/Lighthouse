<?php
    /**
     *
     */
    namespace IoJaegers\Lighthouse\Router\Base;


    /**
     *
     */
    class RouterEngineInterface
    {
		/**
		 *
		 */
        public function __construct()
        {

        }

        private ?string $name = null;


        /**
         * @return string|null
         */
        public function getName(): ?string
        {
            return $this->name;
        }

        /**
         * @param string|null $name
         */
        public function setName( ?string $name ): void
        {
            $this->name = $name;
        }

    }
?>