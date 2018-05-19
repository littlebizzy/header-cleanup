<?php
/*
Plugin Name: Header Cleanup
Plugin URI: https://www.littlebizzy.com/plugins/header-cleanup
Description: Cleans up most of the unnecessary junk meta included by default in the WordPress header including generator, RSD, shortlink, previous and next, etc.
Version: 1.0.2
Author: LittleBizzy
Author URI: https://www.littlebizzy.com
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Prefix: HDRCLN
*/

// Plugin namespace
namespace LittleBizzy\HeaderCleanup;

// Block direct calls
if (!function_exists('add_action'))
	die;

// Plugin constants
const FILE = __FILE__;
const PREFIX = 'hdrcln';
const VERSION = '1.0.2';

// Loader
require_once dirname(FILE).'/helpers/loader.php';

// Run the main class
Helpers\Runner::start('Core\Core', 'instance');
