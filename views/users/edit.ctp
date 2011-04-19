<?php //echo $this->Html->script('tabs');?>
<div class="tabs">
    <ul class="tab_links clearfix">
        <li><?php echo $this->Html->link('Profile', array('plugin'=>null, 'controller'=>'users', 'action'=>'edit'), array('class'=>'current'));?></li>
        <li><?php echo $this->Html->link('Billing Details', array('plugin'=>'cart', 'controller'=>'billing_addresses', 'action'=>'index'));?></li>
        <li><?php echo $this->Html->link('Order History', array('plugin'=>'cart', 'controller'=>'orders', 'action'=>'index'));?></li>        
    </ul>
    <ul class="tab_content">
        <li class="tab current">
            <div class="users form">
                <h2><?php __('Edit Profile'); ?></h2>
            <?php echo $this->Form->create('User');?>
                <fieldset> 		
                <?php
                    echo $this->Form->input('id');
                    echo $this->Form->input('title_id');
                    echo $this->Form->input('first_name');
                    echo $this->Form->input('last_name');
                    echo $this->Form->input('email');
                    echo $this->Form->input('tel');	
                    echo $this->Form->input('password', array('value'=>''));
                    echo $this->Form->input('password2', array('type'=>'password', 'value'=>''));				
                ?>
                </fieldset>
            <?php echo $this->Form->end(__('Submit', true));?>
            </div>
        </li>
        <?php /*<li class="tab">
            <div class="billing_addresses">
                <div class="yui3-g">
                    <div class="yui3-u-1-2">
                        <h3>Billing Details</h3>
                    </div>
                    <div class="yui3-u-1-2 right">
                        <?php echo $this->Html->link('Add new billing details', array('plugin'=>'cart', 'controller'=>'billing_addresses', 'action'=>'add'));?>
                    </div>
                </div>
                
                <?php if(empty($billingAddresses)):?>
                    <div class="message">No billing details have been added.</div>
                <?php else:?>
                    <?php $i=0; foreach($billingAddresses as $billingAddress):?>
                    <dl class="billing_address<?php $i++; echo ($i%2==0?' altrow':'');?>">            
                        <dt>First name: </dt><dd><?php echo $billingAddress['BillingAddress']['first_name'];?></dd>
                        <dt>Last name: </dt><dd><?php echo $billingAddress['BillingAddress']['last_name'];?></dd>
                        <dt>Zip/Post code: </dt><dd><?php echo $billingAddress['BillingAddress']['zip_code'];?></dd>
                        <dt>Title: </dt><dd><?php echo $billingAddress['BillingAddress']['Title']['name'];?></dd>
                        <dt>Address: </dt><dd><?php echo $billingAddress['BillingAddress']['address'];?></dd>
                        <dt>Town/City: </dt><dd><?php echo $billingAddress['BillingAddress']['town_city'];?></dd>
                        <dt>Province: </dt><dd><?php echo $billingAddress['BillingAddress']['province'];?></dd>
                        <dt>Country: </dt><dd><?php echo $billingAddress['BillingAddress']['Country']['name'];?></dd>
                        <dt>Last added: </dt><dd><?php echo $billingAddress['BillingAddress']['created'];?></dd>
                        <dt>Last modified: </dt><dd><?php echo $billingAddress['BillingAddress']['modified'];?></dd>
                    </dl>
                    <?php endforeach;?>
                <?php endif;?>
            </div>
        </li>*/?>
    </ul>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $('.tabs').tabs();
});
</script>