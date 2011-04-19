<div id="cart" class="block">
	<h5><?php __('Cart'); ?></h5>
	<ul>
		<li><?php echo $this->Html->link(__('View Cart', true), array('plugin'=>'cart', 'controller'=>'carts', 'action' => 'view')); ?></li>
		<li><?php echo $this->Html->link(__('Checkout', true), array('plugin'=>'cart', 'controller' => 'orders', 'action' => 'add')); ?></li>						
	</ul>
	<div id='cart_items'>
	<?php $cart = $this->requestAction(array('admin'=>false, 'plugin'=>'cart', 'controller'=>'carts','action'=>'view'), array('return'));?>
	<?php if(!empty($cart) && !empty($cart['CartItem'])):?>
		<?php $i = 0; $total = 0; foreach($cart['CartItem'] as $item):?>
		<?php $class = ' row'; $total+=$item['Item']['price'];	
			if ($i++ % 2 == 0) {
				$class.= ' altrow';			
			}?>
		<div class="yui3-g<?php echo $class;?>">
			<div class="yui3-u-7-8">			
				<?php echo $this->Html->link($item['Item']['name'], array('plugin'=>null, 'controller'=>'products', 'action'=>'view', $item['item_id']));?>
			</div>
			<div class="yui3-u-1-8 cart_action">
				<?php echo $this->Html->image('delete.png', array('url'=>array('plugin'=>'cart', 'controller'=>'cart_items', 'action'=>'delete', $item['item_id'])));?>
			</div>
		</div>
		<?php endforeach;?>
		<p class="total">Total: R <?php echo $total;?></p>
	<?php else:?>
	<p class="message">No items exist in your cart.</p>
	<?php endif;?>
	</div>
</div>