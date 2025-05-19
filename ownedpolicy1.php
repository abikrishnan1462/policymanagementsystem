<?php session_start();?>
	<?php $page='four'; include( "view/header.php") ?>
		<div class="page_title">
			<div class="container">
				<div class="title">
					<h1>
						Owned Policy
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
            <?php
                                require_once 'others/function/config2.php';
                                $cid = $_SESSION["id"];
                                $result = mysqli_query($conn,"SELECT A.policynumber AS policynumber, A.clientname AS clientname,A.date AS date,B.policyname AS policyname,A.status AS status FROM policyclient A, policy B where A.policyid=B.policyid and A.addid='$cid'");
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
                                                <th align='left'>
    												Status
    											</th>
    											<th align='left'>
    												Action
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
                                        echo "<td>" . $row['status'] . "</td>";
                                        echo "<td><a href='payment.php?ID=" . $row['policynumber'] . "'>History</a></td>";
                                        echo "</tr>";
                                        }
                                echo "</table>";
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