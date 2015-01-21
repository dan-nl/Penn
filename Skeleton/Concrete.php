<?php
namespace Penn\Skeleton;

use Penn\Php\Exception;

class Concrete {

	/**
	 * @param array $params
	 */
	public function __construct( $params = array() ) {
		$this->init();
		$this->populate( $params );
	}

	/**
	 * initilizes class properties
	 */
	protected function init() {
	}

	/**
	 * @param array $params
	 * @throws Exception
	 */
	protected function populate( $params = array() ) {
		if ( !is_array( $params ) ) {
			error_log( __METHOD__ . '() params provided are not an array' );
			throw new Exception( 'params provided are not an array', 1 );
		}

		$this->validate();
	}

	/**
	 * @throws Exception
	 */
	public function validate() {
	}

}