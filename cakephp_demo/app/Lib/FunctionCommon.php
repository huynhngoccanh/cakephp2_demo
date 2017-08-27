<?php
/**
 * FunctionCommon
 * - Use contain function common
 * @author RUNSYSTEM
 * @since 1.1 - 2014/10/17
 * $Id: $
 */
class FunctionCommon{
	/**
	 * __construct
	 * - Set ini object
	 */
	public function __construct() {
	}

	/**
	* writeLogs
	* - write Logs for debug
	* @param String $message
	* @return void
	*/
	public static function writeLogs($text){
		App::uses('Folder', 'Utility');
		App::uses('File', 'Utility');

		$path = LOGS . date('Ymd') . "_logs_sql.log";
		$pathShort = LOGS . "logs_short.log";
		$message = '[' . date('Ymd H:i:s') . ']    ' . $text;

		// Write all logs
		$file = new File($path, true);
		if (!$file->exists()){
			$file->create();
		}
		$file->append("\r\n".var_export($message, true));
		$file->close();

		// Write logs sort
		$fileShort = new File($pathShort, true);
		if (!$fileShort->exists()){
			$fileShort->create();
		}
		if ($fileShort->size() > 200000) {
			$fileShort->delete();
		}
		$fileShort->append("\r\n".var_export($message, true));
		$fileShort->close();
	}
	
}