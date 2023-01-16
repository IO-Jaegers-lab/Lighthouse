<?php
	/**
	 *
	 */
    namespace IoJaegers\Lighthouse\Utility\Client;

	/**
	 *
	 */
    class ClientInformation
    {
		/**
		 *
		 */
        public function __construct()
        {
			$rIp = $this->load();
			$this->setClientIp( $rIp );
        }
		
		/**
		 * @return string|null
		 */
		public function load(): ?string
		{
			if( self::isSingletonClientIpAddrSet() )
			{
				$this->setClientIp( self::getSingletonClientIpAddr() );
				return $this->getClientIp();
			}
			else
			{
				$rValue = $this->retrieve();
				
				$this->setClientIp( $rValue );
				self::setSingletonClientIpAddr( $rValue );
				
				return $rValue;
			}
		}
	
		/**
		 * @return string|null
		 */
		protected function retrieve(): ?string
		{
			$value = null;
			
			$value = self::call_remote_addr();
			
			if( isset( $value ) )
			{
				return $value;
			}
			
			$value = self::call_http_x_forwarded_for();
			if( isset( $value ) )
			{
				return $value;
			}
			
			$value = self::call_http_client_ip();
			if( isset( $value ) )
			{
				return $value;
			}
			
			return null;
		}

		//
		private ?string $client_ip = null;
		
		private static ?string $singleton_client_ip_addr = null;
		
		private const key_http_client_ip = 'HTTP_CLIENT_IP';
		private const key_http_x_forwarded_for = 'HTTP_X_FORWARDED_FOR';
		private const key_remote_addr = 'REMOTE_ADDR';
	
		//
		/**
		 * @return string|null
		 */
		public function getClientIp(): ?string
		{
			return $this->client_ip;
		}
	
		/**
		 * @param string|null $client_ip
		 * @return void
		 */
		public function setClientIp( ?string $client_ip ): void
		{
			$this->client_ip = $client_ip;
		}
	
		/**
		 * @return array
		 */
		public function debug(): array
		{
			$values = array(
				self::key_http_client_ip => self::call_http_client_ip(),
				self::key_http_x_forwarded_for => self::call_http_x_forwarded_for(),
				self::key_remote_addr => self::call_remote_addr()
			);
			
			return $values;
		}
	
		/**
		 * @return string|null
		 */
		protected function call_http_client_ip(): ?string
		{
			$http_client_ip = $_SERVER[ self::key_http_client_ip ];
			
			if( isset( $http_client_ip ) )
			{
				return $http_client_ip;
			}
		
			return null;
		}
	
		/**
		 * @return string|null
		 */
		protected function call_http_x_forwarded_for(): ?string
		{
			$http_client_ip = $_SERVER[ self::key_http_x_forwarded_for ];
			
			if( isset( $http_client_ip ) )
			{
				return $http_client_ip;
			}
			
			return null;
		}
	
		/**
		 * @return string|null
		 */
		protected function call_remote_addr(): ?string
		{
			$remote_addr = $_SERVER[ self::key_remote_addr ];
			
			if( isset( $remote_addr ) )
			{
				return $remote_addr;
			}
			
			return null;
		}
	
		/**
		 * @return string|null
		 */
		public static function getSingletonClientIpAddr(): ?string
		{
			return self::$singleton_client_ip_addr;
		}
	
		/**
		 * @param string|null $singleton_client_ip_addr
		 * @return void
		 */
		public static function setSingletonClientIpAddr( ?string $singleton_client_ip_addr ): void
		{
			self::$singleton_client_ip_addr = $singleton_client_ip_addr;
		}
	
		/**
		 * @return bool
		 */
		public static function isSingletonClientIpAddrSet(): bool
		{
			return isset( self::$singleton_client_ip_addr );
		}
    }
?>