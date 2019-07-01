<?php
	
	class Bootstrap {
		function __construct(){
			Session::init();
			$link = isset($_GET['url']) ? $_GET['url'] : null;

			$arrayLink = explode('/', trim($link, '/'));

			$class = $arrayLink[0] != '' ? $arrayLink[0] : 'index';

			$function = isset($arrayLink[1]) ? $arrayLink[1] : 'index';
			$file = isset($arrayLink[2]) ? $arrayLink[2] : 'index';
			$path = 'controllers/' .$class. '.php';

			if (!Session::getSession('user')) {
				$class = 'home';
				$path = 'controllers/' .$class. '.php';
			}

			if ($class == 'ajax') {
				$this->ajaxFunction($function, $file);
			}

			if (file_exists($path)) {
				require $path;

				if (class_exists($class)) {
					$mainClass = new $class();

					$mainClass->loadModel($class);

					if (method_exists($class, $function)) {
						if (isset($arrayLink[2])) {
							$mainClass->{$function}($arrayLink[2]);
						}
						else {
							$mainClass->{$function}('');
						}
					}
					else {
						$this->error();
					}
				}
				else {
					$this->error();
				}
			}
			else {
				$this->error();
			}
		}

		function ajaxFunction($new_class, $new_function){
			$class = $new_class;
			$function = $new_function;
			$path = 'controllers/' .strtolower($class). '.php';

			if (file_exists($path)){
				require $path;

				if (class_exists($class)){
					$mainClass = new $class();

					$mainClass->loadModel($class);

					if (method_exists($class, $function)){

						if (isset($arrayLink[3])){
							$mainClass->{$function}($arrayLink[3]);
						}
						else {
							$mainClass->{$function}('');
						}
					}
					else {
						$this->error();
					}
				}
				else {
					$this->error();
				}
			}
			else {
				$this->error();
			}
			exit;
		}

		function error(){
			$views = new Views();
			$views->msg = 'An error occur!</br>Error 404: Page not Found!';
			$views->render('views/error/index.php', true);
			exit;
		}
	}
?>