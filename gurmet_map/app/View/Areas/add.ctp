<div class="areas form">
<?php echo $this->Form->create('Area'); ?>
	<fieldset>
		<legend><?php echo __('Add Area'); ?></legend>
	<?php
		echo $this->Form->input('area_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Areas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Shops'), array('controller' => 'shops', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shop'), array('controller' => 'shops', 'action' => 'add')); ?> </li>
	</ul>
</div>
