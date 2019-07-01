<?php
/**
 * Class that operate on table 'smurf_tbl'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2019-07-01 07:52
 */
class SmurfTblMySqlDAO implements SmurfTblDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return SmurfTblMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM smurf_tbl WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM smurf_tbl';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM smurf_tbl ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param smurfTbl primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM smurf_tbl WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param SmurfTblMySql smurfTbl
 	 */
	public function insert($smurfTbl){
		$sql = 'INSERT INTO smurf_tbl (first_name, last_name, created_at, deleted_at, updated_at, status) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($smurfTbl->firstName);
		$sqlQuery->set($smurfTbl->lastName);
		$sqlQuery->set($smurfTbl->createdAt);
		$sqlQuery->set($smurfTbl->deletedAt);
		$sqlQuery->set($smurfTbl->updatedAt);
		$sqlQuery->set($smurfTbl->status);

		$id = $this->executeInsert($sqlQuery);	
		$smurfTbl->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param SmurfTblMySql smurfTbl
 	 */
	public function update($smurfTbl){
		$sql = 'UPDATE smurf_tbl SET first_name = ?, last_name = ?, created_at = ?, deleted_at = ?, updated_at = ?, status = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($smurfTbl->firstName);
		$sqlQuery->set($smurfTbl->lastName);
		$sqlQuery->set($smurfTbl->createdAt);
		$sqlQuery->set($smurfTbl->deletedAt);
		$sqlQuery->set($smurfTbl->updatedAt);
		$sqlQuery->set($smurfTbl->status);

		$sqlQuery->setNumber($smurfTbl->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM smurf_tbl';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByFirstName($value){
		$sql = 'SELECT * FROM smurf_tbl WHERE first_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLastName($value){
		$sql = 'SELECT * FROM smurf_tbl WHERE last_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreatedAt($value){
		$sql = 'SELECT * FROM smurf_tbl WHERE created_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDeletedAt($value){
		$sql = 'SELECT * FROM smurf_tbl WHERE deleted_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUpdatedAt($value){
		$sql = 'SELECT * FROM smurf_tbl WHERE updated_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStatus($value){
		$sql = 'SELECT * FROM smurf_tbl WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByFirstName($value){
		$sql = 'DELETE FROM smurf_tbl WHERE first_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLastName($value){
		$sql = 'DELETE FROM smurf_tbl WHERE last_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreatedAt($value){
		$sql = 'DELETE FROM smurf_tbl WHERE created_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDeletedAt($value){
		$sql = 'DELETE FROM smurf_tbl WHERE deleted_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUpdatedAt($value){
		$sql = 'DELETE FROM smurf_tbl WHERE updated_at = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStatus($value){
		$sql = 'DELETE FROM smurf_tbl WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return SmurfTblMySql 
	 */
	protected function readRow($row){
		$smurfTbl = new SmurfTbl();
		
		$smurfTbl->id = $row['id'];
		$smurfTbl->firstName = $row['first_name'];
		$smurfTbl->lastName = $row['last_name'];
		$smurfTbl->createdAt = $row['created_at'];
		$smurfTbl->deletedAt = $row['deleted_at'];
		$smurfTbl->updatedAt = $row['updated_at'];
		$smurfTbl->status = $row['status'];

		return $smurfTbl;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return SmurfTblMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>