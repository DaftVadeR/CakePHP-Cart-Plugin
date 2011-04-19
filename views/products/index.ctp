<div class="products index">
	<h2><?php __('Products');?></h2>
	<p>Sort by: <?php echo $this->Paginator->sort('product name', 'name');?> or <?php echo $this->Paginator->sort('date added', 'created');?></p>
	<?php
	$i = 0;
	foreach ($products as $product):
		$class = ' product';
		if ($i++ % 2 == 0) {
			$class.= ' altrow';
		}
	?>
    <?php echo $this->element('product_row', array('product'=>$product, 'class'=>$class));?>	
	<?php endforeach;?>
	
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