<?php
defined( '_JEXEC' ) or die;

jimport( 'joomla.application.component.view');

class ExamplesViewXdebug extends JView
{
	public function display($tpl = null)
	{
		xdebug_start_trace(JPATH_COMPONENT . '/views/xdebug/function_trace');

		$data = $this->get('Data');
		$this->assign('data', $data);

		parent::display($tpl);

		xdebug_stop_trace();
	}
}