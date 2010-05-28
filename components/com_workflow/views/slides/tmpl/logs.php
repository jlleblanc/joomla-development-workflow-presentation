<?php defined( '_JEXEC' ) or die; ?>
<h1>Event Logs</h1>

<div id="content">
	<ul>
	<li>Joomla has a logging system, use it!</li>
	<li><pre>jimport(&#8216;joomla.error.log&#8217;);</pre></li>
	<li><pre>$log = JLog::getInstance(&#8216;myLogNameHere.php&#8217;);</pre></li>
	<li><pre>$entry = array(
	&#8216;LEVEL&#8217; => 1,
	&#8216;STATUS&#8217; => &#8216;A Log Message: &#8216;,
	&#8216;COMMENT&#8217; => print_r($arrayHere, true)
	);</pre></li>
	<li><pre>$log->addEntry($entry);</pre></li>
	</ul>
</div>

<a href="index.php?option=com_examples&amp;view=logs" target="_new">Logging example</a>