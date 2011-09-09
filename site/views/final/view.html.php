<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view');

class ClonardViewFinal extends JView
{
	function display($tpl = null)
	{
		$model =& $this->getModel();
		$session = $model->getSession();
		$this->assignRef('session', $session);

		parent::display($tpl);
	}
}