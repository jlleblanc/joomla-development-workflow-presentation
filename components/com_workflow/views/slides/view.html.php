<?php
defined( '_JEXEC' ) or die;

jimport( 'joomla.application.component.view');

include JPATH_COMPONENT . '/helper.php';

class WorkflowViewSlides extends JView
{
	public function display($tpl = null)
	{
		parent::display($tpl);

		$layout = JRequest::getCmd('layout', '');
		$outline = WorkflowHelper::getOutline();

		$slides = array_keys($outline);
		$index = array_search($layout, $slides);

		$back = false;
		$next = false;

		if ($index > 0) {
			$back = $slides[$index - 1];
		}

		if ($index < count($outline) - 1) {
			$next = $slides[$index + 1];
		}

		include 'nav.php';
	}
}