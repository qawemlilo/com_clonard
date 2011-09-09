<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.model' );
class ClonardModelStep_two extends JModel
{
	function getSession()
	{
		return "Step two";
	}
}