<?php
require_once 'Sql.php';
/*
 * Inheritance Example
 * Ginagamit ito kpag gusto mong gamitin ang iba pang mga classes in use of 'extends'
 */
class Student extends Sql{

	public function saveStudent(){

		// SQL Query here
		$sql = 'INSERT INTO student VALUES (null,"Kevin", "Monteza", 23)'; 

		// '$this->getConnection()' may access na tayo sa Sql class kya magagamit nnten si SQL sa Student class nten
		// '->query($sql);' eto mag ttrigger ng query to insert the data
		$result = $this->getConnection()->query($sql);

		if ($result) {
			return 'Save Successfully';
		}else{
			return $this->getConnection()->error;
		}
	}
}