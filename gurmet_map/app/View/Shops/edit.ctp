<div class="shops form">
<?php echo $this->Form->create('Shop'); ?>
	<fieldset>
		<legend><?php echo __('Edit Shop'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('shop_name');
		echo $this->Form->input('address');
		echo $this->Form->input('area_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Shop.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Shop.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Shops'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foods'), array('controller' => 'foods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food'), array('controller' => 'foods', 'action' => 'add')); ?> </li>
	</ul>
</div>
