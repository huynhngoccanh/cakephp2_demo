<?php
class UsersController extends AppController{    
    var $name = "Users";
    var $helpers = array ('Html','Form');
    var $components = array("Session");
    
    function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->allow('add', 'confirm_add', 'finish_add', 'logout');
    }
    function index(){
       $data = $this->User->find("all"); 
       $this->set("data",$data);
    }
    function login(){
    	if($this->request->is('post')){
    		if($this->Auth->login()){
    			if ($this->Auth->user('level') == 1){
    				$this->redirect("/admin/users/index");
    			}else{
    				$this->redirect("/users/menu");
    			}
    		} else{
    			$this->Session->setFlash('<font style="color: red">Invalid username or password, try again</font>','default',array('class'=>"alert alert-success"));
    		}
    	}
    }
    function logout(){
    	$this->redirect($this->Auth->logout());
    }
    
    /**
     * add()
     * Đăng ký account
     */
    public function add() {
    	if ($this->request->is('post') &&  $this->request->data['confirm']) {   		
    		$this->User->create();
    		$this->User->set($this->request->data); // truyen gia tri qua model
    		if ($this->User->validates()) {// validate
    			$this->Session->setFlash(__('The user has been created'));
    			$this->Session->write('USERS_ADD', $this->request->data);
    			$this->Session->write('USERS_ADD_FROM', 1);
    			$this->redirect(array('action' => 'confirm_add'));
    		} else {
    			$this->Session->setFlash(__('The user could not be created. Please, try again.'));
    		}
    	} else {
    		$USERS_ADD_BACK = $this->Session->read('USERS_ADD_BACK');
    		if ($USERS_ADD_BACK) {
    			$this->request->data = $this->Session->read('USERS_ADD');
    		} else {
    			$this->Session->delete('USERS_ADD');
    		}
    	}
    }
    /**
     * edit()
     * Đăng ký account
     */
    public function edit() {
    	if ($this->request->data['confirm']) {
    		$this->User->create();
    		$this->User->set($this->request->data); // truyen gia tri qua model
    		$validator = $this->User->validator();
    		unset($validator['username']['rule3']);
    		if ($this->User->validates()) {// validate
    			$this->Session->setFlash(__('The user has been created'));
    			$this->Session->write('USERS_ADD', $this->request->data);
    			$this->Session->write('USERS_ADD_FROM', 2);
    			$this->redirect(array('action' => 'confirm_add'));
    		} else {
    			$this->Session->setFlash(__('The user could not be created. Please, try again.'));
    		}
    	} else {
    		$USERS_ADD_BACK = $this->Session->read('USERS_ADD_BACK');    		
    		if ($USERS_ADD_BACK) {
    			$this->request->data = $this->Session->read('USERS_ADD');
    		} else {
    			$this->request->data['User'] = $this->Auth->user();
    		} 
    		
    	}
    }
    
    /**
     * confirm_add()
     * Xác nhận account
     */
    public function confirm_add() {
    	$flag = $this->Session->read('USERS_ADD_FROM');
    	$data = $this->Session->read('USERS_ADD');
    	 if (!isset($data) || $data == "" || empty($data)) {
    		$this->redirect(array('action' => 'login'));
    	}
    	if ($this->request->is('post')) {
    		if ($this->request->data['regist']) {
    			if ($flag == 2) {
    				$this->User->id = $this->Auth->user("id");
    			}
    			$this->User->save($data);
	    		$this->redirect(array('action' => 'finish_add'));
    		} else {
    			$this->Session->write('USERS_ADD_BACK', 1);
    			
    			if ($flag == 1) {
    				$this->redirect(array('action' => 'add'));
    			} elseif ($flag == 2) {
    				$this->redirect(array('action' => 'edit'));
    			}
    		}
    	}
    	$this->set("data",$data);
    }
    
    /**
     * finish_add()
     * Hoàn thành đăng kí acc
     */
    public function finish_add() {
    	$this->Session->delete('USERS_ADD');
    	$this->Session->delete('USERS_ADD_BACK');
    	$this->Session->delete('USERS_ADD_FROM');
    }
    /**
     * 
     */
    public function menu(){
    	
    }
}