<?php
class BillController extends AppController{    
    var $name = "bill";
    var $helpers = array ('Html','Form');
    var $components = array("Session");
    public $uses = array('Bill', 'Bank', 'City', 'Game', 'Mobile', 'Service', 'Tivi', 'Money', 'Phone', 'User');
    
    function beforeFilter(){
        parent::beforeFilter();
        /** get all data */
        $this->dataBank = $this->Bank->getBank();
        $this->dataMobile = $this->Mobile->getMobile();
        $this->dataMoneySL = $this->Money->getMoney();
        $this->dataService = $this->Service->getService();
        $this->dataCity = $this->City->getCity();
        $this->dataGame = $this->Game->getGame();
        $this->dataTivi = $this->Tivi->getTivi();
        $this->dataPhone = $this->Phone->getPhone();
        
        $this->set("dataBank", $this->dataBank);
        $this->set("dataMobile", $this->dataMobile);
        $this->set("dataMoneySL", $this->dataMoneySL);
        $this->set("dataService", $this->dataService);
        $this->set("dataCity", $this->dataCity);
        $this->set("dataGame", $this->dataGame);
        $this->set("dataTivi", $this->dataTivi);
        $this->set("dataPhone", $this->dataPhone);
        
        $this->set("dataInBank", Configure::read('inBank'));
        $this->set("dataRegist", Configure::read('regist'));        
        $this->set("dataSearch", Configure::read('search'));
        $this->set("dataOutBank", Configure::read('outBank'));
        $this->set("dataReserve", Configure::read('reserve'));
        $this->set("dataAccount", Configure::read('account'));
        $this->set("dataTypeAccount", Configure::read('typeAccount'));
        $this->set("dataElectricity", Configure::read('electricity'));
        $this->set("dataTelecommunicationFees", Configure::read('telecommunicationFees'));
    }
    function setValidate($userId) {
    	$this->Bill->validate = array(
    			'type_account' => array(
    					'rule' => array('checkSBox', Configure::read('typeAccount')),
    					'message' => 'Giá trị không phù hợp.'
    			),
    			'in_bank' => array(
    					'rule' => array('checkSBox', Configure::read('inBank')),
    					'message' => 'Giá trị không phù hợp.'
    			),
    			'out_bank' => array(
    					'rule' => array('checkSBox', Configure::read('outBank')),
    					'message' => 'Giá trị không phù hợp.'
    			),
    			'bank' => array(
    					'rule' => array('checkSBox', $this->dataBank),
    					'message' => 'Giá trị không phù hợp.'
    			),
    			'phone' => array(
    					'rule1' => array(
    							'rule' => array('notBlank'),
    							'message' => 'Please input phone'
    					),
    					'rule2' => array(
    							"rule" => "/^-{0,1}[0-9]*\.{0,1}[0-9]*$/",
    							"message" => "Phone is number",
    					)
    			),
    			'money' => array(
    					'rule1' => array(
    							'rule' => array('notBlank'),
    							'message' => 'Please input money'
    					),
    					'rule2' => array(
    							"rule" => "/^-{0,1}[0-9]*\.{0,1}[0-9]*$/",
    							"message" => "Money is number",
    					),
    					'rule3' => array(
    							"rule" => array('checkMoney', $userId),
    							"message" => "Ban khong du tien",
    					)
    			),
    			'money_sl' => array(
    					'rule1' => array(
    							'rule' => array('checkSBox', $this->dataMoneySL),
    							'message' => 'Giá trị không phù hợp.'
    					),
    					'rule2' => array(
    							"rule" => array('checkMoney', $userId),
    							"message" => "Ban khong du tien",
    					)
    			),
    			'contain' => array(
    					'rule' => array('maxLength', 255),
    					'message' => 'Contain cannot be more than 255 characters.'
    			),
    			'number_acc' => array(
    					'rule' => array('maxLength', 30),
    					'message' => 'Account number cannot be more than 255 characters.'
    			),
    			'telecommunication_fees' => array(
    					'rule' => array('checkSBox', Configure::read('telecommunicationFees')),
    					'message' => 'Giá trị không phù hợp.'
    			),
    			'type_card' => array(
    					'rule' => array('checkSBox', $this->dataMobile),
    					'message' => 'Giá trị không phù hợp.'
    			),
    			'code_client' => array(
    					'rule1' => array(
    							'rule' => array('notBlank'),
    							'message' => 'Please input client code'
    					)
    			),
    			'payment_service' => array(
    					'rule' => array('checkSBox', $this->dataService),
    					'message' => 'Giá trị không phù hợp.'
    			),
    			'electricity' => array(
    					'rule' => array('checkSBox', Configure::read('electricity')),
    					'message' => 'Giá trị không phù hợp.'
    			),
    			'regist' => array(
    					'rule' => array('checkSBox', Configure::read('regist')),
    					'message' => 'Giá trị không phù hợp.'
    			),
    			'city' => array(
    					'rule' => array('checkSBox', $this->dataCity),
    					'message' => 'Giá trị không phù hợp.'
    			),
    			'game' => array(
    					'rule' => array('checkSBox', $this->dataGame),
    					'message' => 'Giá trị không phù hợp.'
    			),
    			'tivi' => array(
    					'rule' => array('checkSBox', $this->dataTivi),
    					'message' => 'Giá trị không phù hợp.'
    			),
    			'payment_code' => array(
    					'rule1' => array(
    							'rule' => array('notBlank'),
    							'message' => 'Please input payment code'
    					)
    			),
    			'number_acc' => array(
    					'rule1' => array(
    							'rule' => array('notBlank'),
    							'message' => 'Please input account number'
    					)
    			),
    			'tag_code' => array(
    					'rule1' => array(
    							'rule' => array('notBlank'),
    							'message' => 'Please input code'
    					)
    			),
    			'reserve' => array(
    					'rule' => array('checkSBox', Configure::read('reserve')),
    					'message' => 'Giá trị không phù hợp.'
    			), 
    			'account' => array(
    					'rule' => array('checkSBox', Configure::read('account')),
    					'message' => 'Giá trị không phù hợp.'
    			),
    			'search' => array(
    					'rule' => array('checkSBox', Configure::read('search')),
    					'message' => 'Giá trị không phù hợp.'
    			),
    			'pin' => array(
    					'rule1' => array(
    							'rule' => array('notBlank'),
    							'message' => 'Please input phone'
    					),
    					'rule2' => array(
    							"rule" => array('checkPin', $userId), // call function check Username
    							"message" => "Pin chưa được đăng ký",
    					),
    			),
    	);
    }
    function index(){
    	/* $userId = $this->Auth->user('id');
    	// setting giá trị validate
    	$this->setValidate($userId);
    	if ($this->request->is('post') &&  $this->request->data['confirm']) {
    		// xử lý validate
    		$this->Bill->set($this->request->data);
    		$this->Bill->validates();
    		if (count($this->Bill->validationErrors) <= 0) {
    			$this->request->data['Bill']['user_id'] = $userId;
	    		$this->Session->write('TRANSFERS_ADD', $this->request->data);
	    		$this->Session->write('TRANSFERS_ADD_FROM', 1);
	    		$this->redirect(array('action' => 'transfersConfirm'));
    		}
    	} else {
    		$TRANSFERS_ADD_BACK= $this->Session->read('TRANSFERS_ADD_FROM');
    		if ($TRANSFERS_ADD_BACK) {
    			if ($TRANSFERS_ADD_BACK == 2) {
    				$this->request->data = $this->Session->read('TRANSFERS_ADD');
    			} else {
    				$this->redirect(array('controller'=>'users', 'action'=>'menu'));
    			}
    			
    		} else {
    			$this->Session->delete('TRANSFERS_ADD');
    		}
    	} */
    	$this->proccessRegist('TRANSFERS', 'transfersConfirm');
    }
    function transfersConfirm(){
    	/* $flag = $this->Session->read('TRANSFERS_ADD_FROM');
    	$data = $this->Session->read('TRANSFERS_ADD');
    	if (!isset($data) || $data == "" || empty($data) || $flag != 1) {
    		$this->redirect(array('controller'=>'users', 'action'=>'menu'));
    	}
    	if ($this->request->is('post')) {
    		$this->Session->write('TRANSFERS_ADD_FROM', 2);
    		if ($this->request->data['btn_regist']) {
    			if (isset($data['Bill']['phone'])) {
    				$data['Bill']['phone'] = $this->dataPhone[$data['Bill']['phone']];
    			}
    			$this->Session->delete('TRANSFERS_ADD');
    			$this->Bill->save($data);
    			
    			// Update User
    			if (isset($data['Bill']['money'])) {
	    			$this->User->id = $this->Auth->user("id");
	    			$dataUser = $this->User->getUserLogin($this->User->id);
	    			$newMoney = $dataUser['User']['money'] - $data['Bill']['money'];
	    			$this->User->save(array('User' => array('money' => $newMoney)));
    			}
    			$this->redirect(array('action' => 'finish'));
    		} else {
    			$this->redirect(array('action' => 'index'));
    		}
    	}
    	$this->set("data",$data); */
    	$this->proccessConfirm('TRANSFERS', array('action' => 'index'));
    }
    function finish(){
    	if ($this->Session->check('TRANSFERS_ADD_FROM')) {
	    	$this->Session->delete('TRANSFERS_ADD');
	    	$this->Session->write('TRANSFERS_ADD_FROM', 3);
    	}
    	if ($this->Session->check('TELECOMMUNICATION_FEES_ADD_FROM')) {
    		$this->Session->delete('TELECOMMUNICATION_FEES_ADD');
    		$this->Session->write('TELECOMMUNICATION_FEES_ADD_FROM', 3);
    	}
    	if ($this->Session->check('PAYMENT_SERVICE_ADD_FROM')) {
    		$this->Session->delete('PAYMENT_SERVICE_ADD');
    		$this->Session->write('PAYMENT_SERVICE_ADD_FROM', 3);
    	}
    	if ($this->Session->check('RESERVE_ACCOUNT_ADD_FROM')) {
    		$this->Session->delete('RESERVE_ACCOUNT_ADD');
    		$this->Session->write('RESERVE_ACCOUNT_ADD_FROM', 3);
    	}
    	if ($this->Session->check('ACCOUNT_ADD_FROM')) {
    		$this->Session->delete('ACCOUNT_ADD');
    		$this->Session->write('ACCOUNT_ADD_FROM', 3);
    	}
    }
    function telecommunicationFees(){
    	/* $userId = $this->Auth->user('id');
    	// setting giá trị validate
    	$this->setValidate($userId);
    	if ($this->request->is('post') &&  $this->request->data['confirm']) {
    		// xử lý validate
    		$this->Bill->set($this->request->data);
    		$this->Bill->validates();
    		if (count($this->Bill->validationErrors) <= 0) {
    			$this->request->data['Bill']['user_id'] = $userId;
    			$this->Session->write('TELECOMMUNICATION_FEES_ADD', $this->request->data);
    			$this->Session->write('TELECOMMUNICATION_FEES_ADD_FROM', 1);
    			$this->redirect(array('action' => 'telecommunicationFeesConfirm'));
    		}
    	} else {
    		$TELECOMMUNICATION_FEES_BACK= $this->Session->read('TELECOMMUNICATION_FEES_ADD_FROM');
    		if ($TELECOMMUNICATION_FEES_BACK) {
    			if ($TELECOMMUNICATION_FEES_BACK== 2) {
    				$this->request->data = $this->Session->read('TELECOMMUNICATION_FEES_ADD');
    			} else {
    				$this->redirect(array('controller'=>'users', 'action'=>'menu'));
    			}
    			
    		}
    	}  */
    	$this->proccessRegist('TELECOMMUNICATION_FEES', 'telecommunicationFeesConfirm');
    }
    function telecommunicationFeesConfirm(){
        /* $flag = $this->Session->read('TELECOMMUNICATION_FEES_ADD_FROM');
    	$data = $this->Session->read('TELECOMMUNICATION_FEES_ADD');
    	if (!isset($data) || $data == "" || empty($data) || $flag != 1) {
    		$this->redirect(array('controller'=>'users', 'action'=>'menu'));
    	}
    	if ($this->request->is('post')) {
    		$this->Session->write('TELECOMMUNICATION_FEES_ADD_FROM', 2);
    		if ($this->request->data['btn_regist']) {
    			if(isset($data['Bill']['money_sl']) && $data['Bill']['money_sl'] != "" && $data['Bill']['money_sl'] != 0) {
    				$data['Bill']['money'] = $this->dataMoneySL[$data['Bill']['money_sl']];
    			}
    			if (isset($data['Bill']['phone'])) {
    				$data['Bill']['phone'] = $this->dataPhone[$data['Bill']['phone']];
    			}
    			
    			$this->Session->delete('TELECOMMUNICATION_FEES_ADD');
    			$this->Bill->save($data);
    			
    			// Update User
    			if (isset($data['Bill']['money'])) {
	    			$this->User->id = $this->Auth->user("id");
	    			$dataUser = $this->User->getUserLogin($this->User->id);
	    			$newMoney = $dataUser['User']['money'] - $data['Bill']['money'];
	    			$this->User->save(array('User' => array('money' => $newMoney)));
    			}
    			$this->redirect(array('action' => 'finish'));
    		} else {
    			$this->redirect(array('controller'=>'bill', 'action'=>'telecommunicationFees'));
    		}
    	}
    	$this->set("data",$data); */
    	$this->proccessConfirm('TELECOMMUNICATION_FEES', array('controller'=>'bill', 'action'=>'telecommunicationFees'));
    }
    function paymentService(){
    	/* $userId = $this->Auth->user('id');
    	// setting giá trị validate
    	$this->setValidate($userId);
    	if ($this->request->is('post') &&  $this->request->data['confirm']) {
    		// xử lý validate
    		$this->Bill->set($this->request->data);
    		$this->Bill->validates();
    		if (count($this->Bill->validationErrors) <= 0) {
    			$this->request->data['Bill']['user_id'] = $userId;
    			$this->Session->write('PAYMENT_SERVICE_ADD', $this->request->data);
    			$this->Session->write('PAYMENT_SERVICE_ADD_FROM', 1);
    			$this->redirect(array('action' => 'paymentServiceConfirm'));
    		}
    	} else {
    		$PAYMENT_SERVICE_ADD_BACK= $this->Session->read('PAYMENT_SERVICE_ADD_FROM');
    		if ($PAYMENT_SERVICE_ADD_BACK) {
    			if ($PAYMENT_SERVICE_ADD_BACK== 2) {
    				$this->request->data = $this->Session->read('PAYMENT_SERVICE_ADD');
    			} else {
    				$this->redirect(array('controller'=>'users', 'action'=>'menu'));
    			}
    			
    		}
    	}  */
    	$this->proccessRegist('PAYMENT_SERVICE', 'paymentServiceConfirm');
    }
    function paymentServiceConfirm(){
    	/* $flag = $this->Session->read('PAYMENT_SERVICE_ADD_FROM');
    	$data = $this->Session->read('PAYMENT_SERVICE_ADD');
    	
    	if (!isset($data) || $data == "" || empty($data) || $flag != 1) {
    		$this->redirect(array('controller'=>'users', 'action'=>'menu'));
    	}
    	if ($this->request->is('post')) {
    		$this->Session->write('PAYMENT_SERVICE_ADD_FROM', 2);
    		if ($this->request->data['btn_regist']) {    			
    			$this->Session->delete('PAYMENT_SERVICE_ADD');
    			$this->Bill->save($data);    			
    			$this->redirect(array('action' => 'finish'));
    		} else {
    			$this->redirect(array('controller'=>'bill', 'action'=>'paymentService'));
    		}
    	}
    	$this->set("data",$data); */
    	$this->proccessConfirm('PAYMENT_SERVICE', array('controller'=>'bill', 'action'=>'paymentService'));
    }
    function reserveAccount(){
    	/* $userId = $this->Auth->user('id');
    	// setting giá trị validate
    	$this->setValidate($userId);
    	if ($this->request->is('post') &&  $this->request->data['confirm']) {
    		// xử lý validate
    		$this->Bill->set($this->request->data);
    		$this->Bill->validates();
    		if (count($this->Bill->validationErrors) <= 0) {
    			$this->request->data['Bill']['user_id'] = $userId;
    			$this->Session->write('RESERVE_ACCOUNT_ADD', $this->request->data);
    			$this->Session->write('RESERVE_ACCOUNT_ADD_FROM', 1);
    			$this->redirect(array('action' => 'reserveAccountConfirm'));
    		}
    	} else {
    		$RESERVE_ACCOUNT_ADD_BACK= $this->Session->read('RESERVE_ACCOUNT_ADD_FROM');
    		if ($RESERVE_ACCOUNT_ADD_BACK) {
    			if ($RESERVE_ACCOUNT_ADD_BACK== 2) {
    				$this->request->data = $this->Session->read('RESERVE_ACCOUNT_ADD');
    			} else {
    				$this->redirect(array('controller'=>'users', 'action'=>'menu'));
    			}
    			
    		}
    	}  */
    	$this->proccessRegist('RESERVE_ACCOUNT', 'reserveAccountConfirm');
    }
    function reserveAccountConfirm(){
    	/* $flag = $this->Session->read('RESERVE_ACCOUNT_ADD_FROM');
    	$data = $this->Session->read('RESERVE_ACCOUNT_ADD');
    	
    	if (!isset($data) || $data == "" || empty($data) || $flag != 1) {
    		$this->redirect(array('controller'=>'users', 'action'=>'menu'));
    	}
    	if ($this->request->is('post')) {
    		$this->Session->write('RESERVE_ACCOUNT_ADD_FROM', 2);
    		if ($this->request->data['btn_regist']) {    			
    			if(isset($data['Bill']['money_sl']) && $data['Bill']['money_sl'] != "" && $data['Bill']['money_sl'] != 0) {
    				$data['Bill']['money'] = $this->dataMoneySL[$data['Bill']['money_sl']];
    			}
    			if (isset($data['Bill']['phone'])) {
    				$data['Bill']['phone'] = $this->dataPhone[$data['Bill']['phone']];
    			}
    			
    			$this->Session->delete('RESERVE_ACCOUNT_ADD');
    			$this->Bill->save($data);
    			
    			// Update User
    			if (isset($data['Bill']['money'])) {
	    			$this->User->id = $this->Auth->user("id");
	    			$dataUser = $this->User->getUserLogin($this->User->id);
	    			$newMoney = $dataUser['User']['money'] - $data['Bill']['money'];
	    			$this->User->save(array('User' => array('money' => $newMoney)));
    			}
    			$this->redirect(array('action' => 'finish'));
    		} else {
    			$this->redirect(array('controller'=>'bill', 'action'=>'reserveAccount'));
    		}
    	}
    	$this->set("data",$data); */
    	$this->proccessConfirm('RESERVE_ACCOUNT', array('controller'=>'bill', 'action'=>'reserveAccount'));
    }
    function account(){
    	/* $userId = $this->Auth->user('id');
    	// setting giá trị validate
    	$this->setValidate($userId);
    	if ($this->request->is('post') &&  $this->request->data['confirm']) {
    		// xử lý validate
    		$this->Bill->set($this->request->data);
    		$this->Bill->validates();
    		if (count($this->Bill->validationErrors) <= 0) {
    			$this->request->data['Bill']['user_id'] = $userId;
    			$this->Session->write('ACCOUNT_ADD', $this->request->data);
    			$this->Session->write('ACCOUNT_ADD_FROM', 1);
    			$this->redirect(array('action' => 'accountConfirm'));
    		}
    	} else {
    		$ACCOUNT_ADD_BACK= $this->Session->read('ACCOUNT_ADD_FROM');
    		if ($ACCOUNT_ADD_BACK) {
    			if ($ACCOUNT_ADD_BACK== 2) {
    				$this->request->data = $this->Session->read('ACCOUNT_ADD');
    			} else {
    				$this->redirect(array('controller'=>'users', 'action'=>'menu'));
    			}
    			
    		}
    	}  */
    	$this->proccessRegist('ACCOUNT', 'accountConfirm');
    }
    function accountConfirm(){
    	/* $flag = $this->Session->read('ACCOUNT_ADD_FROM');
    	$data = $this->Session->read('ACCOUNT_ADD');
    	
    	if (!isset($data) || $data == "" || empty($data) || $flag != 1) {
    		$this->redirect(array('controller'=>'users', 'action'=>'menu'));
    	}
    	if ($this->request->is('post')) {
    		$this->Session->write('ACCOUNT_ADD_FROM', 2);
    		if ($this->request->data['btn_regist']) {
    			if(isset($data['Bill']['money_sl']) && $data['Bill']['money_sl'] != "" && $data['Bill']['money_sl'] != 0) {
    				$data['Bill']['money'] = $this->dataMoneySL[$data['Bill']['money_sl']];
    			}
    			$this->Session->delete('ACCOUNT_ADD');
    			$this->Bill->save($data);
    			
    			// Update User
    			if (isset($data['Bill']['money'])) {
	    			$this->User->id = $this->Auth->user("id");
	    			$dataUser = $this->User->getUserLogin($this->User->id);
	    			$newMoney = $dataUser['User']['money'] - $data['Bill']['money'];
	    			$this->User->save(array('User' => array('money' => $newMoney)));
    			}
    			$this->redirect(array('action' => 'finish'));
    		} else {
    			$this->redirect(array('controller'=>'bill', 'action'=>'account'));
    		}
    	}
    	$this->set("data",$data); */
    	$this->proccessConfirm('ACCOUNT', array('controller'=>'bill', 'action'=>'account'));
    }
    function proccessRegist($key, $action) {
    	$userId = $this->Auth->user('id');    	
    	$this->setValidate($userId);// setting giá trị validate
    	if ($this->request->is('post') &&  $this->request->data['confirm']) {
    		// xử lý validate
    		$this->Bill->set($this->request->data);
    		$this->Bill->validates();
    		if (count($this->Bill->validationErrors) <= 0) {
    			$this->request->data['Bill']['user_id'] = $userId;
    			$this->Session->write($key . '_ADD', $this->request->data);
    			$this->Session->write($key . '_ADD_FROM', 1);
    			$this->redirect(array('action' => $action));
    		}
    	} else {
    		$backPage= $this->Session->read($key . '_ADD_FROM');
    		if ($backPage) {
    			if ($backPage== 2) {
    				$this->request->data = $this->Session->read($key . '_ADD');
    			} else {
    				$this->redirect(array('controller'=>'users', 'action'=>'menu'));
    			}
    			
    		}
    	} 
    }
    function proccessConfirm($key, $redirect) {
    	$flag = $this->Session->read($key . '_ADD_FROM');
    	$data = $this->Session->read($key . '_ADD');
    	
    	if (!isset($data) || $data == "" || empty($data) || $flag != 1) {
    		$this->redirect(array('controller'=>'users', 'action'=>'menu'));
    	}
    	if ($this->request->is('post')) {
    		$this->Session->write('ACCOUNT_ADD_FROM', 2);
    		if ($this->request->data['btn_regist']) {
    			if(isset($data['Bill']['money_sl']) && $data['Bill']['money_sl'] != "" && $data['Bill']['money_sl'] != 0) {
    				$data['Bill']['money'] = $this->dataMoneySL[$data['Bill']['money_sl']];
    			}
    			if (isset($data['Bill']['phone'])) {
    				$data['Bill']['phone'] = $this->dataPhone[$data['Bill']['phone']];
    			}
    			$this->Session->delete($key . '_ADD');
    			$this->Bill->save($data);
    			
    			// Update User
    			if (isset($data['Bill']['money'])) {
    				$this->User->id = $this->Auth->user("id");
    				$dataUser = $this->User->getUserLogin($this->User->id);
    				$newMoney = $dataUser['User']['money'] - $data['Bill']['money'];
    				$this->User->save(array('User' => array('money' => $newMoney)));
    			}
    			$this->redirect(array('action' => 'finish'));
    		} else {
    			$this->redirect($redirect);
    		}
    	}
    	$this->set("data", $data);
    }
}