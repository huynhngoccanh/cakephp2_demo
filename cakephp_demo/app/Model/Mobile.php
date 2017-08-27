<?php
class Mobile extends AppModel{
	public $useTable = 'mobile';
	/**
	 * __construct
	 * - Set ini object
	 */
	public function Construct () {
	}
	/**
	 * getMobile()
	 * Lấy danh sách mobile
	 * @return unknown
	 */
	function getMobile() {
		$data = $this->find("all");
		for($i = 0; $i < count($data); $i++) {
			foreach ($data[$i] as $k => $v) {
				$result[$v['id']] = $v['name'];
			}
		}
		return $result;
	}
}