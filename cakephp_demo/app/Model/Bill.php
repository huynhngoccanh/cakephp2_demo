<?php
class Bill extends AppModel{
	//public $validate = array();
	public $useTable    = 'Bill';
	/**
	 * __construct
	 * - Set ini object
	 */
	public function Construct () {
		
	}
	
	function checkSBox($check, $select) {
		$val = '';
		foreach ($check as $key => $value){
			$val= $value;
			break;
		}
		if ($val== 0 || !array_key_exists($val, $select)) {
			return false;
		}
		return true;
	}
	function checkPin($pin, $userId) {
		$user = ClassRegistry::init('Users');
		if(isset($userId)){
			$where = array(
					"id" => $userId,
					"pin" => $pin,
			);
		}
		$user->find("first", array(
				'conditions' => $where
		));
		$count = $user->getNumRows();
		if($count!=0){
			return true;
		}else{
			return false;
		}
	}
	function checkMoney($check, $userId) {
		$val = '';
		$user = ClassRegistry::init('Users');
		if (isset($this->data['Bill']['telecommunication_fees']) && $this->data['Bill']['telecommunication_fees'] == 3) {
			return true;
		}
		foreach ($check as $key => $value){
			$val= $value;
			break;
		}		
		if(isset($userId)){
			$where = array(
					"id" => $userId,
					"money <" => $val,
			);
		}
		$user->find("first", array(
				'conditions' => $where
		));
		$count = $user->getNumRows();
		if($count != 0){
			return false;
		}else{
			return true;
		}
	}
	function checkTagCode ($check, $select) {
		$val = '';
		foreach ($check as $key => $value){
			$len = strlen($value);			
			$val= substr($value, $len - 1, 1);
			break;
		}
		if ($val== 0 || !array_key_exists($val, $select)) {
			return false;
		}
		return true;
	}
	function lenTagCode ($check, $len){
		$val = '';
		foreach ($check as $key => $value){
			$lenVal = strlen($value);
			break;
		}
		if ($lenVal <> $len) {
			return false;
		}
		return true;
	}
}