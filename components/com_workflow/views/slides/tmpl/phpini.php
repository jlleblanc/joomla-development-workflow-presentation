<?php defined( '_JEXEC' ) or die; ?>

<h1>Configure php.ini to uncover errors</h1>

<div id="content">
	<ul>
	<li>Relevant settings
	<ul>
	<li>error_reporting </li>
	<li>display_errors</li>
	<li>error_log - (make sure web server can write it)</li>
	</ul></li>
	<li>Turn notices ON: E_ALL (remove &amp; ~ E_NOTICE)</li>
	<li>If no access, use ini_set() to override at runtime</li>
	<li>Log errors (or display <strong>if</strong> on dev site)</li>
	</ul>
</div>