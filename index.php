<?php
	include_once('classes/Sql.php');
	//include_once('classes/Student.php');
	include_once('classes/Inheritance.php');
	/*
	 * '$student = new Student' object ang tawag sa $student, gagawa ka ng blueprint ni Student class para magamit mo si Student Class sa pmamagitan ng 'new Student()'
	 * '('kevin', 'Monteza')' ayan ung value ng mga parameters na ipapasa mo sa class, automatic si __constructor, ayan ung kkunin niang value
	 * '$student->getFullName()' gamit ung object, iaaccess mo ung methods na getFullName() sa pamamagitan ng '->'
	 */

	// Student Class Test
	/*$student = new Student('Kevin', 'Monteza');
	echo $student->getFullName();
	
	//Sql Class Test
	$sql = new Sql;*/

	//Inheritance Class Test
	$student = new Student;
	$students = $student->getStudent();
	while ($row = mysqli_fetch_array($students)) {
		echo $row['first_name'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>OOP Exercise</title>
</head>
<body>
</body>
</html>