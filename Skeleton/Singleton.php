<?php
namespace Penn\Skeleton;

use Penn\Php\Exception;

class Singleton {

	/**
	 * @var object
	 */
	protected static $instance;

	/**
	 * protected constructor to prevent creating
	 * a new instance with the ‘new’ keyword from outside the class
	 */
	protected function __construct() {}

	/**
	 * private unserialize method to prevent cloning of the instance
	 */
	private function __clone() {}

	/**
	 * private unserialize method to prevent unserializing of the instance
	 */
	private function __wakeup() {}

	public static function getInstance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

}