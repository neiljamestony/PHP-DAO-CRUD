<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2019-07-01 07:52
 */
interface SmurfTblDAO{

	/**
	 * Get Domain object by primary key
	 *
	 * @param String $id primary key
	 * @Return SmurfTbl 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param smurfTbl primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param SmurfTbl smurfTbl
 	 */
	public function insert($smurfTbl);
	
	/**
 	 * Update record in table
 	 *
 	 * @param SmurfTbl smurfTbl
 	 */
	public function update($smurfTbl);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByFirstName($value);

	public function queryByLastName($value);

	public function queryByCreatedAt($value);

	public function queryByDeletedAt($value);

	public function queryByUpdatedAt($value);

	public function queryByStatus($value);


	public function deleteByFirstName($value);

	public function deleteByLastName($value);

	public function deleteByCreatedAt($value);

	public function deleteByDeletedAt($value);

	public function deleteByUpdatedAt($value);

	public function deleteByStatus($value);


}
?>