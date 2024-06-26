<?php
class WPChromePHP implements iMashDebug {

	private $api;
	
	public function __construct() {
		include 'api/chromephp/mashsbChromePhp.php';
		$this->api = mashsbChromePhp::getInstance();
	}


	public function log( $var, $label = null ) {
		$this->api->log( $label, $var );
	}

	public function info( $var, $label = null ) {
		$this->api->info( $label, $var );
	}

	public function warn( $var, $label = null ) {
		$this->api->warn( $label, $var );
	}

	public function error( $var, $label = null ) {
		$this->api->error( $label, $var );
	}
}
