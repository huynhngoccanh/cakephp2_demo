<?php
App::uses('Controller', 'Controller');
App::uses('FunctionCommon', 'Lib');
App::import('Html',"html");
App::import('Form',"form");
App::import('Session',"session");

class AppController extends Controller {
    public $components = array(
        'Auth'=>array(
            'userModel' => 'User',//sử dụng model User
            'fields' => array('username' => 'username', 'password' => 'password'),//sử dụng 2 field "username","password" để so sánh xem có hợp lệ không 
            'loginAction' => array('admin'=>false, 'controller'=>'users', 'action'=>'login'),//Khi chưa đăng nhập sẽ tự chuyển tới
            'loginRedirect' => array('admin'=>true, 'controller'=>'users', 'action'=>'index'),//Khi đăng nhập thành công
            'authError' => 'Không thể truy cập',//báo lỗi
            'authorize' => array('Controller'),
        )
        //ngay chổ admin có 2 giá trị true và false,
    );
    function beforeFilter(){
        Security::setHash("md5");//mã hóa password là md5
        $this->set('current_user', $this->Auth->user());//sau khi đăng nhập thành công biến current_user là thông tin user đăng nhập
        $this->controlSession();
        
        /*
         * Set variable
         */        
        $this->set('controller', strtolower($this->request->params['controller']));
        $this->set('action', strtolower($this->request->params['action']));
        //print_r(Configure::read('typeAccount'));
        /* $functionCommon= new FunctionCommon();
        $functionCommon->createArrCombox(); */
        
        
    }
    function isAuthorized(){
        return true;
   }
   function controlSession() {
   		$action = $this->request->params['action'];
   		$controller= $this->request->params['controller'];
   		
   		// Xóa session của màn hình đăng ký account 
   		if ($action != "add" && $action != "edit" && $action != "confirm_add") {
   			$this->Session->delete('USERS_ADD');
   			$this->Session->delete('USERS_ADD_BACK');
   			$this->Session->delete('USERS_ADD_FROM');
   		} 
   		// Xóa session của màn hình transfers 
   		if (($controller != "bill" && $action != "index") && $action != "transfersConfirm") {
   			$this->Session->delete('TRANSFERS_ADD_FROM');
   			$this->Session->delete('TRANSFERS_ADD');
   			$this->Session->delete('TRANSFERS_MSG');
   		}
   		if (($controller != "bill" && $action != "telecommunicationFees") && $action != "telecommunicationFeesConfirm") {
   			$this->Session->delete('TELECOMMUNICATION_FEES_ADD_FROM');
   			$this->Session->delete('TELECOMMUNICATION_FEES_ADD');
   			$this->Session->delete('TELECOMMUNICATION_FEES_MSG');
   		}
   		if (($controller != "bill" && $action != "paymentService") && $action != "paymentServiceConfirm") {
   			$this->Session->delete('PAYMENT_SERVICE_ADD_FROM');
   			$this->Session->delete('PAYMENT_SERVICE_ADD');
   			$this->Session->delete('PAYMENT_SERVICE_MSG');
   		}
   		if (($controller != "bill" && $action != "reserveAccount") && $action != "reserveAccountConfirm") {
   			$this->Session->delete('RESERVE_ACCOUNT_ADD_FROM');
   			$this->Session->delete('RESERVE_ACCOUNT_ADD');
   			$this->Session->delete('RESERVE_ACCOUNT_MSG');
   		}
   		if (($controller != "bill" && $action != "account") && $action != "accountConfirm") {
   			$this->Session->delete('ACCOUNT_ADD_FROM');
   			$this->Session->delete('ACCOUNT_ADD');
   			$this->Session->delete('ACCOUNT_MSG');
   		}
   		if (($controller != "bill" && $action != "mobile") && $action != "mobileConfirm") {
   			$this->Session->delete('MOBILE_ADD_FROM');
   			$this->Session->delete('MOBILE_ADD');
   			$this->Session->delete('MOBILE_MSG');
   		}
   }
}