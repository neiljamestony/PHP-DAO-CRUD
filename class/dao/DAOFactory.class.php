<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	/**
	 * @return SmurfTblDAO
	 */
	public static function getSmurfTblDAO(){
		return new SmurfTblMySqlExtDAO();
	}


}
?>