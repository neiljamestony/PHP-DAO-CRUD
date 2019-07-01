<?php 
	
	class Session {
		static function init(){

			@session_start();

			$sessionTime = 60 * 60 * 12 * 100;

			if (isset($_SESSION['time'])) {

				$sessionTTL = time() - $_SESSION['time'];
				if ($sessionTTL > $sessionTime) {
					self::destroy();
				}
			}
			$_SESSION['time'] = time();
		}

		static function getSession($key){
			$key = $key;

			if(isset($_SESSION[$key])){
				return ($_SESSION[$key]);
			}
			else {
				return false;
			}
		}

		static function setSession($key, $value){
			self::init();

			$time = time();
			$_SESSION['time'] = $time;
			unset($_SESSION[$key]);
			$_SESSION[$key] = $value;
			ini_set('session.gc_maxlifetime', 1);
		}

		static function setObjSession($key, $obj){
			$returnArray = array();

			foreach($obj as $var => $val){
				$returnArray[$var] = $val;
			}
			self::setSession($key, $returnArray);
		}

		static function destroy(){
			session_destroy();
		}
	}
?>