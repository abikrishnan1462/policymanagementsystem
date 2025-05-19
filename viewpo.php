<?php session_start();?>
<?php 
    include( 'dbconnection.php'); 
    $code=$_GET['ID'];
    if(isset($_POST[ 'submit'])) 
    { 
        if(!isset($_SESSION[ 'email']) ||(!isset($_SESSION[ 'pwd']))) 
        { 
            header( 'Location:login.php'); 
        } 
        else 
        { 
            $query="select * from jobs where id='$code'";
	        $result=mysql_query($query); 
            while($row=mysql_fetch_array($result)) 
            { 
                
                $title=$row['title']; 
                $company=$row['company'];
            } 
            $userid = $_SESSION[ 'email'];
            $query1="select * from user where email='$userid'";
	        $result1=mysql_query($query1); 
            while($row=mysql_fetch_array($result1)) 
            { 
                
                $name=$row['name'];
            }
                $today=date('d/m/Y');
                $queryadd="insert into apply values('','$name','$userid','$today','$title','$company')";
	            $rsadd=mysql_query($queryadd);
             if($rsadd)
              { 
                header('location:thanks.php?id=Submitted Successfully'); 
              } 
         } 
    } 
?>
<?php $page='four'; include( "view/header.php") ?>
	<div class="page_title">
		<div class="container">
			<div class="title">
				<h1>
					Current Policy
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
                    
                       <form name="form1" action="others/function/insert.php?action=pobuy" method="post"  enctype="multipart/form-data">
                       
										<?php 
                                            require_once 'others/function/config2.php'; 
                                            $cid = (int)$_GET['ID'];
                                            //echo $cid;
                                            $query = mysqli_query($conn, "SELECT * from policy where policyid=$cid");
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
                            						<label for="name" class="blocklabel">
                            							PolicyId *
                            						</label>
                            						<p>
                            							<input type="text" readonly="" class="input_bg" id="focusedinput" required name="txtid"  value="<?php echo $policyid; ?>" >
                            						</p>
                            						<label for="email" class="blocklabel">
                            							Policy Name
                            						</label>
                            						<p>
                            							<input type="text" class="input_bg" id="focusedinput" required name="txtname"  value="<?php echo $policyname; ?>">
                            						</p>
                            						<label for="Phone" class="blocklabel">
                            							Company Name
                            						</label>
                            						<p>
                            							<input type="text" class="input_bg" id="focusedinput" required name="txtcmpname"  value="<?php echo $company; ?>">
                            						</p>
                                                    <label for="Phone" class="blocklabel">
                            							Value
                            						</label>
                                                    <p><input type="text" class="input_bg" id="focusedinput" required name="txtvalue" value="<?php echo $value; ?>"></p>
                            					    <label for="Phone" class="blocklabel">
                            							Tenure
                            						</label>
                                                    <p><input type="text" class="input_bg" id="focusedinput" required name="txttenure" value="<?php echo $tenure; ?>"></p>
                                                </fieldset>
                                				</div>
                                				<div class="one_half last">
                                					<h3>
                                						<i>
                                							&nbsp;
                                						</i>
                                					</h3>
                                					<fieldset>
                                						<label for="name" class="blocklabel">
                                							Monthly Payment
                                						</label>
                                						<p>
                                							<input type="text" class="input_bg" id="focusedinput" required name="txtmon" value="<?php echo $month; ?>">
                                						</p>
                                						<label for="name" class="blocklabel">
                                							Description
                                						</label>
                                						<p>
                                							<textarea class="input_bg" name="txtdesc"> <?php echo $description; ?></textarea>
                                						</p>
                                					</fieldset>
                                                    <br />  
                                                    <input name="continue" type="submit" value="Purchase Policy" class="comment_submit" id="send" style="float: right;" />	
                                                    
                                				</div>
                                        
                                        <?php } ?>  
                                        </form>
					</div></div>
	<!-- end content area -->
	<?php include( "view/footer.php") ?>