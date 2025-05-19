<?php session_start();?>
<?php  
include( 'dbconnection.php'); 
if(isset($_POST[ 'continue'])) 
{ 
    $name=$_POST[ 'name']; 
    $email=$_POST[ 'email'];
    $contact=$_POST[ 'phone']; 
    $password=$_POST[ 'pwd'];
    $nom=$_POST[ 'txtnname'];
    $today = date("d/m/Y");
    $res1=mysql_query( "select * from user where email='$email'"); 
    $count=mysql_num_rows($res1); 
    if($count!=0) 
    { 
        echo "<script>alert('You Have Already Registered Please Login..');</script>"; 
    }
    else 
    { 
        $query="insert into user values('','$name','$contact','$email','$password','$today','0',$nom)"; 
        $result=mysql_query($query); 
        if($result)
         {
            header( 'location:login.php'); 
         } 
    } 
} ?>

<?php $page='ten'; include( "view/header.php") ?>
<script type="text/javascript">
				
				

function validate()

{

	if (document.form1.txtname.value=="")

	{
		alert("Name Is Required!");
		document.form1.txtname.focus();
		return false;
	}

	if(document.form1.txtemail.value=="")

	{ 
	    alert("Email Is Required");
    	document.form1.txtemail.focus();    
    	return false;
	}

    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form1.email.value))  

      {  
    
      }  

   else

   {

	    alert("Invalid email address!")  

		document.form1.txtemail.focus();

    	return (false);

 	}

	



		

		

		if(document.form1.txtphone.value=="")

		{ alert("Contact No Is Required");

		document.form1.txtphone.focus();

		return false;

		}

        if(  /^\d{12}$/.test(form1.txtac.value))

		{

		}

		else

		{

    		 alert("Invalid Adhaar number")  
    
    		document.form1.txtac.focus();
    
        	return (false);

		}
        
        if(  /^\d{12}$/.test(form1.txtnac.value))

		{

		}

		else

		{

    		 alert("Invalid Nominee Adhaar number")  
    
    		document.form1.txtnac.focus();
    
        	return (false);

		}

		if(  /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/.test(form1.txtphone.value))

		{

		}

		else

		{

		 alert("Invalid Contact number")  

		document.form1.txtphone.focus();

    	return (false);

		}

		

					if(document.form1.txtpassword.value=="")

					{

						alert("Password Is Required");

						document.form1.txtpassword.focus();

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
			<form  id="form1" name='form1' method='post' onsubmit="return validate();" action='others/function/insert.php?action=adduser' >
				<div class="one_half">
					<h3>
						<i>
							Details
						</i>
					</h3>
					<fieldset>
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
                        <label for="Phone" class="blocklabel">
							Address
						</label>
                        <p>
							<input name="txtadd" class="input_bg" type="text" id="phone"/>
						</p>
                        <label for="Phone" class="blocklabel">
							Adhaar card No
						</label>
                        <p>
							<input name="txtac" class="input_bg" type="text" id="phone" required maxlength="12"/>
						</p>
					</fieldset>
				</div>
				<div class="one_half last">
					<h3>
						<i>
							&nbsp;
						</i>
					</h3>
					<fieldset>
                        <label for="Phone" class="blocklabel">
							Nominee Name/Surety
						</label>
						<p>
							<input name="txtnname" class="input_bg" type="text" id="phone"/>
						</p>
                        <label for="Phone" class="blocklabel">
							Nominee Phone
                            						</label>
						<p>
							<input name="txtnph" class="input_bg" type="text" id="phone"/>
						</p>
                        <label for="Phone" class="blocklabel">
							Nominee Adhaar card No
						</label>
                        <p>
							<input name="txtnac" class="input_bg" type="text" id="phone" required maxlength="12"/>
						</p>
                        <label for="Phone" class="blocklabel">
							Pin
						</label>
						<p>
							<input name="txtpin" class="input_bg" type="text" id="phone"/>
						</p>
                        <label for="Phone" class="blocklabel">
							Username
						</label>
                        <p>
							<input name="txtusername" class="input_bg" type="text" id="phone"/>
						</p>
						<label for="name" class="blocklabel">
							Password
						</label>
						<p>
							<input name="txtpassword" class="input_bg" type="password" id="pwd"/>
						</p>
						
					</fieldset>
                    <br />  
                    <input name="continue" type="submit" value="SUBMIT" class="comment_submit" id="send" style="float: right;"/>
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