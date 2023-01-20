<?php
	/**
 *
	 */
	namespace IoJaegers\Lighthouse\Backend\Setup;
	
	
	/**
	 *
	 */
	class SetupExtensionController
	{
		/**
		 *
		 */
		public function __construct()
		{
		
		}
		
		
		/**
		 * @return void
		 */
		public function execute(): void
		{
		
		}
		
		
		/**
		 * @param string $extension_name
		 * @return bool
		 */
		protected static function isLoaded( string $extension_name ): bool
		{
			if( extension_loaded( $extension_name ) )
			{
				return true;
			}
			
			return false;
		}
	}
?>