<?php
/**
 * IELab Welcome Module Entry Point
 * 
 * @package    IELab
 * @subpackage Modules
 * @link http://ielab.edu.au/
 * @license        GNU/GPL, see LICENSE.php
 * mod_ielabwelcome is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
 
// No direct access
defined('_JEXEC' ) or die;
 
 
// Not using the computed welcome stuff yet.

// Include the syndicate functions only once
//require_once dirname(__FILE__) . '/helper.php';
// $footer = modIELabWelcomeHelper::getWelcome($params);

// Load the template to render the HTML.	
require(JModuleHelper::getLayoutPath('mod_ielabwelcome'));

?>