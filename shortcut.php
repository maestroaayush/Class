<?php 
	/*echo "<pre>";
	print_r($_FILES);
	echo "</pre>";*/

	if(isset($_FILES['image']) && !empty($_FILES['image'])){
		// allowed extensions for upload
		$allowed = array("jpg", "jpeg", 'png', 'gif', 'bmp');

		// creates directory if not exists
		$path = "uploads/".$_POST['dir_name'];
		if(!is_dir($path)){
			mkdir($path, 0777, true);
		}

		$files = $_FILES['image'];


		// for the length of loop, counting no. of files uploaded
		$no_of_files = count($files['name']); // counts the no. of name elements

		// 
		$error = 0;	// assumed value, whether file uploads contain any error or not

		// for loop to upload files individually
		for($i=0; $i < $no_of_files; $i++){
			// Uploader code


			// File contain error or not
		if($files['error'][$i] == 0){
	
			if($files['size'][$i] <= 5000000){
				$ext = pathinfo($files['name'][$i], PATHINFO_EXTENSION);

				if(in_array(strtolower($ext), $allowed)){

					// 20200715091901
					// Image-20200715091902.ext
					$name = "Image-".date("YmdHis").rand(0, 999).".".$ext;

					
					$success = move_uploaded_file($files['tmp_name'][$i], $path."/".$name);		// bool , true, false
					if($success){
						?>
						<img src="<?php echo $path.'/'.$name?>" alt="">
						<?php
					} else {
						echo "Error while uploading. </br>";
					}

				} else {
					echo "unsupported format. <br>";
				}	
			} else {
				// FIle size error
				echo "File size large.<br>";
			}
		} else {
			// file has error 
			echo "File has error. <br>";
		}


	} else {
		@header("location: multiple-file.php");
		exit;
	}