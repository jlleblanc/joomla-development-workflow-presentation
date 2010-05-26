<?php defined( '_JEXEC' ) or die; ?>
<?php foreach ($this->users as $user): ?>
	<h3><?php echo $user->name ?> (<?php echo $user->username ?>)</h3>
<?php endforeach ?>