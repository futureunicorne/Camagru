<?php
	include "database.php"; 


	if ($_POST["login"] !== NULL || $_POST["passwd"] !== NULL || $_POST["submit"] !== "OK" || $_POST["mail"] !== NULL)
	{
		$log = $_POST["login"];
		$pass = $_POST["passwd"];
		$mail = $_POST["mail"];
	}
	else
		echo ("ERROR\n");

	try {
	    $conn = new PDO("$DB_DNS;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $sql = "INSERT INTO user (user, password, email)
	    	VALUES ($log, $pass, $mail)";
	    $conn->exec($sql);
	    echo "New record created successfully";
	    }
	catch(PDOException $e)
	    {
	    echo $sql . "<br>" . $e->getMessage();
	    }

	$conn = null;
	header('Location: index.php');

?>
