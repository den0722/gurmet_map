<div class="foods index">
	<h2><?php echo __('Foods'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('food_name'); ?></th>
			<th><?php echo $this->Paginator->sort('shop_id'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('evaluation_id'); ?></th>
			<th><?php echo $this->Paginator->sort('picture_path'); ?></th>
			<th><?php echo $this->Paginator->sort('comment'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($foods as $food): ?>
	<tr>
		<td><?php echo h($food['Food']['id']); ?>&nbsp;</td>
		<td><?php echo h($food['Food']['created']); ?>&nbsp;</td>
		<td><?php echo h($food['Food']['modified']); ?>&nbsp;</td>
		<td><?php echo h($food['Food']['food_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($food['Shop']['shop_name'], array('controller' => 'shops', 'action' => 'view', $food['Shop']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($food['Category']['category_name'], array('controller' => 'categories', 'action' => 'view', $food['Category']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($food['Evaluation']['id'], array('controller' => 'evaluations', 'action' => 'view', $food['Evaluation']['id'])); ?>
		</td>
		<td><?php echo h($food['Food']['picture_path']); ?>&nbsp;</td>
		<td><?php echo h($food['Food']['comment']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $food['Food']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $food['Food']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $food['Food']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $food['Food']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Food'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Shops'), array('controller' => 'shops', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shop'), array('controller' => 'shops', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluations'), array('controller' => 'evaluations', 'action' => 'index')); ?> </li>
		<?php /*<li><?php echo $this->Html->link(__('New Evaluation'), array('controller' => 'evaluations', 'action' => 'add')); ?> </li> */?>	</ul>
</div>
