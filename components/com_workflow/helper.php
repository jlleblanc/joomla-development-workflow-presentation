<?php
defined( '_JEXEC' ) or die;

class WorkflowHelper
{	
	function getOutline()
	{
		static $outline = array(
			'intro' => 'Introduction',
			'aboutme' => 'About Me',
			'whythistalk' => 'Why this talk and how it works',
			'liveanddev' => 'Live and Dev Sites',
			'versioncontrol' => 'Version Control',
			'textedit' => 'Text Editors and IDEs',
			'selenium' => 'Selenium IDE',
			'firebug' => 'Firebug',
			'firephp' => 'FirePHP',
			'phpini' => 'Configure php.ini to uncover errors',
			'logs' => 'Event Logs',
			'xdebug' => 'XDebug',
			'contactinfo' => 'Contact Info',
			'selfpromo' => 'Self Promotion'
			);

		return $outline;
	}
}
