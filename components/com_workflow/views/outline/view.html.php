<?php
defined( '_JEXEC' ) or die;

jimport( 'joomla.application.component.view');

include JPATH_COMPONENT . '/helper.php';

class WorkflowViewOutline extends JView
{
	public function display($tpl = null)
	{
		$outline = WorkflowHelper::getOutline();
		$this->assignRef('outline', $outline);

		parent::display($tpl);
	}
}