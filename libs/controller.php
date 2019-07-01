<?php
	
	class Controller {
		function __construct(){
			$this->view = new Views();
		}

		public function loadModel($name){
			$path = 'model/' .$name. '_model.php';

			if(file_exists($path)){
				require $path;
				$modelName = $name .'_model';
				$this->model = new $modelName();
			}
		}

		static function objToArray($obj){
			$array = array();

			foreach($obj as $var => $val){
				$array[$var] = $val;
			}
			return $array;
		}

		static function error(){
			$views = new Views();
			$views->msg = 'An error occur!</br>Page not Found!';
			$views->render('views/error/index.php');
			exit;
		}
	}
?>