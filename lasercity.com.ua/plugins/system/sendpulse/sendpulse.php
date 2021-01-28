<?php
/**
 * @copyright	Copyright (c) 2016 JIS. All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');

/**
 * System - sendpulse Plugin
 *
 * @package		Joomla.Plugin
 * @subpakage	JIS.sendpulse
 */
class plgSystemsendpulse extends JPlugin {

	/**
	 * Constructor.
	 *
	 * @param 	$subject
	 * @param	array $config
	 */
	function __construct(&$subject, $config = array()) {
		// call parent constructor
		parent::__construct($subject, $config);
	}
	
	public function onBeforeCompileHead (){
		
		$id=$this->params->get('id');
		
		if (empty(trim($id))==false) {
			$document = JFactory::getDocument();
			$document->addCustomTag('<script charset="UTF-8" src="//cdn.sendpulse.com/js/push/'.$id.'.js" async></script>');
		}
		
		return true;
	}
	
	
}