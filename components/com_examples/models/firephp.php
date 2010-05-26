<?php
defined( '_JEXEC' ) or die;

jimport('joomla.application.component.model');

class ExamplesModelFirephp extends JModel
{
	private $data;

	public function getData()
	{
		if (!isset($this->data))
		{
			$query = "SELECT id, name, username, email FROM #__users";
			$this->data = $this->_getList($query);
		}
		fb($this->data[0]->username);
		return $this->data;
	}
}