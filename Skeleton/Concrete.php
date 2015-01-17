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
			throw new Exception( __METHOD__ . '() params provided are not an array' );
		}

		$this->validate();
	}

	/**
	 * @throws Exception
	 */
	public function validate() {
	}

}