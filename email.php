  <?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $email=$_POST['email'];
    $tel = $_POST['telephone'];
    $message = $_POST['message'];
 
//Load Composer's autoloader
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
    
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = "a748230631@gmail.com";                 // SMTP username
    $mail->Password = 'Shuaixiao123';                           // SMTP password
    $mail->SMTPSecure = 'tls';                     // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    $mail->CharSet="UTF-8";
    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('748230631@qq.com', 'jinhao');     // Add a recipient
      
    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Message From Website';
    $mail->Body    = " The customer email is : " . $email . "<br>" .
                     "The customer name is : " . $name . "<br>" .
                     "The Telephone number is : " . $tel . "<br>" .
                     "The customer feedback: " . $message;
    

    $mail->send();
?>
 


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Winsun cleaner</title>
	   <!-- Favicone Icon -->
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,700,800%7CLato:300,400,700" rel="stylesheet" type="text/css">
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="assets/css/ionicons.css" rel="stylesheet" type="text/css">
        <!--Light box-->
		<link href="assets/css/jquery.fancybox.css" rel="stylesheet" type="text/css">
        <!-- carousel -->
        <!-- PrettyPhoto Popup -->
		<link href="assets/css/prettyPhoto.css" rel="stylesheet" />
        <link href="assets/css/plugin/owl.carousel.css" rel="stylesheet" type="text/css">
		<!--Main Slider-->
		<link href="assets/css/settings.css" type="text/css" rel="stylesheet" media="screen">
		<link href="assets/css/layers.css" type="text/css" rel="stylesheet" media="screen">
		<link href="assets/css/style.css" rel="stylesheet">
		 <link href="assets/css/bootsnav.css" rel="stylesheet">
		 <link href="assets/css/index1.css" rel="stylesheet">
        
    </head>
<body>
<!--loader-->
<div id="preloader">
  <div class="sk-circle">
    <div class="sk-circle1 sk-child"></div>
    <div class="sk-circle2 sk-child"></div>
    <div class="sk-circle3 sk-child"></div>
    <div class="sk-circle4 sk-child"></div>
    <div class="sk-circle5 sk-child"></div>
    <div class="sk-circle6 sk-child"></div>
    <div class="sk-circle7 sk-child"></div>
    <div class="sk-circle8 sk-child"></div>
    <div class="sk-circle9 sk-child"></div>
    <div class="sk-circle10 sk-child"></div>
    <div class="sk-circle11 sk-child"></div>
    <div class="sk-circle12 sk-child"></div>
  </div>
</div>
<!--loader--> 
<!-- Site Wraper -->
<div class="wrapper"> 
  <!-- HEADER --> 
  <!--Start header area-->
     <header  class="header__block">
          <div class="top-part__block ptb-15">
				<div class="container">
					<div class="row">
						<div class="col-sm-7">
							<p>
								Welcome to our corporate buisness
							</p>
						</div> 
					</div>
				</div>
			</div>
			<div class="middel-part__block  ptb-20">
				<div class="container">
					<div  class="row" >
						<div class="col-md-4">
                            <div class="logo" >
                                <table>
                                    <tr>
                                        <td rowspan="2"><a href="./home.html"><img class="logoo"    src="assets/images/logo.jpg" alt="Logo"></a></td> 
                                        <td> <h3><div  class="yongXin">Winsun Laundry & Linen Supply</div></h3> </td>
                                    </tr>
                                    <tr> 
                                        <td><div class="yongXin"> 永新洗涤</div></td>
                                    </tr> 
                                </table>  
                            </div> 
                        </div>
                         
                        <div class="col-md-8"> 
                            <div class=" navgation__block stricky-header__top">   
                                <div   class="container">
                                    <div  class="row "> 
                                        <div  class="col-md-12 ">
                                            <div  class="main-menu__block " > 
                                                <!--===Navigation===--> 
                                                <ul  class="nav navbar-nav mobile-menu">      
                                                    <li>
                                                        <a href="./index.html">Home</a>  
                                                    </li>
                                                    <li>
                                                        <a href="./services-details.html">Product&Services</a> 
                                                    </li>
                                                    <li>
                                                            <a href="./about3.html">About US</a> 
                                                    </li>
                                                    <li>
                                                        <a href="./whyChooseUs.html">Why Choose Winsun</a> 
                                                    </li>
                                                    <li>
                                                        <a href="./contact1.html">Contact Us</a>
                                                    </li>  
                                                </ul>  
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div> 
		</header>
  <!--End mainmenu area--> 
  <!-- END HEADER -->
			<!-- CONTENT -->
			<!-- Intro Section -->
    <section  class="inner-intro light-color overlay-before parallax-background">
                 <div  class="container">
                     <div class="row title">
                         <h1>CONTACT US</h1>
                     </div>
                 </div>
    </section>
       
			<!-- End Intro Section -->
			 <!-- Contact Section -->
   <?php
    echo '<br><br><br><br><br><br><br><br>'; 
    ?>
    <h1 style="margin-left:400px;"><b>Message has been Sent. <br>
      Thank you for your Feedback.</b></h1>
    
<?php  
    echo '<br><br><br><br><br><br><br><br>';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
} 
?> 
         
			<!-- Contact Section -->
			<!--End Contact-->
			<!-- FOOTER -->
	  <footer>
			<div class="top_footer_info__block ptb-20">
				<div class="container">
					 <div class="row">
						<div class="col-sm-4">
							<div class="single_info__block">
								<i class="fa fa-phone"></i>
								<h4>+1(146) 698 2802 <span>Monday-Friday, 8am-7pm</span></h4>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="single_info__block">
								<i class="fa fa-envelope-o"></i>
								<h4>Winsunlaundry@gmail.com <span>Monday-Friday, 8am-7pm</span></h4>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="single_info__block">
								<i class="fa fa-bullhorn"></i>
								<h4>Request a quote <span>Get all the information</span></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main_footer__block pb-0">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							 
                        </div>
					</div>
					<div class="  ptb-20 mt-20">
						<div class="row">
							<div class="col-sm-6">
								<a class="footer__block-logo">
                                    <div  class="logoo"><img src="assets/images/logobot.png" alt="www.FineStudio.ca 多伦多网站及手机App开发"></div></a>
							</div>
							<div class="col-sm-6 text-right ptb-20 ">
								<p>
									WinSun All Rights Reserved | Powered By <a href="http://www.finestudio.ca/" target="_blank">www.FineStudio.ca</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</footer>
			<!-- END FOOTER -->
		</div>
		<!-- Site Wraper End --> 
<script src="assets/js/jquery.min.js" type="text/javascript"></script> 
<!-- Easing Effect Js --> 
<script src="assets/js/plugin/jquery.easing.js" type="text/javascript"></script> 
<!-- bootstrap Js --> 
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script> 
<!-- carousel Js --> 
<script src="assets/js/plugin/owl.carousel.js" type="text/javascript"></script> 
<!-- imagesloaded Js -->
<script src="assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
<!-- masonry,isotope Effect Js -->
<script src="assets/js/isotope.pkgd.min.js" type="text/javascript"></script>
<script src="assets/js/masonry.pkgd.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.appear.js" type="text/javascript"></script>
<!-- parallax Js -->
<script src="assets/js/jquery.parallax-1.1.3.js" type="text/javascript"></script> 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&.js"></script> 
<!-- Mail Function Js --> 
<script src="assets/js/mail.js" type="text/javascript"></script> 
<!-- custom Js --> 
<script src="assets/js/custom.js" type="text/javascript"></script>
	</body>
</html>
