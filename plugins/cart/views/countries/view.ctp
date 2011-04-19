<div class="countries view">
<h2><?php  __('Country');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $country['Country']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $country['Country']['code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $country['Country']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Country', true), array('action' => 'edit', $country['Country']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Country', true), array('action' => 'delete', $country['Country']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $country['Country']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Billing Addresses', true), array('controller' => 'billing_addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Billing Address', true), array('controller' => 'billing_addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cart Billing Addresses', true), array('controller' => 'cart_billing_addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cart Billing Address', true), array('controller' => 'cart_billing_addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carts', true), array('controller' => 'carts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cart', true), array('controller' => 'carts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Billing Addresses');?></h3>
	<?php if (!empty($country['BillingAddress'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('First Name'); ?></th>
		<th><?php __('Last Name'); ?></th>
		<th><?php __('Zip Code'); ?></th>
		<th><?php __('Title Id'); ?></th>
		<th><?php __('Address'); ?></th>
		<th><?php __('Town City'); ?></th>
		<th><?php __('Province'); ?></th>
		<th><?php __('Country Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($country['BillingAddress'] as $billingAddress):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $billingAddress['id'];?></td>
			<td><?php echo $billingAddress['first_name'];?></td>
			<td><?php echo $billingAddress['last_name'];?></td>
			<td><?php echo $billingAddress['zip_code'];?></td>
			<td><?php echo $billingAddress['title_id'];?></td>
			<td><?php echo $billingAddress['address'];?></td>
			<td><?php echo $billingAddress['town_city'];?></td>
			<td><?php echo $billingAddress['province'];?></td>
			<td><?php echo $billingAddress['country_id'];?></td>
			<td><?php echo $billingAddress['user_id'];?></td>
			<td><?php echo $billingAddress['created'];?></td>
			<td><?php echo $billingAddress['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'billing_addresses', 'action' => 'view', $billingAddress['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'billing_addresses', 'action' => 'edit', $billingAddress['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'billing_addresses', 'action' => 'delete', $billingAddress['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $billingAddress['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Billing Address', true), array('controller' => 'billing_addresses', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Cart Billing Addresses');?></h3>
	<?php if (!empty($country['CartBillingAddress'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('First Name'); ?></th>
		<th><?php __('Last Name'); ?></th>
		<th><?php __('Zip Code'); ?></th>
		<th><?php __('Title Id'); ?></th>
		<th><?php __('Address'); ?></th>
		<th><?php __('Town City'); ?></th>
		<th><?php __('Province'); ?></th>
		<th><?php __('Country Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($country['CartBillingAddress'] as $cartBillingAddress):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $cartBillingAddress['id'];?></td>
			<td><?php echo $cartBillingAddress['first_name'];?></td>
			<td><?php echo $cartBillingAddress['last_name'];?></td>
			<td><?php echo $cartBillingAddress['zip_code'];?></td>
			<td><?php echo $cartBillingAddress['title_id'];?></td>
			<td><?php echo $cartBillingAddress['address'];?></td>
			<td><?php echo $cartBillingAddress['town_city'];?></td>
			<td><?php echo $cartBillingAddress['province'];?></td>
			<td><?php echo $cartBillingAddress['country_id'];?></td>
			<td><?php echo $cartBillingAddress['user_id'];?></td>
			<td><?php echo $cartBillingAddress['created'];?></td>
			<td><?php echo $cartBillingAddress['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'cart_billing_addresses', 'action' => 'view', $cartBillingAddress['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'cart_billing_addresses', 'action' => 'edit', $cartBillingAddress['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'cart_billing_addresses', 'action' => 'delete', $cartBillingAddress['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cartBillingAddress['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cart Billing Address', true), array('controller' => 'cart_billing_addresses', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Carts');?></h3>
	<?php if (!empty($country['Cart'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Session Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($country['Cart'] as $cart):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $cart['id'];?></td>
			<td><?php echo $cart['user_id'];?></td>
			<td><?php echo $cart['session_id'];?></td>
			<td><?php echo $cart['created'];?></td>
			<td><?php echo $cart['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'carts', 'action' => 'view', $cart['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'carts', 'action' => 'edit', $cart['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'carts', 'action' => 'delete', $cart['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cart['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cart', true), array('controller' => 'carts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
