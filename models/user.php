<?php
class User extends AppModel {
	var $name = 'User';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
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
        'tel'=>array(
			'maxLength'=>array(
				'rule'=>array('maxLength', 40),
				'message'=>'Please specify a telephone number.',
				'allowEmpty'=>false,
				'required'=>true,
			)
		),        
		'email'=>array(
			'email'=>array(
				'rule'=>array('email'),
				'message'=>'Please specify a valid email address.',
				'allowEmpty'=>false,
				'required'=>true,
			),
			'maxLength'=>array(
				'rule'=>array('maxLength', 255),
				'message'=>'Please specify an address less than 255 characters in length.',
				'allowEmpty'=>false,
				'required'=>true,
			),
			'isUnique'=>array(
				'rule'=>array('isUnique'),
				'message'=>'An account already uses that email address.',				
			)
			
		),		
	);
	
	var $hasMany = array(
		'Cart' => array(
			'className' => 'Cart.Cart',
			'foreignKey' => 'user_id',
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
        'Title' => array(
            'className'=>'Cart.Title',
        ),
        'BillingAddress' => array(
            'className'=>'Cart.BillingAddress',
        )
	);
	
	function beforeValidate()
	{
		if(isset($this->data['User']['password2']))
		{
			if($this->id && !$this->data['User']['password2'])
			{
				unset($this->data['User']['password']);
				unset($this->data['User']['password2']);
			}
			else
			{
				$this->validates['password'] = array(
					'maxLength'=>array(
						'rule'=>array('maxLength', 100),
						'allowEmpty'=>false,
						'required'=>true,
						'message'=>'That password is too long',
					),		
				);
				
				$this->validate['password']['equalTo'] = array('message'=>'The passwords do not match.', 'allowEmpty'=>false, 'require'=>true, 'rule'=>array('equalTo', Security::hash($this->data['User']['password2'], 'sha1', true)));
				$this->validate['password2']['maxLength'] = array('rule'=>array('between', 6, 40), 'message'=>'Please specify a password between 6 and 40 characters long.', 'allowEmpty'=>false, 'required'=>true);				
			}
		}
		
		parent::beforeValidate();
		return true;
	}

}
?>