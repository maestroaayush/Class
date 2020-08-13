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
			// loop body
			// check if file have error or not
			if($files['error'][$i] == 0){
				// does not have error

				if($files['size'][$i] <= 5000000){
					// if file size is less than 5MB

					// returns file extension
					$ext = pathinfo($files['name'][$i], PATHINFO_EXTENSION);

					if(in_array(strtolower($ext), $allowed)){
						// valid extension

						$file_name = "Image-".date("YmdHis").rand(0, 9999).".".$ext;

						$success = move_uploaded_file($files['tmp_name'][$i], $path."/".$file_name);
						if($success){
							// File upload success
							?>
							<img src="<?php echo $path.'/'.$file_name?>" style="max-width: 150px; margin: 10px;" alt="">
							<?php
						} else {
							// error in file
							echo "File <em>".$files['name'][$i]."</em> could not be uploaded with unknown reason
							. <br>";
						}

					} else {
						// format not supported
						echo "File <em>".$files['name'][$i]."</em> is unsupported. <br>";
					}
				} else {
					// file size is greater than 5mb
					echo "File <em>".$files['name'][$i]."</em> size is greater than 5mb. <br>";

				}
			} else {
				// file do have error
				echo "File <em>".$files['name'][$i]."</em> has some error. <br>";
			}

		}	
	} else {
		@header('location: multiple-file.php');
		exit;
	}