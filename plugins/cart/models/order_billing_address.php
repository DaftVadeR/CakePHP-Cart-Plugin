<?php
class OrderBillingAddress extends CartAppModel {
	var $name = 'OrderBillingAddress';
    var $displayField = 'address';
    
    var $validate = array(
		'first_name'=>array(
			'maxLength'=>array(
				'rule'=>array('maxLength', 125),
				'message'=>'Please specify a first name.',
				'allowEmpty'=>false,
				'required'=>true,
			)
		),
        'last_name'=>array(
			'maxLength'=>array(
				'rule'=>array('maxLength', 125),
				'message'=>'Please specify a last name.',
				'allowEmpty'=>false,
				'required'=>true,
			)
		),
        'zip_code'=>array(
			'maxLength'=>array(
				'rule'=>array('maxLength', 40),
				'message'=>'Please specify a zip/post code.',
				'allowEmpty'=>false,
				'required'=>true,
			)
		),
        'title_id'=>array(
			'numeric'=>array(
				'rule'=>array('numeric'),
				'message'=>'Please specify a title.',
				'allowEmpty'=>false,
				'required'=>true,
			)
		),
        'order_id'=>array(
			'numeric'=>array(
				'rule'=>array('numeric'),
				'message'=>'Please specify an order.',
				'allowEmpty'=>false,
				'required'=>true,
			)
		),
        'country_id'=>array(
			'numeric'=>array(
				'rule'=>array('numeric'),
				'message'=>'Please specify a country.',
				'allowEmpty'=>false,
				'required'=>true,
			)
		),
        'province'=>array(
			'maxLength'=>array(
				'rule'=>array('maxLength', 255),
				'message'=>'Please specify a province.',
				'allowEmpty'=>false,
				'required'=>true,
			)
		),
        'town_city'=>array(
			'maxLength'=>array(
				'rule'=>array('maxLength', 255),
				'message'=>'Please specify a town/city.',
				'allowEmpty'=>false,
				'required'=>true,
			)
		),
        'address'=>array(
			'maxLength'=>array(
				'rule'=>array('maxLength', 500),
				'message'=>'Please specify an address.',
				'allowEmpty'=>false,
				'required'=>true,
			),
		), 		
	);
    
	var $belongsTo = array(
		'Title' => array(
			'className' => 'Cart.Title',
			'foreignKey' => 'title_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Country' => array(
			'className' => 'Cart.Country',
			'foreignKey' => 'country_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),		
	);   
}
?>