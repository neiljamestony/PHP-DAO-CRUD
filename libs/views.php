<?php
	
	class Views {
		function __construct(){
			
		}

		public function render($link, $hasHeader = false){
			if ($hasHeader == true){
				require $link;
			}
			else {
				require 'views/custom_assets.php';
				require $link;
			}
		}
	}
?>