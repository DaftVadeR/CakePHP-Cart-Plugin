<div class="carts view">
	<h2>Checkout</h2>
    <div id="full_cart">	        
        <?php if(!empty($cart) && !empty($cart['CartItem'])):?>
            <?php $i = 0; $total = 0; foreach($cart['CartItem'] as $item):?>
            <?php $class = ' row'; $total+=$item['Item']['price'];	
                if ($i++ % 2 == 0) {
                    $class.= ' altrow';			
                }?>
                <div class="yui3-g<?php echo $class;?>">
                    <div class="yui3-u-7-8">			
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
                </div>
            <?php endforeach;?>
            <p class="total">Total: R <?php echo $total;?></p>
        <?php else:?>
        <p class="message">No items exist in your cart.</p>
        <?php endif;?>        
    </div>
    <?php echo $this->Form->create('Order', array('action'=>'add'));?>
    <?php if(empty($billingAddresses)):?>    
    <div class="message">You have no billing addresses saved to your profile. You cannot checkout until you have added one. To do so, click <?php echo $this->Html->link('here', array('controller'=>'billing_addresses', 'action'=>'add'));?>.</div>
    <?php else:?>    
    <?php echo $this->Form->input('billing_address_id', array('label'=>'Select a billing address: '));?>
    <p><?php echo $this->Html->link('Add another', array('controller'=>'billing_address', 'action'=>'add'));?> | <?php echo $this->Html->link('Manage billing addresses', array('controller'=>'billing_address', 'action'=>'index'));?></p>
    <?php endif;?>
    <p class="btop"><?php echo $this->Html->link('&laquo; Revise Cart', array('controller'=>'carts', 'action'=>'view'), array('escape'=>false, 'class'=>'button large'));?> <?php echo $this->Form->submit('Complete Order &raquo;', array('class'=>"button large fright", 'escape'=>false, 'div'=>false));?><?php /*echo $this->Html->link('Complete Order &raquo;', array('action'=>'checkout'), array('escape'=>false, 'class'=>'fright button large'));*/ ?></p>
    <?php echo $this->Form->end();?>
</div>
