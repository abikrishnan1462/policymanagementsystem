<?php session_start();?>
	<?php $cid = $_GET['ID']; $uid1=$_SESSION['id']; $page='four'; include( "view/header.php") ?>
		<div class="page_title">
			<div class="container">
				<div class="title">
					<h1>
						Payment
					</h1>
				</div>
				<div class="pagenation">
					&nbsp;
					<a href="index.php">Home</a>
					<i>
						/
					</i>
					Policy
				</div>
			</div>
		</div>
		<!-- end page title -->
		<div class="clearfix">
		</div>
		<div class="container">
			<div class="content_fullwidth">
                                
                                <h3>Payment History</h3>
                                <?php
                                require_once 'others/function/config2.php';
                                $cid1 = $_GET['ID'];
                                $result2 = mysqli_query($conn,"SELECT SUM(amt) AS amt1,amt,policyno,month,paydate FROM payment where policyno='$cid1' and clientid='$uid1'");
                                if(mysqli_num_rows($result2) > 0) 
                                {
                                echo "<table  style='width:100%; border:1px solid #484848' >
                                        <thead>
    										<tr class='warning' style='background-color:#484848;height:40px; color:white'>
    											<th>
    												Policy Number
    											</th>
                                                <th>
    												Tenure Month
    											</th>
                                                <th>
    												Date
    											</th>
    											
    										</tr>
    									</thead>";
                                
                                        while($row = mysqli_fetch_array($result2))
                                        {
                                        echo "<tr>";
                                        echo "<td>" . $row['policyno'] . "</td>";
                                        echo "<td>" . $row['month'] . "</td>";
                                        echo "<td>" . $row['paydate'] . "</td>";
                                        echo "</tr>";
                                        
                                echo "</table>";
                                echo "<h3> Total paid:" .  $row['amt1'] . "</h3>";
                                }
                                }
                                else
                                {
                                    echo $cid1;
                                    echo "<center>No Payement Received yet</center>";
                                }
                                
                               // mysqli_close($conn);
                                ?>
                                <br /><br />
                                <h3>Policy Details</h3>
            <?php
                                require_once 'others/function/config2.php';
                                
                                $result = mysqli_query($conn,"SELECT A.policynumber AS policynumber, A.clientname AS clientname,A.date AS date,B.policyname AS policyname,A.status AS status FROM policyclient A, policy B where A.policyid=B.policyid and A.policynumber='$cid'");
                                if(mysqli_num_rows($result) > 0) 
                                {
                                echo "<table style='width:100%; border:1px solid #484848' >
                                        <thead>
    										<tr class='warning' style='background-color:#484848;height:40px; color:white'>
    											<th align='left'>
    												Policy Number
    											</th>
    											<th align='left'>
    												Policy name
    											</th>
    											<th align='left'>
    												Client Name
    											</th>
                                                <th align='left'>
    												Date
    											</th>
    										</tr>
    									</thead>";
                                
                                        while($row = mysqli_fetch_array($result))
                                        {
                                        echo "<tr style='height:40px;'>";
                                        echo "<td>" . $row['policynumber'] . "</td>";
                                        echo "<td>" . $row['policyname'] . "</td>";
                                        echo "<td>" . $row['clientname'] . "</td>";
                                        echo "<td>" . $row['date'] . "</td>";
                                        echo "</tr>";
                                        
                                echo "</table>";
                                $st = $row['status'];
                                echo $st;
                                if($st=='Claimed')
                                {
                                    //echo $st;
                                    echo "adsd";
                                }
                                else
                                {
                                    echo "test";
                                    echo "<a href='addpayment.php?id=$cid&uid=$uid1'' style='float: right; font-size: 18px;'>Add Payment</a> ";
                                    echo "<a href='claim.php?id=$cid&uid=$uid1' style='float: right; font-size: 18px;'>Claim Payment</a> ";
                                }
                                }
                                }
                                else
                                {
                                    echo "<center>No Records</center>";
                                }
                                
                                mysqli_close($conn);
                                ?>
                                
			</div>
		</div>
		<!-- end content area -->
		<?php include( "view/footer.php") ?>