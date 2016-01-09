<div class="areas view">
<h2><?php echo __('Area'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($area['Area']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($area['Area']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($area['Area']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Area Name'); ?></dt>
		<dd>
			<?php echo h($area['Area']['area_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Area'), array('action' => 'edit', $area['Area']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Area'), array('action' => 'delete', $area['Area']['id']), array(), __('Are you sure you want to delete # %s?', $area['Area']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Areas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shops'), array('controller' => 'shops', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shop'), array('controller' => 'shops', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Shops'); ?></h3>
	<?php if (!empty($area['Shop'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Shop Name'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Area Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($area['Shop'] as $shop): ?>
		<tr>
			<td><?php echo $shop['id']; ?></td>
			<td><?php echo $shop['created']; ?></td>
			<td><?php echo $shop['modified']; ?></td>
			<td><?php echo $shop['shop_name']; ?></td>
			<td><?php echo $shop['address']; ?></td>
			<td><?php echo $shop['area_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'shops', 'action' => 'view', $shop['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'shops', 'action' => 'edit', $shop['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'shops', 'action' => 'delete', $shop['id']), array(), __('Are you sure you want to delete # %s?', $shop['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Shop'), array('controller' => 'shops', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
