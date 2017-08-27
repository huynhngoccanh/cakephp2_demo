<?php
class Game extends AppModel{
	public $useTable = 'game';
	/**
	 * __construct
	 * - Set ini object
	 */
	public function Construct () {
	}
	/**
	 * getGame()
	 * Lấy danh sách game
	 * @return unknown
	 */
	function getGame() {
		$data = $this->find("all");
		for($i = 0; $i < count($data); $i++) {
			foreach ($data[$i] as $k => $v) {
				$result[$v['id']] = $v['name'];
			}
		}
		return $result;
	}
}