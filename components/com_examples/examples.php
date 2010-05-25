<?php
defined( '_JEXEC' ) or die;

jimport('joomla.application.component.controller');

class ExamplesController extends JController
{
	public function display()
	{
		parent::display();
	}
}

$controller = new ExamplesController();
$controller->execute(JRequest::getCmd('task'));
$controller->redirect();
