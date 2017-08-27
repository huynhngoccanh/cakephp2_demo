<?php
class Money extends AppModel{
	public $useTable = 'money';
	/**
	 * __construct
	 * - Set ini object
	 */
	public function Construct () {
	}
	/**
	 * getMoney()
	 * Lấy danh sách tiền
	 * @return unknown
	 */
	function getMoney() {
		$data = $this->find("all");
		for($i = 0; $i < count($data); $i++) {
			foreach ($data[$i] as $k => $v) {
				$result[$v['id']] = $v['money'];
			}
		}
		return $result;
	}
}