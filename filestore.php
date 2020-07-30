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
	$success = file_put_contents($file_name, $json_str); 	// no of bytes written, int, boolean false,
	if($success){
		echo "Data stored in file.";
	} else {
		echo "Error while storing data.";
	}

	// file read operation
	$data = file_get_contents($file_name);		// Json String

	// json to string convert
	$json_str_to_array = json_decode($data, true);	// convert json strin into array


	echo "<pre>";
	print_r($json_str_to_array);
	echo "</pre>";