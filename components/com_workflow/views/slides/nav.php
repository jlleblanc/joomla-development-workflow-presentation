<?php defined( '_JEXEC' ) or die; ?>
<div id="nav">
	<?php if ($back): ?>
		<span class="slide_arrows"><a href="index.php?option=com_workflow&view=slides&layout=<?php echo $back ?>">&larr;</a></span>
	<?php endif ?>
	<?php if ($next): ?>
		<span class="slide_arrows"><a href="index.php?option=com_workflow&view=slides&layout=<?php echo $next ?>">&rarr;</a></span>
	<?php endif ?>
</div>