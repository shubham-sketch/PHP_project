<?php 
	if(isset($_FILES['image'])){
		
		$file_name = $_FILES['image']['name'];
		$file_size = $_FILES['image']['size'];
		$file_tmp = $_FILES['image']['tmp_name'];
		$file_type = $_FILES['image']['type'];
		$uploadFlag=true;
		
		if ($file_size>30000){
		echo "File size is more than 30KB" ;
		$uploadFlag=false;
		}	
		
		else if(file_exists("upload-images/".$file_name)){
			echo "File already exists - Failed to upload" ;
		}
		
		else if(move_uploaded_file($file_tmp,"uploads/".$file_name)){
			echo "File successfully uploaded !" ;
		}

		else{
			echo "Could not upload file !" ;
			
		}
		echo "<br>File name is ", $file_name;    
	}
?>

<!DOCTYPE html> 	
<html>
	<body>

	<form action="" method="POST" enctype="multipart/form-data">
	Select image to upload:
	<input type="file" name="image" > <br><br>
	<input type="submit">
	</form>

	</body>
</html>