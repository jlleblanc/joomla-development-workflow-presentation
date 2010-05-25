<?php
defined( '_JEXEC' ) or die;

jimport('joomla.application.component.model');

class ExamplesModelLogs extends JModel
{
	private $data;

	public function getData()
	{
		if (!isset($this->data))
		{
			$query = "SELECT name, username, email, id FROM #__users";
			$this->data = $this->_getList($query);
		}

		jimport('joomla.error.log');
		$log = JLog::getInstance('first_user.php');
		$entry = array(
			'LEVEL' => 1,
			'STATUS' => 'First username: ',
			'COMMENT' => $this->data[0]->username
			);

		$log->addEntry($entry);

		return $this->data;
	}
}