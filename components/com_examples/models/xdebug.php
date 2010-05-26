<?php
defined( '_JEXEC' ) or die;

jimport('joomla.application.component.model');

class ExamplesModelXdebug extends JModel
{
	private $data;

	public function getData()
	{
		if (!isset($this->data))
		{
			$query = "SELECT * FROM #__components WHERE parent = 0";
			$this->data = $this->_getList($query);
		}

		return $this->data;
	}
}