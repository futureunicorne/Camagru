<?php
	
	include "database.php";
	try 
	{
		$conn = new PDO("$DB_DNS", $DB_USER, $DB_PASSWORD);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $sql = "CREATE DATABASE shot_pic";
	    // use exec() because no results are returned
	    $conn->exec($sql);
	    echo "Database created successfully";
	}
	catch(PDOException $e)
	{
	 //   echo $sql . "<br>" . $e->getMessage();
	}
	$conn = null;
?>

<?php
	include "database.php";
	try {
	    $conn = new PDO("$DB_DNS;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $sql = "CREATE TABLE user (
	    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	    user VARCHAR(30) NOT NULL,
	    password VARCHAR(30) NOT NULL,
	    email VARCHAR(50),
	    reg_date TIMESTAMP
	    )";
	    $conn->exec($sql);
	    echo "Table user  created successfully";
	    }
	catch(PDOException $e)
		    {
	    echo $sql . "<br>" . $e->getMessage();
	    }
	$conn = null;
?>

<?php
	include "database.php";
	try {
	    $conn = new PDO("$DB_DNS;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $sql = "CREATE TABLE image (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		name VARCHAR(25) NOT NULL,
		img_url VARCHAR(500) NOT NULL,
		reg_date TIMESTAMP
		)";
	    $conn->exec($sql);
	    echo "Table image  created successfully";
	    }
	catch(PDOException $e)
	    {
	    echo $sql . "<br>" . $e->getMessage();
	    }
	$conn = null;
?>

<?php
	include "database.php"; 
	try {
	    $conn = new PDO("$DB_DNS;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $sql = "INSERT INTO user (user, password, email)
	    	VALUES ('Charles', '42', 'charles@gmail.com')";
	    $conn->exec($sql);
	     $sql = "INSERT INTO user (user, password, email)
	    	VALUES ('Hamza', '42', 'elhadi-hamza@hotmail.fr')";
	    $conn->exec($sql);
	    echo "New record created successfully";
	    }
	catch(PDOException $e)
	    {
	    echo $sql . "<br>" . $e->getMessage();
	    }

	$conn = null;
?>

<?php
	include "database.php"; 
	try {
	    $conn = new PDO("$DB_DNS;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $sql = "INSERT INTO image (name, img_url)
	    	VALUES ('chien', 'http://www.toutoupourlechien.com/wp-content/uploads/2016/01/Race-Chien-Beagle-Harrier.jpg')";
	    $conn->exec($sql);
	    echo "New record created successfully";
	    }
	catch(PDOException $e)
	    {
	    echo $sql . "<br>" . $e->getMessage();
	    }

	$conn = null;
?>
