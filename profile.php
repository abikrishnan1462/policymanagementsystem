<?php session_start();?>
<?php $page='ten'; include( "view/header.php") ?>
<script type="text/javascript">
				
				

function validate()

{

	if (document.form1.name.value=="")

	{
		alert("Name Is Required!");
		document.form1.name.focus();
		return false;
	}

	if(document.form1.email.value=="")

	{ 
	    alert("Email Is Required");
    	document.form1.email.focus();    
    	return false;
	}

    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form1.email.value))  

      {  
    
      }  

   else

   {

	    alert("Invalid email address!")  

		document.form1.email.focus();

    	return (false);

 	}

	



		

		

		if(document.form1.phone.value=="")

		{ alert("Contact No Is Required");

		document.form1.phone.focus();

		return false;

		}

	

		if(  /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/.test(form1.phone.value))

		{

		}

		else

		{

		 alert("Invalid Contact number")  

		document.form1.phone.focus();

    	return (false);

		}

		

					if(document.form1.pwd.value=="")

					{

						alert("Password Is Required");

						document.form1.pwd.focus();

						return false;

						}

		

		

	}

	 
			
			</script>
	<div class="page_title">
		<div class="container">
			<div class="title">
				<h1>
					Register
				</h1>
			</div>
			<div class="pagenation">
				&nbsp;
				<a href="index.php">Home</a>
				<i>
					/
				</i>
				Register
			</div>
		</div>
	</div>
	<!-- end page title -->
	<div class="clearfix">
	</div>
	<!-- Contant=======================================-->
	<div class="container">
		<div class="content_fullwidth">
			<form class="form-horizontal" action="others/function/insert.php?action=edituser" method="post"  enctype="multipart/form-data">
										<?php 
                                            require_once 'others/function/config2.php'; 
                                            $cid = $_SESSION["id"];
                                            //echo $cid;
                                            $query = mysqli_query($conn, "SELECT * from user where uid='$cid'");
                                            while($data = mysqli_fetch_array($query)){
                                            extract($data);
                                            
                                            ?>  
                                            <div class="form-group">
											<label for="focusedinput" class="col-sm-2 control-label">
												User ID
											</label>
											<div class="col-sm-8">
												<input type="text"  class="input_bg" id="focusedinput" required name="txtid" readonly="" value="<?php echo $uid; ?>">
											</div>
										</div>
                                        <div class="form-group">
											<label for="focusedinput" class="col-sm-2 control-label">
												<br><br>Name
											</label>
											<div class="col-sm-8">
												<input type="text"  class="input_bg" id="focusedinput" required name="txtname" value="<?php echo $name; ?>">
											</div>
										</div>
                                        <div class="form-group">
											<label for="disabledinput" class="col-sm-2 control-label">
											<br><br>Email
											</label>
											<div class="col-sm-8">
												<input type="text"  class="input_bg" id="focusedinput" required name="txtemail" value="<?php echo $email; ?>">
											</div>
										</div>
                                        <div class="form-group">
											<label for="focusedinput" class="col-sm-2 control-label">
												<br><br>Phone
											</label>
											<div class="col-sm-8">
												<input type="text"  class="input_bg" id="focusedinput" required name="txtphone" value="<?php echo $phone; ?>">
											</div>
										</div>
                                        <div class="form-group">
											<label for="disabledinput" class="col-sm-2 control-label">
												<br><br>Address
											</label>
											<div class="col-sm-8">
												<input type="text"  class="input_bg" id="focusedinput" required name="txtadd" value="<?php echo $address; ?>">
											</div>
										</div>
                                        <div class="form-group">
											<label for="focusedinput" class="col-sm-2 control-label">
												<br><br>Pincode
											</label>
											<div class="col-sm-8">
												<input type="text"  class="input_bg" id="focusedinput" required name="txtpin" value="<?php echo $pin; ?>">
											</div>
										</div>
                                        <div class="form-group">
											<label for="disabledinput" class="col-sm-2 control-label">
												<br><br>Username
											</label>
											<div class="col-sm-8">
												<input type="text"  class="input_bg" id="focusedinput" required name="txtuser" value="<?php echo $username; ?>">
											</div>
										</div>
                                        <div class="form-group">
											<label for="focusedinput" class="col-sm-2 control-label">
												<br><br>Password
											</label>
											<div class="col-sm-8">
												<input type="password"  class="input_bg" id="focusedinput" required name="txtpassword" value="<?php echo $passWord; ?>">
											</div>
										</div>
                                        <br><br>
										<div class="bs-example" data-example-id="form-validation-states-with-icons">
											
												<div class="panel-footer">
													<div class="row">
														<div class="col-sm-8 col-sm-offset-2">
                                                            <input type="submit" value="Update" class="btn-success btn" />					
														</div>
													</div>
												</div>
											
										</div>
                                        <?php } ?>  
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