<?php

$conn = "";

try {
	$servername = "127.0.0.1";
	$dbname = "myDB";
	$username = "root";
	$password = "";

	$conn = new PDO(
		"mysql:host=$servername; dbname=myDB",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}



function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"]== "POST") {
	
	$adminname = test_input($_POST["adminname"]);
	$password = test_input($_POST["password"]);
	$stmt = $conn->prepare("SELECT * FROM adminlogin");
	$stmt->execute();
	$users = $stmt->fetchAll();
	
	foreach($users as $user) {
		
		if(($user['adminname'] == $adminname) &&
			($user['password'] == $password)) {
				header("Location: /admin");
		}
		else {
            header("Location: /login");
			die();
            
		}
	}
}

?>
