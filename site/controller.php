<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.controller');

class ClonardController extends JController
{
	function display()
	{
        if(!JRequest::getVar('view')) {
	          //make add client the default
              JRequest::setVar('view', 'step_one');
        }
	   
	    parent::display();
	}

}