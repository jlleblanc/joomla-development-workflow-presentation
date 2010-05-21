<?php
defined( '_JEXEC' ) or die;

JHTML::_('behavior.mootools');

jimport('joomla.application.component.controller');

class JstestController extends JController
{
	public function display()
	{
		$view = JRequest::getVar('view', '');

		if ($view == '') {
			JRequest::setVar('view', 'default');
		}

		parent::display();
	}
}

$controller = new JstestController();
$controller->execute(JRequest::getCmd('task'));
$controller->redirect();
