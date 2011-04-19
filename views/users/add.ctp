<div class="users form">
	<h2><?php __('Register'); ?></h2>
<?php echo $this->Form->create('User');?>
	<fieldset> 		
	<?php		
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