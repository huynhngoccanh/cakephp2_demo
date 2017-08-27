<?php
class City extends AppModel{
	public $useTable = 'city';
	/**
	 * __construct
	 * - Set ini object
	 */
	public function Construct () {
	}
	/**
	 * getCity()
	 * Lấy danh sách thành phố
	 * @return unknown
	 */
	function getCity() {
		$data = $this->find("all");
		for($i = 0; $i < count($data); $i++) {
			foreach ($data[$i] as $k => $v) {
				$result[$v['id']] = $v['name'];
			}
		}
		return $result;
	}
}