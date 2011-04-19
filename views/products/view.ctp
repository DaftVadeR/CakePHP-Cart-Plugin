<p><?php echo $this->Html->link('&laquo; Back', '/', array('escape'=>false));?></p>
<div class="products view">
	<h2><?php echo $this->Html->link($product['Product']['name'], array('action'=>'view', $product['Product']['id'])); ?></h2>
	<p><b>R <?php echo $product['Product']['price'];?></b></p>
	<div class="prod_desc"><?php echo $product['Product']['description']; ?></div>
	<p class="note">Added on <?php echo $product['Product']['created']; ?></p>
	<p><?php echo $this->Html->link('Add to cart', array('plugin'=>'cart', 'controller'=>'cart_items', 'action'=>'add', $product['Product']['id']), array('class'=>'button'));?></p>
</div>