<?php

// Subpackage namespace
namespace LittleBizzy\HeaderCleanup\Core;

/**
 * Core class
 *
 * @package Header Cleanup
 * @subpackage Core
 */
final class Core {



	// Properties
	// ---------------------------------------------------------------------------------------------------



	/**
	 * Single class instance
	 */
	private static $instance;



	// Initialization
	// ---------------------------------------------------------------------------------------------------



	/**
	 * Create or retrieve instance
	 */
	public static function instance($plugin = null) {

		// Check instance
		if (!isset(self::$instance))
			self::$instance = new self($plugin);

		// Done
		return self::$instance;
	}



	/**
	 * Constructor
	 */
	private function __construct($plugin) {

		// Avoid admin area
		if (is_admin())
			return;

		// Check cron or xml-rpc context
		if (defined('DOING_CRON') || defined('XMLRPC_REQUEST'))
			return;

		// Cleaner object
		$this->cleaner = new Cleaner;
	}



}