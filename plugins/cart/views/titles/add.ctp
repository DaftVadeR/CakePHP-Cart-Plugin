<div class="titles form">
<?php echo $this->Form->create('Title');?>
	<fieldset>
 		<legend><?php __('Add Title'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('Cart');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Titles', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Billing Addresses', true), array('controller' => 'billing_addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Billing Address', true), array('controller' => 'billing_addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cart Billing Addresses', true), array('controller' => 'cart_billing_addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cart Billing Address', true), array('controller' => 'cart_billing_addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carts', true), array('controller' => 'carts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cart', true), array('controller' => 'carts', 'action' => 'add')); ?> </li>
	</ul>
</div>