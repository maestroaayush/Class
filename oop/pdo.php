<?php 
	/*
		
		- PDO
		=> PHP data Object 
			- Prepare statement
			- Value Binding 
			- SQL Injection Prevention 
			
		- Exception Handling
		- Error Logging 

	*/

	/*$conn = mysqli_connect();

	$conn = odbc_pconnect(dsn, user, password);

	$conn = sqlite_open(filename);
	*/

	// $email = $_POST['eamil'];

	// ' OR 1=1;

	/*$sql = "SELECT * FROM users WHERE email =  ";
	echo $sql;*/
	// SELECT * FROM users WHERE email = '' OR 1=1; ''


	/*



		a. Connect and select DB
		b. Write sql 
		c. Convert SQL into statement
			d.(optional) Bind value if necessary
		e. Execute Statement
		f. (Optional) Fetch data

	*/ 


try{

	$conn = new PDO("mysql:host=localhost;dbname=db_login;", "admin", "sandesh123");

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$id = 1;

	$sql = "SELECT * FROM users WHERE id = :id ";
	$stmt = $conn->prepare($sql);

	$stmt->bindValue(":id", $id, PDO::PARAM_INT);

	$stmt->execute();

	$data = $stmt->fetchAll(PDO::FETCH_OBJ);

	if($data){
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	} else {
		throw new Exception("No data in database.");
	}

	// other sateme

} catch(PDOException $e){
	// echo "Error: ". $e->getMessage();
	$msg = $e->getMessage();
	/*
		0 	=> PHP System Log
		1	=> The message will be sent to email, destination -> receiver email, header -> email header
		3	=> Message will be stored in the destination
		4	=> SAPI Logger

	*/
	error_log($msg, 3, "error.log");
} catch(Exception $e){
	// echo "Error: ". $e->getMessage();
	$msg = $e->getMessage();
	error_log($msg, 3, "error.log");
}
