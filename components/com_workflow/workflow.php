<?php
defined( '_JEXEC' ) or die;

jimport('joomla.application.component.controller');

class WorkflowController extends JController
{
	public function display()
	{
		parent::display();
	}
}

$controller = new WorkflowController();
$controller->execute(JRequest::getCmd('task'));
$controller->redirect();