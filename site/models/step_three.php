<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.model' );
class ClonardModelStep_three extends JModel
{
	function getSession()
	{
		return "Step three";
	}
}