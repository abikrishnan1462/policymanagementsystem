<?php  
include( 'dbconnection.php'); 
    
    $pid = $_GET['id'];
    $uid = $_GET['uid'];
    $today = date("Y-m-d");
    $res1=mysqli_query($bd, "select * from policyclient where status='Claimed' and policynumber='$pid' and clientid='$uid'"); 
    $count=mysqli_num_rows($res1); 
    //  echo $res1;
    if($count!=0) 
    { 
        echo "<script>alert('Payment Claimed for the policy');</script>"; 
        header( 'location:ownedpolicy1.php'); 
    }
    else 
    { 
        $query="update policyclient set status='Claimed',claimeddate='$today' where policynumber='$pid' and clientid='$uid'"; 
        $result=mysqli_query($bd,$query); 
        if($result)
         {
            header( 'location:ownedpolicy1.php'); 
         } 
    } 
 
?>