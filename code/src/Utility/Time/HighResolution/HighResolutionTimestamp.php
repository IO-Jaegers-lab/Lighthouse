<?php
	/**
	 *
	 */
	namespace IoJaegers\Lighthouse\Utility\Time\HighResolution;
	
	use IoJaegers\Lighthouse\Utility\Time\BaseTimestamp;
	
	/**
	 *
	 */
	class HighResolutionTimestamp
		extends BaseTimestamp
	{
		/**
		 *
		 */
		public function __construct()
		{
		
		}
		
		/**
		 * @return int
		 */
		public function now(): int
		{
			
			return -1;
		}
	}
?>