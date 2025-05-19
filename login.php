<?php session_start();?>
<?php $page='ten'; include( "view/header.php") ?>
	<div class="page_title">
		<div class="container">
			<div class="title">
				<h1>
					Login
				</h1>
			</div>
			<div class="pagenation">
				&nbsp;
				<a href="index.php">Home</a>
				<i>
					/
				</i>
				Login
			</div>
		</div>
	</div>
	<!-- end page title -->
	<div class="clearfix">
	</div>
	<!-- Contant=======================================-->
	<div class="container">
		<div class="content_fullwidth">
			<form action="actionlogin.php" method="post">
				<div class="one_half">
					<h3>
						<i>
							New User?
						</i>
					</h3>
					<fieldset>
					<p>Please click here to <a href="register.php">Register</a></p>
					</fieldset>
				</div>
				<div class="one_half last">
					<h3>
						<i>
							Login
						</i>
					</h3>
					<fieldset>
						<label for="name" class="blocklabel">
							Username/Email
						</label>
						<p>
							<input name="txtusername" class="input_bg" type="text" id="txtusername"/>
						</p>
						<label for="email" class="blocklabel">
							Password
						</label>
						<p>
							<input name="txtpassword" class="input_bg" type="password" id="txtpassword" />
						</p>
						
					</fieldset>
                    <br />  
                    <input name="Send" type="submit" value="SUBMIT" class="comment_submit" id="send" style="float: right;"/>
				</div>
			</form>
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