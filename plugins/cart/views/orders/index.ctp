<div class="tabs">
    <ul class="tab_links clearfix">
        <li><?php echo $this->Html->link('Profile', array('plugin'=>false, 'controller'=>'users', 'action'=>'edit'));?></li>
        <li><?php echo $this->Html->link('Billing Details', array('controller'=>'billing_addresses', 'action'=>'index'));?></li>
        <li><?php echo $this->Html->link('Order History', array('controller'=>'orders', 'action'=>'index'), array('class'=>'current'));?></li>
    </ul>
    <ul class="tab_content">
        <li class="tab current">
            <div class="carts index">
                <h2><?php __('Previous Orders');?></h2>
                <table cellpadding="0" cellspacing="0" class="record-list">
                <tr>
                        <th><?php echo $this->Paginator->sort('items');?></th>
                        <th><?php echo $this->Paginator->sort('status');?></th>
                        <th><?php echo $this->Paginator->sort('total');?></th>
                        <th><?php echo $this->Paginator->sort('created');?></th>
                        <th><?php echo $this->Paginator->sort('modified');?></th>
                        <th class="actions"><?php __('Actions');?></th>
                </tr>
                <?php
                $i = 0;
                
                foreach ($orders as $order):
                    $class = null;
                    if ($i++ % 2 == 0) {
                        $class = ' class="altrow"';
                    }
                ?>
                <tr<?php echo $class;?>>				        
                    <td><?php echo $order['Order']['items']; ?>&nbsp;</td>
                    <td><?php echo $order['Order']['status']; ?>&nbsp;</td>
                    <td>R <?php echo $order['Order']['total']; ?>&nbsp;</td>
                    <td><?php echo $order['Order']['created']; ?>&nbsp;</td>
                    <td><?php echo $order['Order']['modified']; ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View', true), array('action' => 'view', $order['Order']['id'])); ?>			
                    </td>
                </tr>
            <?php endforeach; ?>
                </table>
                <p>
                <?php
                echo $this->Paginator->counter(array(
                'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
                ));
                ?>	</p>
            
                <div class="paging">
                    <?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
                 | 	<?php echo $this->Paginator->numbers();?>
             |
                    <?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
                </div>
            </div>
        </li>
    </ul>
</div>