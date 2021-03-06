<div class="subscriptions index">
	<h2><?php __('Subscriptions');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('collection_id');?></th>
			<th><?php echo $this->Paginator->sort('expiration_date');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($subscriptions as $subscription):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $subscription['Subscription']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($subscription['User']['username'], array('controller' => 'users', 'action' => 'view', $subscription['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($subscription['Collection']['title'], array('controller' => 'collections', 'action' => 'view', $subscription['Collection']['id'])); ?>
		</td>
		<td><?php echo $subscription['Subscription']['expiration_date']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $subscription['Subscription']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $subscription['Subscription']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $subscription['Subscription']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subscription['Subscription']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Subscription', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Collections', true), array('controller' => 'collections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Collection', true), array('controller' => 'collections', 'action' => 'add')); ?> </li>
	</ul>
</div>
