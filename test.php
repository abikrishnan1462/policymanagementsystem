<?php  
include( 'dbconnection.php'); 
if(isset($_POST[ 'continue'])) 
{ 
    $name=$_POST[ 'name']; 
    $email=$_POST[ 'email'];
    $contact=$_POST[ 'phone']; 
    $password=$_POST[ 'pwd'];
    $today = date("d/m/Y");
    $res1=mysql_query( "select * from user where email='$email'"); 
    $count=mysql_num_rows($res1); 
    if($count!=0) 
    { 
        echo "<script>alert('You Have Already Registered Please Login..');</script>"; 
    }
    else 
    { 
        $query="insert into user values('','$name','$contact','$email','$password')"; 
        $result=mysql_query($query); 
        if($result)
         {
            header( 'location:test.php'); 
         } 
    } 
} ?>

<html>
<head></head>
<body>
    <form method="post" action="test.php">
        <label for="name" class="blocklabel">
							Name*
						</label>
						<p>
							<input name="txtname" class="input_bg" type="text" id="name"/>
						</p>
						<label for="email" class="blocklabel">
							E-Mail*
						</label>
						<p>
							<input name="txtemail" class="input_bg" type="text" id="email" />
						</p>
						<label for="Phone" class="blocklabel">
							Phone
						</label>
						<p>
							<input name="txtphone" class="input_bg" type="text" id="phone"/>
						</p>
                        <input type="submit" name="continue" value="Submit" />
    </form>
</body>
</html>