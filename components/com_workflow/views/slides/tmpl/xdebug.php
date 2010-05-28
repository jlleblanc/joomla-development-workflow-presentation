<?php defined( '_JEXEC' ) or die; ?>

<h1>XDebug</h1>

<div id="content">
	<ul>
	<li><strong>Must</strong> have server access to PECL</li>
	<li>Profiling 
		<ul>
			<li>Set in php.ini</li>
			<li><span class="code">xdebug.profiler_enable=1</span></li>
			<li><span class="code">xdebug.profiler_output_dir=/some/path</span></li>
		</ul>
	</li>
	<li>Function stack traces</li>
	<li>Helpful when working with unfamiliar code</li>
	</ul>
</div>

<div id="links">
	<p><a href="index.php?option=com_examples&amp;view=xdebug" target="_new">XDebugged Joomla View</a></p>
	<p><a href="<?php echo JURI::base() ?>components/com_examples/views/xdebug/function_trace.xt" target="_new">Function stack trace</a></p>
</div>