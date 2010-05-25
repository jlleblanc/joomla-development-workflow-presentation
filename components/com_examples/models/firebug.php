<?php
defined( '_JEXEC' ) or die;

jimport('joomla.application.component.model');

class ExamplesModelFirebug extends JModel
{
	private $data;

	public function getData()
	{
		if (!isset($this->data))
		{
			$query = "SELECT * FROM #__modules";
			$this->data = $this->_getList($query);
			$this->data = $this->data[0];
		}

		return $this->data;
	}
}
