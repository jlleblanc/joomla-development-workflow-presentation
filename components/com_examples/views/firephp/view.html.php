<?php
defined( '_JEXEC' ) or die;

jimport( 'joomla.application.component.view');

class ExamplesViewFirephp extends JView
{
	public function display($tpl = null)
	{
		$users = $this->get('Data');
		$this->assign('users', $users);

		parent::display($tpl);
	}
}