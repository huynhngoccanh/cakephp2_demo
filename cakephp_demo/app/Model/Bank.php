<?php
class Bank extends AppModel{
	public $useTable = 'bank';
	/**
	 * __construct
	 * - Set ini object
	 */
	public function Construct () {
	}
	/**
	 * getBank()
	 * Lấy danh sách ngân hàng
	 * @return unknown
	 */
	function getBank() {
		$data = $this->find("all"); 
		for($i = 0; $i < count($data); $i++) {
			foreach ($data[$i] as $k => $v) {
				$result[$v['id']] = $v['name_bank'];
			}
		}
		return $result;
	}
}