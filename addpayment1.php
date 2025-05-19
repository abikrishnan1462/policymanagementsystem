<?php  
include( 'dbconnection.php'); 
    
    $name=$_POST['txtcname']; 
    $policy=$_POST['txtpname'];
    $month=$_POST['txtmonth']; 
    $cno=$_POST['txtcno'];
    $cvv=$_POST['txtcvv'];
    $pay=$_POST['txtpay'];    
    $pid=$_POST['txtpid'];
    $uid=$_POST['txtuid'];    
    $card = $cno.$cvv;
    $today = date("Y-m-d");
    $res1=mysqli_query($bd, "select * from payment where month='$month' and clientid='$uid' and policyno='$pid'"); 
    $count=mysqli_num_rows($res1); 
    
    if($count!=0) 
    { 
        echo "<script>alert('Payment Already exist for the same month');</script>"; 
        header( 'location:ownedpolicy1.php'); 
    }
    else 
    { 
        $query="insert into payment values('','$pid','$policy','$name','$month','$today','$uid','$pay','$card')"; 
        $result=mysqli_query($bd,$query); 
        if($result)
         {
            header( 'location:ownedpolicy1.php'); 
         } 
    } 
 
?>