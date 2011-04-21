<?php
class CartItem extends CartAppModel {
	var $name = 'CartItem';
	var $validate = array(
		'cart_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'item_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Cart' => array(
			'className' => 'Cart.Cart',
			'foreignKey' => 'cart_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Item' => array(
			'className' => 'Product',
			'foreignKey' => 'item_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
    
    function itemInCart($id, $cart_id)
    {        
        return ($this->find('count', array('limit'=>1, 'conditions'=>array('CartItem.item_id'=>$id, 'CartItem.cart_id'=>$cart_id)))>0);	
    }
    
    function itemExists($id)
    {
        $item = $this->Item->find('count', array('limit'=>1, 'recursive'=>-1, 'contain'=>false, 'conditions'=>array('Item.id'=>$id)));
		return ($item>0);        
    }
    
    function addItem($id, $cart_id)
    {
		if($cart_id == 0)
		{
			$this->Cart->create($user);		
			if($this->Cart->save())
            {
                $this->Cart->recursive = -1;
                $cart_id = $this->Cart->id;
            }
		}
		
		if($cart_id>0)
		{            
			$this->create(array('item_id'=>$id, 'cart_id'=>$cart_id));
            
			if($this->save())
            {
                return $this->id;
            }
		}
        
        return false;
    }
}
?>