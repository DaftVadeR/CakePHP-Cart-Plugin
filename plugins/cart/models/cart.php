<?php
class Cart extends CartAppModel {
	var $name = 'Cart';
	var $validate = array(
		'user_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'sess_id' => array(
			'maxLength' => array(
				'rule' => array('maxLength', 80),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'CartItem' => array(
			'className' => 'Cart.CartItem',
			'foreignKey' => 'cart_id',
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
		'Item' => array(
			'className' => 'Product',
			'joinTable' => 'cart_cart_items',
			'foreignKey' => 'item_id',
			'associationForeignKey' => 'cart_id',
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
	
	function getCart($user_id, $sess_id, $full=true)
	{
		$cart = array();
		$conditions = array();
		
		if($user_id)
		{
			$conditions = array('Cart.user_id'=>$user_id);
		}
		elseif($sess_id)
		{
			$conditions = array('Cart.session_id'=>$sess_id);
		}
		
		$cart = $this->find('first', array('contain'=>($full?array('CartItem'=>array('Item')):false), 'conditions'=>$conditions));
		
		return $cart;
	}
}
?>