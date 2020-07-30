<?php
ob_start();	// output Buffer
session_start();
 // header already send on line no. 1-24
	/*echo "<pre>";
	print_r($_FILES);

	print_r($_POST);
	echo "</pre>";
		*/

 		/*2mb 


		error in file


 		c://xampp/php/php.ini

		size

		type


		name
*/


	$allowed = array("jpg", "jpeg", 'png', 'gif', 'bmp');
	$path = "uploads/".$_POST['dir_name'];

	if(!is_dir($path)){
		mkdir($path, 0777, true);
	}

	if(isset($_FILES['image']) && !empty($_FILES['image'])){
		
		// File contain error or not
		if($_FILES['image']['error'] == 0){
	
			if($_FILES['image']['size'] <= 5000000){
				$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

				if(in_array(strtolower($ext), $allowed)){

					// 20200715091901
					// Image-20200715091902.ext
					$name = "Image-".date("YmdHis").rand(0, 999).".".$ext;

					
					$success = move_uploaded_file($_FILES['image']['tmp_name'], $path."/".$name);		// bool , true, false
					if($success){
						?>
						<img src="<?php echo $path.'/'.$name?>" alt="">
						<?php
					} else {
						$_SESSION['error'] = "File could not be uploaded at this moment.";
						@header("location: file-form.php");
						exit;	
					}

				} else {
					$_SESSION['error'] = "File format not supported.";
					@header("location: file-form.php");
					exit;
				}	
			} else {
				// FIle size error
				$_SESSION['error'] = "File size is greater than 5 mb.";
				@header("location: file-form.php");
				exit;
			}
		} else {
			$_SESSION['error'] = "File has some error.";
			// file has error 
			@header("location: file-form.php");
			exit;
		}
	} else {
		// echo "Upload file First.";

		$_SESSION['error'] = "Upload File First.";
		@header("location: file-form.php");
		exit;
	}


ob_flush();
// file submit => tmp 	random_name => move desired location