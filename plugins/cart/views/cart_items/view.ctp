<div class="cartItems view">
<h2><?php  __('Cart Item');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cartItem['CartItem']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cart'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($cartItem['Cart']['id'], array('controller' => 'carts', 'action' => 'view', $cartItem['Cart']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Product'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($cartItem['Product']['name'], array('controller' => 'products', 'action' => 'view', $cartItem['Product']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cart Item', true), array('action' => 'edit', $cartItem['CartItem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Cart Item', true), array('action' => 'delete', $cartItem['CartItem']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cartItem['CartItem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cart Items', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cart Item', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carts', true), array('controller' => 'carts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cart', true), array('controller' => 'carts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
