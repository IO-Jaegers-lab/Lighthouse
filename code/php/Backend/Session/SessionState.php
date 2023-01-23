<?php
	/**
 *
	 */
	namespace IoJaegers\Lighthouse\Backend\Session;

	
	/**
	 *
	 */
	final class SessionState
	{
		/**
		 * @return bool
		 */
		public static function isDisabled(): bool
		{
			return session_status() == PHP_SESSION_DISABLED;
		}
		
		/**
		 * @return bool
		 */
		public static function isUsed(): bool
		{
			return session_status() == PHP_SESSION_ACTIVE;
		}
		
		/**
		 * @return bool
		 */
		public static function isActive(): bool
		{
			return session_status() == PHP_SESSION_NONE;
		}
		
		/**
		 * @return bool
		 */
		public static function isAllowed(): bool
		{
			return self::isUsed() || self::isActive();
		}
	}
?>
