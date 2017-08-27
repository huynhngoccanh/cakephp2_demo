<?php
class Phone extends AppModel{
	public $validate = array();
	public $useTable = 'Phone';
	public $useId = '';
	/**
	 * __construct
	 * - Set ini object
	 */
	public function Construct () {
	}
	/**
	 * getPhone()
	 * Lấy danh sách tiền
	 * @return unknown
	 */
	function getPhone() {
		$data = $this->find("all");
		for($i = 0; $i < count($data); $i++) {
			foreach ($data[$i] as $k => $v) {
				$result[$v['id']] = $v['phone'];
			}
		}
		return $result;
	}
}