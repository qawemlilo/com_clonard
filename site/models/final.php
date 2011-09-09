<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.model' );
class ClonardModelFinal extends JModel
{
	function getSession()
	{
		return "Final";
	}
}