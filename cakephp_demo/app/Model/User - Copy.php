<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
/**
 * User Model
 *
 * @property Group $Group
 * @property Patient $Patient
 * @property Staff $Staff
 */
class User extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'username' => array(
			'notEmpty' => array(
				'rule' => array('notBlank'),
				'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'maxLength' => array(
					'rule' => array('maxLength', 255),
					'message' => 'username cannot be more than 255 characters.'
			),
			'unique' => array(
				'rule'	=> array('isUniqueUsername'),
				'message' => 'This username is already in use'
			),
		),
		'password' => array(
			'notEmpty' => array(
				'rule' => array('notBlank'),
				'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'maxLength' => array(
					'rule' => array('maxLength', 255),
					'message' => 'Password cannot be more than 255 characters.'
			),
		),
		'password_confirm' => array(
			'required' => array(
				'rule' => array('notBlank'),
				'message' => 'Please confirm your password'
			),
			 'equaltofield' => array(
				'rule' => array('equaltofield','password'),
				'message' => 'Both passwords must match.'
			)
		),
		'email' => array(
				'required' => array(
						'rule' => array('notBlank'),
						'message' => 'Please email'
				),
				'maxLength' => array(
						'rule' => array('maxLength', 255),
						'message' => 'Email cannot be more than 255 characters.'
				),
				'isEmail' => array(
						'rule' => array('isEmail'),
						'message' => 'Email incorrect format.'
				),
				'unique' => array(
						'rule'	=> array('isUniqueEmail'),
						'message' => 'This email is already in use'
				),
		),
		'phone' => array(
				'required' => array(
						'rule' => array('notBlank'),
						'message' => 'Please phone'
				),
				'maxLength' => array(
						'rule' => array('maxLength', 255),
						'message' => 'Phone cannot be more than 255 characters.'
				),
				'isNumber' => array(
						'rule' => array('isNumber'),
						'message' => 'Phone is number.'
				),
		),
		'pin' => array(
				'required' => array(
						'rule' => array('notBlank'),
						'message' => 'Please pin'
				),
				'maxLength' => array(
						'rule' => array('maxLength', 255),
						'message' => 'Pin cannot be more than 255 characters.'
				),
		),
	);

	/**
	 * Before isUniqueUsername
	 * @param array $options
	 * @return boolean
	 */
	function isUniqueUsername($check) {
		$username = $this->find('first',
			array(
				'fields' => array('User.id', 'User.username'),
				'conditions' => array('User.username' => $check['username'])
			)
		);
		if(!empty($username)) {
			if(isset($this->data[$this->alias]['id']) && $this->data[$this->alias]['id'] == $username['User']['id']) {
				return true;
			} else {
				return false;
			}
		}else {
			return true;
		}
	}

	public function equaltofield($check, $otherfield) {
		//get name of field
		$fname = '';
		foreach ($check as $key => $value){
			$fname = $key;
			break;
		}
		return $this->data[$this->name][$otherfield] === $this->data[$this->name][$fname];
	}

	/**
	 * isEmail
	 * - Return true if string $data is an email address format
	 * - Otherwise, return false
	 */
	public function isEmail($data) {
		$fname = '';
		foreach ($data as $key => $value){
			$fname = $key;
			break;
		}
		$data = $this->data[$this->name][$fname];
		if ($data == "") {
			return true;
		}
		if (preg_match("/^[a-zA-Z0-9_\.\-=]+@[a-zA-z0-9_\-=]+\.[a-zA-Z0-9_\.\-=]+$/", $data)) {
			return true;
		}
		return false;
	}
	/**
	 * isNumber
	 * - Return true if string $data is a number format
	 * - Otherwise, return false
	 */
	public function isNumber($data) {
		$fname = '';
		foreach ($data as $key => $value){
			$fname = $key;
			break;
		}
		$data = $this->data[$this->name][$fname];
		if ($data == "") {
			return true;
		}
		if (preg_match("/^-{0,1}[0-9]*\.{0,1}[0-9]*$/", $data)) {
			return true;
		}
		return false;
	}
	/**
	 * Before isUniqueUsername
	 * @param array $options
	 * @return boolean
	 */
	function isUniqueEmail($check) {
		$username = $this->find('first',
				array(
						'fields' => array('User.id', 'User.email'),
						'conditions' => array('User.email' => $check['email'])
				)
		);

		if(!empty($username)) {
			if(isset($this->data[$this->alias]['id']) && $this->data[$this->alias]['id'] == $username['User']['id']) {
				return true;
			} else {
				return false;
			}
		}else {
			return true;
		}
	}
	/**
	 * Before Save
	 * @param array $options
	 * @return boolean
	 */
	 /*public function beforeSave($options = array()) {
		// hash our password
		if (isset($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}

		// if we get a new password, hash it
		if (isset($this->data[$this->alias]['password_update']) && !empty($this->data[$this->alias]['password_update'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password_update']);
		}

		// fallback to our parent
		return parent::beforeSave($options);
	}*/

}
