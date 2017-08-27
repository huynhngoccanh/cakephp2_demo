<?php
class User extends AppModel{
	var $name = "User";
	 public $validate = array(
			"username"=>array(
					"rule1" =>array(
							"rule" => "notBlank",
							"message" => "Username not empty",
					),
					"rule2" => array(
							"rule" => array('maxLength', 255),
							"message" => "Username cannot be more than 255 characters.",
					),
					"rule3" =>array(
							"rule" => "checkUsername", // call function check Username
							"message" => "Username đã có người đăng ký",
					), 
			),
	 		'password' => array(
	 				'rule1' => array(
	 						'rule' => array('notBlank'),
	 						'message' => 'Password not empty',
	 				),
	 				'rule2' => array(
	 						'rule' => array('maxLength', 255),
	 						'message' => 'Password cannot be more than 255 characters.'
	 				),
	 		),
			"password_confirm"=>array(
					"rule1"=>array(
							"rule" => "notBlank",
							"message" => "Password comfirm không được rỗng",
							"on" => "create"
					),
					"match" => array(
							"rule" => "ComparePass", // call function compare password
							"message" => "Password comfirm không trùng khớp",
					),
			),
			"level"=>array(
					"rule" => "notBlank",
					"message" => "Please select level",
			),
			"email"=>array(
					"rule" => "email",
					"message" => "Email is not avalible",
			),
	 		'phone' => array(
	 				'rule1' => array(
	 						'rule' => array('notBlank'),
	 						'message' => 'Please input phone'
	 				),
	 				'rule2' => array(
	 						'rule' => array('maxLength', 255),
	 						'message' => 'Phone cannot be more than 255 characters.'
	 				),
	 				'rule3' => array(
	 						"rule" => "/^-{0,1}[0-9]*\.{0,1}[0-9]*$/",
	 						"message" => "Phone is number",
	 				),
	 		),
	 		'pin' => array(
	 				'rule1' => array(
	 						'rule' => array('notBlank'),
	 						'message' => 'Please input  pin'
	 				),
	 				'rule2' => array(
	 						'rule' => array('maxLength', 255),
	 						'message' => 'Pin cannot be more than 255 characters.'
	 				),
	 		),
	);
	function ComparePass(){
		if($this->data['User']['password']!=$this->data['User']['password_confirm']){
			return FALSE;
		}
		else{
			return TRUE;
		}
	}
	function checkUsername(){
		if(isset($this->data['User']['id'])){
			$where = array(
					"id !=" => $this->data['User']['id'],
					"username" => $this->data['User']['username'],
			);
		}else{
			$where = array(
					"username" => $this->data['User']['username'],
			);
		}
		$this->find("first", array(
				'conditions' => $where
		));
		$count = $this->getNumRows();
		if($count!=0){
			return false;
		}else{
			return true;
		}
	}
	function beforeSave($options = array()){
		if (!empty($this->data['User']['password'])) {
			$hash = Security::hash($this->data['User']['password'], 'md5');
			$this->data['User']['password'] = $hash;
		}
		return true;
	}
	function getUserLogin($userId) {
		$data = $this->find("first", array(
				'conditions' =>  array("id" => $userId)
		));
		return $data;
	}
}