<?php
class Service extends AppModel{
	public $useTable = 'service';
	/**
	 * __construct
	 * - Set ini object
	 */
	public function Construct () {
	}
	/**
	 * getService()
	 * Lấy danh sách service
	 * @return unknown
	 */
	function getService() {
		$data = $this->find("all");
		for($i = 0; $i < count($data); $i++) {
			foreach ($data[$i] as $k => $v) {
				$result[$v['id']] = $v['name'];
			}
		}
		return $result;
	}
}