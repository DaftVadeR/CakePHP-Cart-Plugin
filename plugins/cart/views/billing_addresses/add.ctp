<div class="billingAddresses form">
    <p><?php echo $this->Html->link('&laquo; Back', array('controller'=>'billing_addresses', 'action'=>'index'), array('escape'=>false));?></p>
    <h2><?php __('Add Billing Address'); ?></h2>
<?php echo $this->Form->create('BillingAddress');?>
	<fieldset> 		
	<?php
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('zip_code');
		echo $this->Form->input('title_id');
		echo $this->Form->input('address');
		echo $this->Form->input('town_city', array('label'=>'Town / City'));
		echo $this->Form->input('province');
		echo $this->Form->input('country_id', array('default'=>204));				
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>