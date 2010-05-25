<?php

JHTML::_('behavior.mootools');

$document = JFactory::getDocument();
$document->addScript(JURI::base() . 'components/com_examples/views/firebug/json2.js');
$document->addScript(JURI::base() . 'components/com_examples/views/firebug/firebug.js');

?>
<div id="module_info_placeholder">
	
</div>