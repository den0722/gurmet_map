<div class="evaluations view">
<h2><?php echo __('Evaluation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($evaluation['Evaluation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($evaluation['Evaluation']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($evaluation['Evaluation']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Evaluation'), array('action' => 'edit', $evaluation['Evaluation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Evaluation'), array('action' => 'delete', $evaluation['Evaluation']['id']), array(), __('Are you sure you want to delete # %s?', $evaluation['Evaluation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foods'), array('controller' => 'foods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food'), array('controller' => 'foods', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Foods'); ?></h3>
	<?php if (!empty($evaluation['Food'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Food Name'); ?></th>
		<th><?php echo __('Shop Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Evaluation Id'); ?></th>
		<th><?php echo __('Picture Path'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($evaluation['Food'] as $food): ?>
		<tr>
			<td><?php echo $food['id']; ?></td>
			<td><?php echo $food['created']; ?></td>
			<td><?php echo $food['modified']; ?></td>
			<td><?php echo $food['food_name']; ?></td>
			<td><?php echo $food['shop_id']; ?></td>
			<td><?php echo $food['category_id']; ?></td>
			<td><?php echo $food['evaluation_id']; ?></td>
			<td><?php echo $food['picture_path']; ?></td>
			<td><?php echo $food['comment']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'foods', 'action' => 'view', $food['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'foods', 'action' => 'edit', $food['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'foods', 'action' => 'delete', $food['id']), array(), __('Are you sure you want to delete # %s?', $food['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Food'), array('controller' => 'foods', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
