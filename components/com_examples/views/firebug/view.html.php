<?php
defined( '_JEXEC' ) or die;

jimport( 'joomla.application.component.view');

class ExamplesViewFirebug extends JView
{
	public function display($tpl = null)
	{
		$data = $this->get('Data');
		$this->assign('data', $data);

		parent::display($tpl);
	}
}