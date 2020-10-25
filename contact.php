<?php 
include_once("settings.php");
include_once("header.php");
 ?>
 <?php
/*$to = "narender.rathore@deconglobalsolutions.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@deconglobalsolutions.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);*/
?>


<?php
 $nameErr=$emailErr=$enqErr=$phoneErr="";
 
 if(isset($_POST['work_with_us']) and empty($_POST['email'])){
		$emailErr="Email is missing";
	}
	else{
		$email_sanitize=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
	}
	if(isset($_POST['work_with_us']) and !empty($email_sanitize)){
		if(!filter_var($email_sanitize,FILTER_VALIDATE_EMAIL)){
		$emailErr="Email is invalid";
		}
		if(filter_var($email_sanitize,FILTER_VALIDATE_EMAIL)){
		$email=filter_var($email_sanitize,FILTER_VALIDATE_EMAIL);
		
		}
	}
	if(isset($_POST['work_with_us']) and empty($_POST['name'])){
		$nameErr="Name is missing";
	}
	else{
		$name=$_POST['name'];
	}

	if(isset($_POST['work_with_us']) and empty($_POST['phone'])){
		$phoneErr="Phone number  is missing";
	}
	else{
		$phone=$_POST['phone'];
	}

	if(isset($_POST['work_with_us']) and empty($_POST['enquiry'])){
		$enqErr="Enquiry is missing";
	}
	else{
		$enquiry=$_POST['enquiry'];
	}
	

	

 
 if((isset($_POST['work_with_us'])) && !empty($enquiry) && !empty($email) && !empty($name) && !empty($phone)){
 	
	$from=$email;
	$to="narender.rathore@deconglobalsolutions.com";//info.vidyutdhara@gmail.com
	$msg="Dear Admin - Vidyutdhara</br><br>
	
		<b>Name					: </b> 	$name<br>
		<b>Email				: </b> 	$email<br>
		<b>Phone				: </b> 	$phone<br>
		<b>Enquiry 				: </b> 	$enquiry<br>
		
		Kind Regards Vidyutdhara Team";
		
		$subject="Carrer With Vidyutdhara -Vidyutdhara Team";
		$mail_done=mail($to,$subject,$msg,$from);
		if($mail_done){
		$message="your message has been sent successfully,We will contact you shortly.";
		 $company=$email=$name=$phone="";
		}else{
		    $message="Not Delieverd";
		}
 
 }
 
 ?>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center white-text text-lighten-2">We’d love to hear from you</h1>
        <div class="row center">
          <h5 class="header col s12 light">Our team is ready to answer all your questions.</h5>
        </div>
        <br><br>
        <div class="row center">
            <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=info.vidyutdhara@gmail.com" target="_blank" id="download-button" class="btn-large waves-effect waves-light blue lighten-1">Email Us</a>
          </div>
      </div>
    </div>
    <div class="parallax"><img src="<?=BRAND_IMAGE_PATH;?>contactbg.jpg" alt="Unsplashed background img 1"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contact Us</h4>
          <div class="row">
            <div class="col s12 m6">
              <div class="icon-block">
                <h2 class="center blue-text"><i class="material-icons">email</i></h2>
                <h4 class="center">Email</h4>
    
                <p class="light"><h5>info.vidyutdhara@gmail.com</h5></p>
              </div>
            </div>
    
            <div class="col s12 m6">
              <div class="icon-block">
                <h2 class="center blue-text"><i class="material-icons">phone</i></h2>
                <h4 class="center">Phone</h4>
    
                <p class="light"><h5>+91 99996 06600</h5></p>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
<span class="error" style="margin-bottom:8px;" ><?php echo $message;?>
</span>
</div>
            <form class="form-horizontal" action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
			<div class="col s12 m6 offset-m3 center-align">
            <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
			<span class="error"><?php echo $nameErr;?></span>
			<input type="text" class="validate" name="name" id="name" value="<?=$name?>" placeholder="Name"    />
			</div>
			<div class="input-field col s12">
			    <i class="material-icons prefix">phone</i>
			<span class="error"><?php echo $phoneErr;?></span>
			<input type="text" class="validate" name="phone" id="phone" onkeypress="return AllowNumbersOnly(event);" maxlength="10" value="<?=$phone?>" placeholder="Phone Number" />
			</div>
			<div class="input-field col s12">
			    <i class="material-icons prefix">email</i>
			<span class="error"><?php echo $emailErr;?></span>
			<input type="text" class="validate" name="email" id="email" value="<?=$email?>" placeholder="E-mail ID"    />
			</div>
			</div>
		</div>
        <div class="row">
			<div class="input-field col s12 m6 offset-m3">
			<span class="error"><?php echo $enqErr;?></span>
			<textarea class="form-control" name="enquiry" id="enquiry"  placeholder="Enquiry "  /><?=$enquiry?></textarea>
			</div><br>
		</div>
		<div class="row">
			<div class="col-xs-12">
			<button class="btn btn-primary waves-effect waves-light blue lighten-1" name="work_with_us" type="submit">Submit</button>
			</div>
			</form>
        </div>
        </div>
      </div>

    </div>
  </div>
  
  <?php 
include_once("footer.php");
 ?>
 
  <script type="text/javascript">
function AllowNumbersOnly(e)
{
var unicode=e.charCode?e.charCode:e.keyCode;
if(unicode!=8&&unicode!=9){
	if(unicode<48||unicode>57){
		return false;
		}
		}
return true;
}
</script>