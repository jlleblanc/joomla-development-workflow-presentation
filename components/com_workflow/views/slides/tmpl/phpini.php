<?php defined( '_JEXEC' ) or die; ?>

<h1>Configure php.ini to uncover errors</h1>

<div id="content">
	<ul>
	<li>Relevant settings
	<ul>
	<li><span class="code">error_reporting</span></li>
	<li><span class="code">display_errors</span></li>
	<li><span class="code">error_log</span> - (make sure web server can write it)</li>
	</ul></li>
	<li>Turn notices ON: <span class="code">E_ALL</span> (remove &amp; <span class="code">~ E_NOTICE</span>)</li>
	<li>If no access, use <span class="code">ini_set()</span> to override at runtime</li>
	<li>Log errors (or display <strong>if</strong> on dev site)</li>
	</ul>
</div>

<div id="links">
	<p><a href="<?php echo JURI::base() ?>components/com_workflow/examples/phpini/phpinfo.php" target="_new">phpinfo()</a></p>
	<p><a href="<?php echo JURI::base() ?>components/com_workflow/examples/phpini/php.ini" target="_new">php.ini</a></p>
	<p><a href="<?php echo JURI::base() ?>components/com_workflow/examples/phpini/php_error.log" target="_new">PHP Error Log example</a></p>
	<p><a href="<?php echo JURI::base() ?>components/com_workflow/examples/phpini/notices.php" target="_new">Notices example</a></p>
</div>