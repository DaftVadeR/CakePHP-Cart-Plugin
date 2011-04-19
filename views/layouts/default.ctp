<!doctype html>
<html lang="en">
<head>
<title><?php echo $title_for_layout;?></title>
<?php echo $this->Html->script(array('http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js', '/cart/js/cart'));?>
<?php echo $this->Html->css(array('reset-fonts-grids', 'styles'));?>
</head>
<body>
	<div id="container">
		<div id="header">
			<div class="yui3-g">
				<div class="yui3-u-1-2">
					<h1><?php echo $this->Html->link('CakePHP Cart Plugin', '/');?></h1>
				</div>
				<div class="yui3-u-1-2">
					
				</div>
			</div>
		</div>
		<div class="yui3-g">
			<div class="yui3-u-3-4">
				<div id="content">
					<?php echo $this->Session->flash();?>
					<?php echo $content_for_layout;?>
				</div>
			</div>
			<div class="yui3-u-1-4">
				<div id="right_col">
					<?php echo $this->element('user_block');?>										
					<?php echo $this->element('current_cart', array('plugin'=>'cart'));?>					
				</div>
			</div>
		</div>
		<div id="footer">
			<p>Made by <?php echo $this->Html->link('DafT', 'http://www.daft-thoughts.com');?></p>
		</div>
		<?php echo $this->element('sql_dump'); ?>
	</div>
</body>
</html>