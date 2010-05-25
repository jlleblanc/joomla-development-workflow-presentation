<?php
defined( '_JEXEC' ) or die;

jimport( 'joomla.application.component.view');

class ExamplesViewFirebug extends JView
{
	public function display($tpl = null)
	{
		$document = JFactory::getDocument();
		$document->setMimeEncoding('application/json');

		$data = $this->get('Data');
		echo json_encode($data);
	}
}
