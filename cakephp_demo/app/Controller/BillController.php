<?php
class BillController extends AppController{    
    var $name = "bill";
    var $helpers = array('Paginator','Html','Form');
    var $components = array("Session");
    var $paginate = array('maxLimit' => 10);
    public $uses = array('Bill', 'Bank', 'City', 'Game', 'Mobile', 'Service', 'Tivi', 'Money', 'Phone', 'User', 'Receiver');
    
    function beforeFilter(){
        parent::beforeFilter();
        /** get all data */
        $this->dataBank 	= $this->Bank->getBank();
        $this->dataMobile 	= $this->Mobile->getMobile();
        $this->dataMoneySL 	= $this->Money->getMoney();
        $this->dataService 	= $this->Service->getService();
        $this->dataCity 	= $this->City->getCity();
        $this->dataGame 	= $this->Game->getGame();
        $this->dataTivi 	= $this->Tivi->getTivi();
        $this->dataPhone 	= $this->Phone->getPhone();
        $this->dataReceiver = $this->Receiver->getReceiver();
        
        $this->set("dataBank", $this->dataBank);
        $this->set("dataCity", $this->dataCity);
        $this->set("dataGame", $this->dataGame);
        $this->set("dataTivi", $this->dataTivi);
        $this->set("dataPhone", $this->dataPhone);
        $this->set("dataMobile", $this->dataMobile);
        $this->set("dataMoneySL", $this->dataMoneySL);
        $this->set("dataService", $this->dataService);
        $this->set("dataReceiver", $this->dataReceiver);
        
        $this->set("dataInBank", Configure::read('inBank'));
        $this->set("dataRegist", Configure::read('regist'));        
        $this->set("dataSearch", Configure::read('search'));
        $this->set("dataOutBank", Configure::read('outBank'));
        $this->set("dataReserve", Configure::read('reserve'));
        $this->set("dataAccount", Configure::read('account'));
        $this->set("dataAccMoney", Configure::read('accMoney'));
        $this->set("dataTypeAccount", Configure::read('typeAccount'));
        $this->set("dataListCategory", Configure::read('list_category'));
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
    			'receiver' => array(
    					'rule' => array('checkSBox', $this->dataReceiver),
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
    			'money_card' => array(
    					'rule' => array(
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
    					),
    					'rule2' => array(
    							'rule' => array('lenTagCode', LENGTH_TAG_CODE),
    							'message' => 'Mã thẻ gồm 14 ký tự.'
    					),
    					'rule3' => array(
    							'rule' => array('checkTagCode', $this->dataMoneySL),
    							'message' => 'Giá trị không phù hợp.'
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
    	$this->proccessRegist('TRANSFERS', 'transfersConfirm');
    }
    function transfersConfirm(){
    	$this->proccessConfirm('TRANSFERS', 'bill', 'index');
    }
    function telecommunicationFees(){
    	$this->proccessRegist('TELECOMMUNICATION_FEES', 'telecommunicationFeesConfirm');
    }
    function telecommunicationFeesConfirm(){
    	$this->proccessConfirm('TELECOMMUNICATION_FEES', 'bill', 'telecommunicationFees');
    }
    function paymentService(){
    	$this->proccessRegist('PAYMENT_SERVICE', 'paymentServiceConfirm');
    }
    function paymentServiceConfirm(){
    	$this->proccessConfirm('PAYMENT_SERVICE', 'bill', 'paymentService');
    }
    function reserveAccount(){
    	$this->proccessRegist('RESERVE_ACCOUNT', 'reserveAccountConfirm');
    }
    function reserveAccountConfirm() {
    	$this->proccessConfirm('RESERVE_ACCOUNT', 'bill', 'reserveAccount');
    }
    function account(){
    	$this->proccessRegist('ACCOUNT', 'accountConfirm');
    }
    function accountConfirm(){
    	$this->proccessConfirm('ACCOUNT', 'bill', 'account');
    }
    function mobile(){
    	$this->proccessRegist('MOBILE', 'mobileConfirm');
    }
    function mobileConfirm(){
    	$this->proccessConfirm('MOBILE', 'bill', 'mobile');
    }
    function finish(){
    	if ($this->Session->check('TRANSFERS_ADD_FROM')) {
    		$this->Session->delete('TRANSFERS_ADD');
    		$this->Session->write('TRANSFERS_ADD_FROM', 3);
    		$msg = $this->Session->read('TRANSFERS_MSG');
    		$dataUser = $this->User->getUserLogin($this->Auth->user("id"));
    	}
    	if ($this->Session->check('TELECOMMUNICATION_FEES_ADD_FROM')) {
    		$this->Session->delete('TELECOMMUNICATION_FEES_ADD');
    		$this->Session->write('TELECOMMUNICATION_FEES_ADD_FROM', 3);
    		$msg = $this->Session->read('TELECOMMUNICATION_FEES_MSG');
    		$dataUser = $this->User->getUserLogin($this->Auth->user("id"));
    	}
    	if ($this->Session->check('PAYMENT_SERVICE_ADD_FROM')) {
    		$this->Session->delete('PAYMENT_SERVICE_ADD');
    		$this->Session->write('PAYMENT_SERVICE_ADD_FROM', 3);
    		$msg = $this->Session->read('PAYMENT_SERVICE_MSG');
    	}
    	if ($this->Session->check('RESERVE_ACCOUNT_ADD_FROM')) {
    		$this->Session->delete('RESERVE_ACCOUNT_ADD');
    		$this->Session->write('RESERVE_ACCOUNT_ADD_FROM', 3);
    		$msg = $this->Session->read('RESERVE_ACCOUNT_MSG');
    	}
    	if ($this->Session->check('ACCOUNT_ADD_FROM')) {
    		$this->Session->delete('ACCOUNT_ADD');
    		$this->Session->write('ACCOUNT_ADD_FROM', 3);
    		$msg = $this->Session->read('ACCOUNT_MSG');
    	}
    	if ($this->Session->check('MOBILE_ADD_FROM')) {
    		$this->Session->delete('MOBILE_ADD');
    		$this->Session->write('MOBILE_ADD_FROM', 3);
    		$msg = $this->Session->read('MOBILE_MSG');
    		$dataUser = $this->User->getUserLogin($this->Auth->user("id"));
    	}
    	$money = (isset($dataUser['User']['money'])) ? $dataUser['User']['money'] . " đồng" : "";
    	$msg = (isset($msg)) ? $msg : "";
    	$this->set("money", $money);
    	$this->set("msg", $msg);
    }
    function listBill(){
    	$userId = $this->Auth->user('id');
    	if (isset($this->params['url']['list_category']) && !array_key_exists($this->params['url']['list_category'], Configure::read('list_category'))) {
    		$errorView = 'Không tìm thấy dữ liệu phù hợp';
    	} else {
    		if ($this->request->is('get') &&  isset($this->params['url']['confirm'])) {
    			$this->request->data['Bill']['list_category'] = $this->params['url']['list_category'];
    			$where = array(
    					"user_id" => $userId,
    					"category" => $this->params['url']['list_category'],
    			);
    		} else {
    			$this->request->data['Bill']['list_category'] = 1;
    			$where = array(
    					"user_id" => $userId,
    					"category" => 1,
    			);
    		}
    		$limit = LIMIT_RECORD;
    		$this->paginate = array(
    				'conditions' => $where,
    				'limit' => LIMIT_RECORD,
    				'order' => array('created_date' => 'desc'),
    		);
    		$dataBill = $this->paginate("Bill");
    		$errorView = (count($dataBill) <= 0) ? 'Không tìm thấy dữ liệu phù hợp' : '';
    		$this->set("dataBill",$dataBill);
    		$this->set("data", $this->request->data);
    	}
    	$this->set("errorView", $errorView);
    }
    function proccessRegist($key, $action) {
    	$userId = $this->Auth->user('id');    	
    	$this->setValidate($userId);// setting giá trị validate
    	if ($this->request->is('post') &&  $this->request->data['confirm']) {
    		// xử lý validate
    		$this->Bill->set($this->request->data);
    		$this->Bill->validates();
    		// Check tai khoản Agribank dataAccMoney
    		if (isset($this->request->data['Bill']['acc_money'])) {
    			if ($this->request->data['Bill']['acc_money'] == 1 && isset($this->request->data['Bill']['acc_agri'])) {
    				$accAgri = $this->checkAccAgribank($this->request->data['Bill']['acc_agri']);
    				if ($accAgri !== true) {
    					$this->Bill->validationErrors['acc_agri'][] = $accAgri;
    				}
    			}
    		}
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
    function proccessConfirm($key, $controler, $action) {
    	$flag = $this->Session->read($key . '_ADD_FROM');
    	$data = $this->Session->read($key . '_ADD');
    	
    	if (!isset($data) || $data == "" || empty($data) || $flag != 1) {
    		$this->redirect(array('controller'=>'users', 'action'=>'menu'));
    	}
    	if ($this->request->is('post')) {
    		$this->Session->write($key . '_ADD_FROM', 2);
    		if ($this->request->data['btn_regist']) {
    			if(isset($data['Bill']['money_sl']) && $data['Bill']['money_sl'] != "" && $data['Bill']['money_sl'] != 0) {
    				$data['Bill']['money'] = $this->dataMoneySL[$data['Bill']['money_sl']];
    			}
    			if(isset($data['Bill']['money_card']) && $data['Bill']['money_card'] != "" && $data['Bill']['money_card'] != 0) {
    				$data['Bill']['money'] = $data['Bill']['money_card'];
    			}
    			if (isset($data['Bill']['phone'])) {
    				$idPhone = $data['Bill']['phone'];
    				$data['Bill']['phone'] = $this->dataPhone[$data['Bill']['phone']];
    			}
    			if (isset($data['Bill']['receiver'])) {
    				$data['Bill']['receiver'] = $this->dataReceiver[$data['Bill']['receiver']];
    			}
    			$category = Configure::read('category');
    			$data['Bill']['category'] = $category[$this->request->params['action']];
    			$this->Session->delete($key . '_ADD');
    			
    			$this->Bill->save($data);
    			$checkCard = $this->checkViewErrorFinish($data['Bill'], $key);
    			// Update User
    			if (isset($data['Bill']['money'])) {
    				$this->User->id = $this->Auth->user("id");
    				$dataUser = $this->User->getUserLogin($this->User->id);
    				//$checkCard = $this->actionCard($data['Bill'], $key);
    				if ($checkCard != 0) {
    					$newMoney = $dataUser['User']['money'] + $data['Bill']['money'];
    				} else {
    					$newMoney = $dataUser['User']['money'] - $data['Bill']['money'];
    				}
    				$this->User->save(array('User' => array('money' => $newMoney)));
    			}
    			if ($checkCard == 2) {// Xử lý cho trường hợp nạp tiền vào điện thoại
    				$this->Phone->id = $idPhone;
    				$dataPhoneDB = $this->Phone->find("first", array(
    						'conditions' =>  array("id" => $idPhone)
    				));
    				$newMoney = $dataPhoneDB['Phone']['money'] + $data['Bill']['money'];
    				$this->Phone->save(array('Phone' => array('money' => $newMoney)));
    			}
    			$this->redirect(array('action' => 'finish'));
    		} else {
    			$this->redirect(array('controller' => $controler, 'action' => $action));
    		}
    	}
    	$this->set("data", $data);
    }
    function checkAccAgribank($data) {
    	$head = '2000';
    	$pos = strpos($data, $head);
    	if (!isset($data) || empty($data)) {
    		return "Bạn chưa nhập tài khoản";
    	}
    	if (($pos != 0) || (strlen($data) != 13)) {
    		return "Bạn phải nhập tài khoản của Agribank";
    	}
    	return true;
    }
    function checkViewErrorFinish($data, $key) {
    	$msg = "Giao dịch thành công";
    	$action = $this->request->params['action'];
    	if ($action == 'transfersConfirm') {
    		$msg = "Giao dịch thành công, số tiền tài khoản còn lại ";
    	} elseif ($action == 'telecommunicationFeesConfirm') {
    		//$msg = "Bạn đã nạp thẻ thành công vào tài khoản Ngân Hàng ";
    		$msg = "Giao dịch thành công, số tiền tài khoản còn lại ";
    		if (isset($data['telecommunication_fees']) && $data['telecommunication_fees'] == 3) {
    			$msg = "Bạn đã nạp thẻ thành công vào tài khoản Ngân Hàng ";
    			$this->Session->write($key . '_MSG', $msg);
    			return 1;
    		}
    	} elseif ($action == 'mobileConfirm') {
    		$msg = "Giao dịch thành công, số tiền tài khoản còn lại ";
    		$this->Session->write($key . '_MSG', $msg);
    		return 2;
    	}
    	$this->Session->write($key . '_MSG', $msg);
    	return 0;
    }
    function actionCard($data, $key) {
    	$action = $this->request->params['action'];
    	if (isset($data['telecommunication_fees']) && $data['telecommunication_fees'] == 3) {
    		return true;
    	}
    	return false;
    }
}