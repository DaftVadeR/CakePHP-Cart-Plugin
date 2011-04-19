<div class="carts view">
    <p><?php echo $this->Html->link('&laquo; Back', array('action'=>'index'), array('escape'=>false));?></p>
	<h2><?php  __('View Order');?></h2>
</div>
<div class="order">
    <?php if(!empty($order)):?>
    <dl class="clearfix">
        <dt>Status</dt>
        <dd><?php echo $order['Order']['status'];?></dd>
        <dt class="altrow">Order placed</dt>
        <dd class="altrow"><?php echo $order['Order']['created'];?></dd>
        <dt>Number of items</dt>
        <dd><?php echo $order['Order']['items'];?></dd>
        <dt class="altrow">Total cost:</dt>
        <dd class="altrow"><?php echo $order['Order']['total'];?></dd>
    </dl>
    <h3>Products:</h3>
    
    <?php $i=0; foreach($order['OrderItem'] as $product):
        $class = ' product';
		if ($i++ % 2 == 0) {
			$class.= ' altrow';
		}
    ?>
    <?php echo $this->element('order_item_row', array('product'=>$product, 'class'=>$class));?>
    <?php endforeach;?>		
	<?php else:?>
	<p class="message">This order does not exist.</p>
	<?php endif;?>    
</div>
