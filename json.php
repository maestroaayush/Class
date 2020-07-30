<?php 
	$user = array(
		"Sandesh Bhattarai",
		"Kathmandu",
		"trainer.sandesh@broadwayinfosys.edu.np",
		"+977 9802111635"
	);

	$json_str = json_encode($user);



	$user = array(
		'name' => "Sandesh Bhattarai",
		'address' => "Kathmandu",
		'email' => "trainer.sandesh@broadwayinfosys.edu.np",
		'phone' => "+977 9802111635"
	);

	$json_str = json_encode($user);


	$user = array(
			array(
				"Sandesh Bhattarai",
				"Kathmandu",
				"trainer.sandesh@broadwayinfosys.edu.np",
				"+977 9802111635"
			),
			array(
				"Sandesh Bhattarai",
				"Kathmandu",
				"trainer.sandesh@broadwayinfosys.edu.np",
				"+977 9802111635"
			)

	);

	$json_str = json_encode($user);


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
			)
	);
	$json_str = json_encode($user);

	$user = array(
			'first' => array(
				'name' => "Sandesh Bhattarai",
				'address' => "Kathmandu",
				'email' => "trainer.sandesh@broadwayinfosys.edu.np",
				'phone' => "+977 9802111635"
			),
			'second' => array(
				'name' => "Sandesh Bhattarai",
				'address' => "Kathmandu",
				'email' => "trainer.sandesh@broadwayinfosys.edu.np",
				'phone' => "+977 9802111635"
			)
	);
	$json_str = json_encode($user);

	// $serialize = serialize($user);

	echo $json_str;