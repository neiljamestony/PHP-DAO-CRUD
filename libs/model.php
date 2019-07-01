<?php
	
	class Model {
		function __construct(){
			Session::init();

			require 'include_dao.php';
		}

		function setData($obj, $array){
			foreach ($obj as $var => $each){
				if (isset($array[$var])){
					$obj->$var = $this->removeComma($array[$var]);
				}
			}
			return $obj;
		}

		function removeComma($string){
			$pattern = '/^\(/';

			$matches = array();

			preg_match($pattern, $string, $matches);

			if (substr($string, 0, 1) == '('){
				$string = strstr($string, array('(' => '', ')' => ''));
				$string = '-' .$string;
			}

			$string = str_replace(',', '', $string);
			return $string;
		}
	}
?>