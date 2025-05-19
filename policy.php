<?php session_start();?>
<?php
	include("dbconnection.php");
	//include("Admin/Functions.php");
	   $displayImages = null;
       $getval = $_GET["val"];
	   $sqlSelProd = mysqli_query($bd,"select * from policy where policytype=$getval") or die(mysql_error());
		while($getProdInfo = mysqli_fetch_array($sqlSelProd)){
			$id = $getProdInfo["policyid"];
            $policyname = $getProdInfo["policyname"];
			$value = $getProdInfo["value"];
			$company = $getProdInfo["company"];
			$tenure = $getProdInfo["tenure"];
            $age = $getProdInfo["age"];
			
			$displayImages .= '<div class="blog_post">
				<div class="blog_postcontent" style="background-color: #f0dfb6; padding:15px">	
                    <table style="width:100%">
                        <tr>
                            <td rowspan="2">
                                <a><strong style="font-size:25px">&#8377;'.$value.'</strong><br><br/><i style="font-size:25px"> Tenure: '.$tenure.'</i></a>
                            </td>
                            <td valign="top">
                                <p style="font-size:25px">
        							Policy Name: '.$policyname.' <br/> <br/>
                                    Company : '.$company.'<br/> <br/>
                                    Age limit : '.$age.'
						        </p>                        
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <a style="font-size:20px; flost:right" href="viewpo.php?ID='.$id.'">View</a>
                            </td>
                        </tr>
                    </table>
				</div>
			</div>
			<div class="clearfix divider_line3">
			</div>';
		
	}
	
?>
<?php $page='three'; include( "view/header.php") ?>
	<div class="page_title">
		<div class="container" >
			<div class="title">
				<h1>
					<?php echo($getval = $_GET["val"]) ?>
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
		<div class="content_left" >
            <?php echo $displayImages; ?>
		</div>
		<!-- end content left side area -->
		<!-- right sidebar starts -->
		<div class="right_sidebar">
			<div class="sidebar_widget">
				<div class="sidebar_title">
					<h3>
						Services
						<i>
							We provide
						</i>
					</h3>
				</div>
				<ul class="arrows_list1">
					<li>
						<i class="fa fa-angle-right">
						</i>
						 Optimally utilize the information technology infrastructure
					</li>
					<li>
						<i class="fa fa-angle-right">
						</i>
						Provide excellent customer service 
					</li>
					<li>
						<i class="fa fa-angle-right">
						</i>
						Health care-placement in health care services
					</li>
					<li>
						<i class="fa fa-angle-right">
						</i>
						 Effectively manage our reinsurance operations
					</li>
					<li>
						<i class="fa fa-angle-right">
						</i>
						Have effective risk management systems 
					</li>
					<li>
						<i class="fa fa-angle-right">
						</i>
						To evolve as a vibrant & dynamic leading non-life insurer
					</li>
					<li>
						<i class="fa fa-angle-right">
						</i>
						Act as a financially sound corporate entity with high business ethics
					</li>
				</ul>
			</div>
			<!-- end section -->
			<div class="clearfix mar_top4">
			</div>
			<!-- end section -->
		</div>
	</div>
	<!-- end content area -->
	<?php include( "view/footer.php") ?>