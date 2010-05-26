<?php
defined( '_JEXEC' ) or die;

jimport( 'joomla.application.component.view');

class ExamplesViewFirephp extends JView
{
	public function display($tpl = null)
	{
		$document =& JFactory::getDocument();
		$document->setMimeEncoding('application/json');
		echo json_encode($this->get('Data'));
	}
}