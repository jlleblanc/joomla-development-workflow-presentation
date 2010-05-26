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

<p><a href="<?php echo JURI::base() ?>components/com_workflow/examples/phpini/phpinfo.php" target="_new">phpinfo()</a></p>
<p><a href="<?php echo JURI::base() ?>components/com_workflow/examples/phpini/php.ini" target="_new">php.ini</a></p>
<p><a href="<?php echo JURI::base() ?>components/com_workflow/examples/phpini/php_error.log" target="_new">PHP Error Log example</a></p>
<p><a href="<?php echo JURI::base() ?>components/com_workflow/examples/phpini/notices.php" target="_new">Notices example</a></p>
<p><a href="<?php echo JURI::base() ?>components/com_workflow/examples/phpini/display_errors_runtime.php" target="_new">MySQL Warning Example</a></p>