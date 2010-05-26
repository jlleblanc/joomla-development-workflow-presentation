<?php defined( '_JEXEC' ) or die; ?>
<ul>
<?php foreach ($this->data as $row): ?>
	<li><?php echo $row->name . ' (' . $row->option . ')'; ?></li>
<?php endforeach ?>
</ul>