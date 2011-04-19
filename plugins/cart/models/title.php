<?php
class Title extends CartAppModel {
	var $name = 'Title';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'BillingAddress' => array(
			'className' => 'Cart.BillingAddress',
			'foreignKey' => 'title_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),		
	);
}
?>