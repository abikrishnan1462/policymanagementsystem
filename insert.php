<?php
include_once 'dbconnection.php';
if(isset($_POST['btn_upload']))
{   
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $exp = $_POST["exp"];
    $title = $_POST["title"];
    $jobskills = $_POST["jobskills"];
    $filevideo = rand(1000,10000000)."-".$_FILES['filev']['name'];
    $file_loc_video = $_FILES['filev']['tmp_name'];
	$file_size_video = $_FILES['filev']['size'];
	$file_type_video = $_FILES['filev']['type'];
	$folder_video="admin/upload/";
	$new_size1 = $file_size_video/1024;
	$new_file_name1 = strtolower($filevideo); 	
	$final_file_video=str_replace(' ','-',$new_file_name1);
    if(move_uploaded_file($file_loc_video,$folder_video.$final_file_video))
	{
        $sql="Insert into resume(name,phone,email,experience,skills,jobtitle,resume,status) Values('$name','$phone','$email','$exp','$jobskills','$title','$final_file_video','Uploaded')";
		//$sql="update media set video='$final_file_video' where id='1'";
		mysql_query($sql);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='thanks.php?id=Uploaded Successfully';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='thanks.php?fail';
        </script>
		<?php
	}
}
?>
