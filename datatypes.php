<?php 
	/*
		
		a. Scalar 
			string, integer, float, boolean

		b. Composite
			array, object,

		c. Special
			null


 iterable, callback, resource



 	String => Text,				=> "", ''
 	Number => integer, float, 	=> whole => integer, Decimal => float

 	Boolean => true, false 		=> true, false => 1, , 0
 	Null => null, 				=> null, "", ''
 	Array => array(), [],  		=> array(), []
 	Object => object   			=> 

	*/

/*	Array => 


			"key_1" => 'Value',
			'key_2' => number,
			'key_3' => ''value_1


			a. Indexive 
			b. Associative


			a. Single Dimensional
			b. Multi Dimensional

*/

/*$name = "User One";
$email = "userone@gmail.com";
$phone = 9632105478;
$address = "Kathmandu";
*/

// Indexive
$user = array(
	'name' => array("User","One"), 					// name
	'phone' => 9632105478,					// phone
	'email' => "userone@gmail.com", 		// email
	'address' => "Kathmandu"  				// address
);

echo $user['name'][0];		// User One
echo $user['name'][1];		// User One

$user = array(
	'address' => "Kathmandu",  				// address
	'name' => "User One", 					// name
	'phone' => 9632105478,					// phone
	'email' => "userone@gmail.com" 			// email
);
echo $user['name'];		// User One

// $lst_index = $size - 1
// $user = [];



$users = array(
		array(
			'id'	=> 1,
			'name' => "User One",
			'email' =>"userone@gmail.com",
			'phone' => "+977 9630215487",
			"address" => "Kathmandu, Nepal"
		),
		array(
			'id'	=> 2,
			'name' => "User Two",
			'email' =>"usertwo@gmail.com",
			'phone' => "+977 9874563210",
			"address" => "Bhaktapur, Nepal"
		),
		array(
			'id'	=> 3,
			'name' => "User Three",
			'email' =>"userthree@gmail.com",
			'phone' => "+977 9863524107",
			"address" => "Lalitpur, Nepal"
		)
);

echo "<pre>";
print_r($users);
// var_dump($users);
echo "</pre>";

echo $users[2]['name'];