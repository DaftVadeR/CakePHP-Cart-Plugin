<div class="tabs">
    <ul class="tab_links clearfix">
        <li><?php echo $this->Html->link('Profile', array('plugin'=>false, 'controller'=>'users', 'action'=>'edit'));?></li>
        <li><?php echo $this->Html->link('Billing Details', array('controller'=>'billing_addresses', 'action'=>'index'), array('class'=>'current'));?></li>
        <li><?php echo $this->Html->link('Order History', array('controller'=>'orders', 'action'=>'index'));?></li>
    </ul>
    <ul class="tab_content">
        <li class="tab current">
            <div class="billingAddresses index">                
                <h2><?php __('Billing Addresses');?></h2>
                <?php if(empty($billingAddresses)):?>
                <div class="message">No billing addresses have been added. Add a new one <?php echo $this->Html->link('here', array('controller'=>'billing_addresses', 'action'=>'add'));?>.</div>
                <?php else:
                $i = 0;
                foreach ($billingAddresses as $billingAddress):
                    $class = null;
                    if ($i++ % 2 == 0) {
                        $class = ' class="altrow"';
                    }
                ?>
                <div class="right">(<?php echo $this->Html->link('Add another', array('controller'=>'billing_addresses', 'action'=>'add'));?>) | (<?php echo $this->Html->link('Edit', array('controller'=>'billing_addresses', 'action'=>'edit', $billingAddress['BillingAddress']['id']));?>)</div>
                <dl class="clearfix"><?php $i = 0; $class = ' class="altrow"';?>		
                    <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
                    <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                        <?php echo $billingAddress['Title']['name']; ?>
                        &nbsp;
                    </dd>
                    <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('First Name'); ?></dt>
                    <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                        <?php echo $billingAddress['BillingAddress']['first_name']; ?>
                        &nbsp;
                    </dd>
                    <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Last Name'); ?></dt>
                    <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                        <?php echo $billingAddress['BillingAddress']['last_name']; ?>
                        &nbsp;
                    </dd>				
                    <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Address'); ?></dt>
                    <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                        <?php echo $billingAddress['BillingAddress']['address']; ?>
                        &nbsp;
                    </dd>
                    <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Zip Code'); ?></dt>
                    <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                        <?php echo $billingAddress['BillingAddress']['zip_code']; ?>
                        &nbsp;
                    </dd>
                    <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Town City'); ?></dt>
                    <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                        <?php echo $billingAddress['BillingAddress']['town_city']; ?>
                        &nbsp;
                    </dd>
                    <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Province'); ?></dt>
                    <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                        <?php echo $billingAddress['BillingAddress']['province']; ?>
                        &nbsp;
                    </dd>
                    <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Country'); ?></dt>
                    <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                        <?php echo $billingAddress['Country']['name']; ?>
                        &nbsp;
                    </dd>		
                    <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
                    <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                        <?php echo $billingAddress['BillingAddress']['created']; ?>
                        &nbsp;
                    </dd>
                    <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
                    <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                        <?php echo $billingAddress['BillingAddress']['modified']; ?>
                        &nbsp;
                    </dd>
                </dl>
            <?php endforeach; ?>
                </table>
                <p>
                <?php
                echo $this->Paginator->counter(array(
                'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
                ));
                ?>	</p>
            
                <div class="paging">
                    <?php if($this->Paginator->hasPrev()):?>
                    <?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?> | 
                    <?php endif;?>
                    <?php echo $this->Paginator->numbers();?>
                    <?php if($this->Paginator->hasNext()):?>
                     | <?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
                    <?php endif;?>
                </div>
                <?php endif;?>
            </div>
        </li>
    </ul>
</div>