<div class="users form">
	<h2><?php __('Login'); ?></h2>
<?php echo $this->Form->create('User', array('action'=>'login'));?>
	<fieldset> 		
	<?php
        echo $this->Session->flash('auth');
		echo $this->Form->input('email');
		echo $this->Form->input('password', array('value'=>''));		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>