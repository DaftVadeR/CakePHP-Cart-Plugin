<div class="titles index">
	<h2><?php __('Titles');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($titles as $title):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $title['Title']['id']; ?>&nbsp;</td>
		<td><?php echo $title['Title']['name']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $title['Title']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $title['Title']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $title['Title']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $title['Title']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Title', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Billing Addresses', true), array('controller' => 'billing_addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Billing Address', true), array('controller' => 'billing_addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cart Billing Addresses', true), array('controller' => 'cart_billing_addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cart Billing Address', true), array('controller' => 'cart_billing_addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carts', true), array('controller' => 'carts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cart', true), array('controller' => 'carts', 'action' => 'add')); ?> </li>
	</ul>
</div>