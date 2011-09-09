<?php
/**
 * @package    Joomla.Tutorials
 * @subpackage Components
 * @link http://docs.joomla.org/Developing_a_Model-View-Controller_Component_-_Part_1
 * @license    GNU/GPL
 */

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view');

class ClonardViewStep_one extends JView
{
	function display($tpl = null)
	{
		$model =& $this->getModel();
		$session = $model->getSession();
		$this->assignRef('session', $session);

		parent::display($tpl);
	}
}