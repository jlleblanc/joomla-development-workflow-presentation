<?php
defined( '_JEXEC' ) or die;

jimport('joomla.application.component.model');

class JstestModelDefault extends JModel
{
	private $data;

	public function getData()
	{
		if (!isset($this->data))
		{
			$query = "SELECT * FROM #__modules";
			$this->data = $this->_getList($query);
		}

		return $this->data;
	}
}
