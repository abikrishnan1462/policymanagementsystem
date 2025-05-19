<?php session_start();?>
<?php $page='ten'; include( "view/header.php") ?>
	<div class="page_title">
		<div class="container">
			<div class="title">
				<h1>
					Refer Friend
				</h1>
			</div>
			<div class="pagenation">
				&nbsp;
				<a href="index.php">Home</a>
				<i>
					/
				</i>
				Refer
			</div>
		</div>
	</div>
	<!-- end page title -->
	<div class="clearfix">
	</div>
	<!-- Contant=======================================-->
	<div class="container">
		<div class="content_fullwidth">
        
			<center><h2>Thanks, <?php $getval = $_GET["id"]; echo $_GET["id"];?></h2></center>
		</div>
	</div>
	<!-- end content area -->
	<!--<div class="bottom_section">
	<div class="waves_graph2"></div>
	<div class="container">
	<div class="big_text2"><i>Best Small Business Hosting Services.</i> YOUR E-BUSINESS IS OUR JOB!</div>
	</div>
	<div class="clearfix mar_top3"></div>
	</div> -->
	<!-- end bottom section -->
	<?php include( "view/footer.php") ?>