<?php
	/**
	 *
	 */
	namespace IoJaegers\Lighthouse\Utility\Time;
	
	/**
	 *
	 */
	abstract class BaseTimestamp
	{
		/**
		 * @return int
		 */
		public abstract function now(): int;
		
		// Variables
		private ?int $value = null;
		
		// Accessors
		/**
		 * @return int|null
		 */
		public final function getValue(): ?int
		{
			return $this->value;
		}
		
		/**
		 * @param int|null $value
		 */
		public final function setValue( ?int $value ): void
		{
			$this->value = $value;
		}
	}
?>