<?php defined( '_JEXEC' ) or die; ?>
<div id="outline">
	<ul>
		<?php foreach ($this->outline as $layout => $header): ?>
			<li><a href="index.php?option=com_workflow&amp;view=slides&amp;layout=<?php echo $layout ?>"><?php echo $header ?></a></li>
		<?php endforeach ?>
	</ul>
</div>