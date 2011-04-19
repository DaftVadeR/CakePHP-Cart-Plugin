<div id="user_info" class="block">
<?php if($this->Session->read('Auth.User.id')):?>
	<h5>Welcome, <?php echo $this->Session->read('Auth.User.first_name');?></h5>
	<ul>
		<li><?php echo $this->Html->link('Edit profile', array('plugin'=>null, 'controller'=>'users', 'action'=>'edit'));?></li>
		<li><?php echo $this->Html->link('Logout', array('plugin'=>null, 'controller'=>'users', 'action'=>'logout'));?></li>		
	</ul>
<?php else:?>
	<h5>Welcome, guest</h5>
	<ul>
		<li><?php echo $this->Html->link('Register', array('plugin'=>null, 'controller'=>'users', 'action'=>'add'));?></li>
		<li><?php echo $this->Html->link('Login', array('plugin'=>null, 'controller'=>'users', 'action'=>'login'));?></li>		
	</ul>
<?php endif;?>
</div>