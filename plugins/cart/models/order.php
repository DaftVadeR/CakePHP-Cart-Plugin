<?php
class Order extends CartAppModel {
	var $name = 'Order';
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
        'billing_address_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
        'total' => array(
			'money' => array(
				'rule' => array('money', 'left'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
        'items' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'status' => array(
			'inList' => array(
				'rule' => array('inList', array('Awaiting payment', 'Completed', 'In process')),
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
		),        
	);    
    
    var $hasOne = array(
        'OrderBillingAddress' => array(
			'className' => 'Cart.OrderBillingAddress',
			'foreignKey' => 'order_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
    );

	var $hasMany = array(
		'OrderItem' => array(
			'className' => 'Cart.OrderItem',
			'foreignKey' => 'order_id',
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
    
    function createItems($cart)
    {
        $items = array();
        $i = 0;
        $total = 0;        
        
        foreach($cart['CartItem'] as $item)
        {
            $items[$i] = $item['Item'];
            $items[$i]['order_id'] = $this->id;
            $total+=$items[$i]['price'];
            
            unset($items[$i]['id']);
            $i++;
        }
        
        $this->saveField('total', $total);
        $this->saveField('items', count($items));
        
        return $this->OrderItem->saveAll($items);        
    }
    
    function createBilling($billing)
    {
        unset($billing['id']);
        unset($billing['user_id']);
        unset($billing['is_default']);
        
        $billing['order_id'] = $this->id;
        
        $this->OrderBillingAddress->create($billing);
        return $this->OrderBillingAddress->save();       
    }
}
?>