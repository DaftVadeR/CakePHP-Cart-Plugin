<?php
class OrderItem extends CartAppModel {
	var $name = 'OrderItem';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
    var $belongsTo = array(
		'Order' => array(
			'className' => 'Cart.Order',
			'foreignKey' => 'order_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
    );
}
?>