<?php 
	/*echo "<pre>";
	print_r($_POST);
	echo "</pre>";
	*/
	$file_name = "register.json";

	if(isset($_POST) && !empty($_POST)){

		// file_store Process

		$form_data = $_POST;

		$to_write = array();


		// file exists or not
		if(file_exists($file_name)){			// true or false
			// file exists

			// previous data on file
			$old_data = file_get_contents($file_name);	// json data

			$old_data = json_decode($old_data, true);	// json to array

			if(count($old_data) <= 0){
				// empty file
				$to_write[] =$form_data;		// file exists but empty file
			} else {
				// data exists
				$old_data[] = $form_data;		// add new Data to previous content of file
				$to_write = $old_data;
			}
		} else {
			/// file not exists

			// array_push($to_write, $form_data);
			$to_write[] =$form_data;			// array Push
		}

		/*echo "<pre>";
		print_r($form_data);
		print_r($to_write);
		echo "</pre>";
		exit;*/


		$string_json = json_encode($to_write);


		$success = file_put_contents($file_name, $string_json);
		if($success){
			header("location: list.php");
			exit;
		} else {
			header("location: register.php");
			exit;
		}
	} else {
		header("location: register.php");
		exit;
	}