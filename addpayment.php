<?php session_start();$cid = $_GET['id'];$cid1 = $_GET['uid'];?>
<?php  
include( 'dbconnection.php'); 
if(isset($_POST[ 'continue'])) 
{ 
    $uid = $_GET['id'];
    $name=$_POST['txtcname']; 
    $policy=$_POST['txtpname'];
    $month=$_POST['txtmonth']; 
    $cno=$_POST['txtcno'];
    $cvv=$_POST['txtcvv'];
    $pay=$_POST['txtpay'];
    $card = $cno.$cvv;
    $today = date("YYYY-MM-dd");
    $res1=mysqli_query($bd, "select * from payment where month='$month' and clientid='$uid' and policyno='$policy'"); 
    $count=mysqli_num_rows($res1); 
    if($count!=0) 
    { 
        echo "<script>alert('Payment Already exist for the same month');</script>"; 
    }
    else 
    { 
        $query="insert into user payment('','$cid','$policy','$name','$month','$today','$uid','$pay','$card')"; 
        $result=mysqli_query($bd,$query); 
        if($result)
         {
            header( 'location:ownedpolicy1.php'); 
         } 
    } 
} ?>

<?php $page='ten'; include( "view/header.php") ?>
<script type="text/javascript">
				
				

function validate()

{



	

		if(  /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/.test(form1.txtphone.value))

		{
            
		}

		else

		{

		 alert("Invalid Contact number")  

		document.form1.txtphone.focus();

    	return (false);

		}

		

		

	}

	 
			
			</script>
	<div class="page_title">
		<div class="container">
			<div class="title">
				<h1>
					Add Payment
				</h1>
			</div>
			<div class="pagenation">
				&nbsp;
				<a href="index.php">Home</a>
				<i>
					/
				</i>
				Payment
			</div>
		</div>
	</div>
	<!-- end page title -->
	<div class="clearfix">
	</div>
	<!-- Contant=======================================-->
	<div class="container">
		<div class="content_fullwidth">
			<form  id="form1" name='form1' method="post"  action="addpayment1.php" >
            <?php 
                                            require_once 'others/function/config2.php';
                                            //echo $cid;
                                            $query = mysqli_query($conn, "SELECT A.policynumber AS policynumber, A.clientname AS clientname,A.date AS date,B.policyname AS policyname,B.value AS value,B.month AS month,B.tenure AS tenure FROM policyclient A, policy B where A.policyid=B.policyid and A.policynumber='$cid'");
                                            while($data = mysqli_fetch_array($query)){
                                            extract($data);
                                            
                                            ?>  
				<div class="one_half">
					<h3>
						<i>
							Details
						</i>
					</h3>
					<fieldset>
                        <label for="Phone" class="blocklabel">
							Name
						</label>
						<p>
							<input name="txtcname" class="input_bg" type="text" id="phone" value="<?php echo $clientname; ?>"/>
						</p>
						<label for="name" class="blocklabel">
							Policy Name*
						</label>
						<p>
							<input name="txtpname" class="input_bg" type="text" id="name" value="<?php echo $policyname; ?>"/>
						</p>
						<label for="email" class="blocklabel">
							tenure*
						</label>
						<p>
							<input name="txttenure" class="input_bg" type="text" id="email" value="<?php echo $tenure; ?>" />
						</p>
						
                        <label for="Phone" class="blocklabel">
							Monthly Payment
						</label>
                        <p>
							<input name="txtpay" class="input_bg" type="text" id="phone" value="<?php echo $month?>"/>
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
							Payment for the month
						</label>
						<p>
                            <select name="txtmonth" class="input_bg">
                                <option>January</option>
                                <option>February</option>
                                <option>March</option>
                                <option>April</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>August</option>
                                <option>September</option>
                                <option>October</option>
                                <option>November</option>
                                <option>December</option>
                            </select>
						</p>
                        <label for="Phone" class="blocklabel">
							Card No
						</label>
                        <p>
							<input name="txtcno" class="input_bg" type="text" id="phone" required/>
						</p>
						<label for="name" class="blocklabel">
							CVV
						</label>
						<p>
							<input name="txtcvv" class="input_bg" type="text" id="pwd" required maxlength="3" />
						</p>
						<p>
							<input name="txtpid" class="input_bg" type="text" id="pwd" required value="<?php echo $cid; ?>" />
                            <input name="txtuid" class="input_bg" type="text" id="pwd" required value="<?php echo $cid1; ?>" />
						</p>
					</fieldset>
                    <br />  
                    <input name="continue" type="submit" value="SUBMIT" class="comment_submit" id="send" style="float: right;"/>
                    <?php } ?>  
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