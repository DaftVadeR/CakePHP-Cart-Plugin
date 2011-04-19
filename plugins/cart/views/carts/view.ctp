<div class="carts view">
<div class="yui3-g">
	<div class="yui3-u-1-2">
		<h2><?php  __('My Cart');?></h2>
	</div>
	<div class="yui3-u-1-2 right">
		<?php //echo $this->Html->link('Check out &raquo;', array('action'=>'checkout'), array('class'=>'fright button', 'escape'=>false));?>
	</div>
</div>
<div id="full_cart">	
	<?php $cart = $this->requestAction(array('admin'=>false, 'plugin'=>'cart', 'controller'=>'carts','action'=>'view'), array('return'));?>
	<?php if(!empty($cart) && !empty($cart['CartItem'])):?>
		<?php $i = 0; $total = 0; foreach($cart['CartItem'] as $item):?>
		<?php $class = ' row'; $total+=$item['Item']['price'];	
			if ($i++ % 2 == 0) {
				$class.= ' altrow';			
			}?>
		<div class="yui3-g<?php echo $class;?>">
			<div class="yui3-u-3-4">			
				<div class="prod_info">
					<p><?php echo $this->Html->link($item['Item']['name'], array('plugin'=>null, 'controller'=>'products', 'action'=>'view', $item['item_id']));?></p>
					<div class="prod_desc">
						<?php echo substr(strip_tags($item['Item']['description'].'...'), 0, 150);?>
					</div>
				</div>
			</div>
			<div class="yui3-u-1-8 price">
				R <?php echo $item['Item']['price'];?>
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
    <p><?php echo $this->Html->link('Check out &raquo;', array('controller'=>'orders', 'action'=>'add'), array('class'=>'fright button', 'escape'=>false));?></p>
</div>
</div>
