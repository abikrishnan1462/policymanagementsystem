<?php
session_start();
    include('others/function/config2.php');

    $userName=$_POST['txtusername']; 
    $passWord=$_POST['txtpassword'];
    $query = "SELECT uid,email FROM user WHERE username='$userName' and  passWord='$passWord'";
    $res = mysqli_query($conn, $query);
    $rows = mysqli_num_rows($res);
    if ($rows==1) 
    {
        while($row = mysqli_fetch_array($res))
        {
            $type = $row['email'];
            $userid = $row['uid'];
            $_SESSION['id'] = $userid;
            $_SESSION['type'] = $type;
                                            
        }
        
        header("Location: index.php");
    }
    else 
    {
        ?>
		    <script>
		    alert('Invalid Credentails');
            window.location.href='login.php';
            </script>
		    <?php
      
      // TODO - replace message with redirection to login page
      //  header("Location: securedpage.php");
    }
    ?>