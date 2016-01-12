<div class="foods view">
<h2><?php echo __('Food'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($food['Food']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($food['Food']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($food['Food']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Food Name'); ?></dt>
		<dd>
			<?php echo h($food['Food']['food_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shop'); ?></dt>
		<dd>
			<?php echo $this->Html->link($food['Shop']['shop_name'], array('controller' => 'shops', 'action' => 'view', $food['Shop']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($food['Category']['category_name'], array('controller' => 'categories', 'action' => 'view', $food['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Evaluation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($food['Evaluation']['id'], array('controller' => 'evaluations', 'action' => 'view', $food['Evaluation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Picture Path'); ?></dt>
		<dd>
			<?php echo h($food['Food']['picture_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($food['Food']['comment']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Food'), array('action' => 'edit', $food['Food']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Food'), array('action' => 'delete', $food['Food']['id']), array(), __('Are you sure you want to delete # %s?', $food['Food']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Foods'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shops'), array('controller' => 'shops', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shop'), array('controller' => 'shops', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluations'), array('controller' => 'evaluations', 'action' => 'index')); ?> </li>
		<?php /* <li><?php echo $this->Html->link(__('New Evaluation'), array('controller' => 'evaluations', 'action' => 'add')); ?> </li> */ ?>
	</ul>
</div>
