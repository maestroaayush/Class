<?php 
	$user = array(
			array(
				'name' => "Sandesh Bhattarai",
				'address' => "Kathmandu",
				'email' => "trainer.sandesh@broadwayinfosys.edu.np",
				'phone' => "+977 9802111635"
			),
			array(
				'name' => "Sandesh Bhattarai",
				'address' => "Kathmandu",
				'email' => "trainer.sandesh@broadwayinfosys.edu.np",
				'phone' => "+977 9802111635"
			),
			array(
				'name' => "User New",
				'address' => "Bhaktapur",
				'email' => "usernew@gmail.com",
				'phone' => "+977 9802111635"
			)
	);
	// covert array to  json string
	$json_str = json_encode($user);


	// file store 
	$file_name = "user.json";

	// operation 
	// write 
	
	$fp = fopen($file_name, "w");		// mode => write, w, read, r, append, a
	$success = fwrite($fp, $json_str);				// no of bytes, null
	fclose($fp);

	// file_put_contents();





	if($success){
		echo "Data stored in file.";
	} else {
		echo "Error while storing data.";
	}

	// file read operation
	$fp = fopen($file_name, 'r');
	$size = filesize($file_name);
	$data = fread($fp, $size);
	fclose($fp);


	// json to string convert
	$json_str_to_array = json_decode($data, true);	// convert json strin into array


	echo "<pre>";
	print_r($json_str_to_array);
	echo "</pre>";