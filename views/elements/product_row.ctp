<div class="yui3-g<?php echo $class;?>">
    <div class="yui3-u-1-6">
        <?php echo $this->Html->image('empty.png', array('url'=>array('action'=>'view', $product['Product']['id'])));?>
    </div>
    <div class="yui3-u-2-3">
        <div class="prod_main">
            <h5><?php echo $this->Html->link($product['Product']['name'], array('action'=>'view', $product['Product']['id']));?></h5>
            <div class="prod_desc">
                <?php echo substr(strip_tags($product['Product']['description']), 0, 150).'...';?>
            </div>
        </div>
    </div>
    <div class="yui3-u-1-6 actions">
        <?php echo $this->Html->link('View', array('action'=>'view', $product['Product']['id']), array('class'=>'button'));?>
        <?php echo $this->Html->link('Add to cart', array('plugin'=>'cart', 'controller'=>'cart_items', 'action'=>'add', $product['Product']['id']), array('class'=>'button'));?>
    </div>
</div>