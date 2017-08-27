<?php
class Tivi extends AppModel{
	public $useTable = 'tivi';
	/**
	 * __construct
	 * - Set ini object
	 */
	public function Construct () {
	}
	/**
	 * getTivi()
	 * Lấy danh sách tivi
	 * @return unknown
	 */
	function getTivi() {
		$data = $this->find("all");
		for($i = 0; $i < count($data); $i++) {
			foreach ($data[$i] as $k => $v) {
				$result[$v['id']] = $v['channel'];
			}
		}
		return $result;
	}
}