<?php
class Product extends AppModel {
	var $name = 'Product';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'CartItem' => array(
			'className' => 'Cart.CartItem',
			'foreignKey' => 'item_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	
	var $hasAndBelongsToMany = array(
		'Cart' => array(
			'className' => 'Cart.Cart',
			'joinTable' => 'cart_cart_items',
			'foreignKey' => 'cart_id',
			'associationForeignKey' => 'item_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
?>