<?php
$posted = (isset($_POST) && sizeof($_POST) > 0);

/*echo("Is set: ".isset($_POST)."<br/>");
echo("Size: ".sizeof($_POST)."<br/>");
echo("Posted: ".$posted."<br/>");
*/

//check to make sure we have everything
$ufirstname = $_POST['firstName'];
$usurname = $_POST['surName'];
$uemail = $_POST['email'];
$usubject = $_POST['subject'];
$umessage = $_POST['message'];


if($posted){	
	if((isset($ufirstname) && ($ufirstname != null || $ufirstname != "")) && (isset($usurname) && ($usurname != null || $usurname != "")) && (isset($uemail) && ($uemail != null || $uemail != "")) && (isset($usubject) && ($usubject != null || $usubject != "")) && (isset($umessage) && ($umessage != null || $umessage != ""))){
		//echo("Everything posted!");
		
		$to = "info@hythewindowcleaning.co.uk";
		$subject = " - Website Contact Form";
		
		if($usubject == "home"){
			$subject = "Home Quote Request".$subject;
		} else if($usubject == "business"){
			$subject = "Business Quote Request".$subject;
		} else if($usubject == "other"){
			$subject = "General Query".$subject;
		} else {
			$subject = "Other Request (or subject not entered)".$subject;
		}
		
		$message = "Hi Tom,\n You've received a new message through the website! Please see the details below.\n\n If you'd like you can just reply to this email and it will go back to the sender.\n\nFrom: ".$ufirstname." ".$usurname." <".$uemail.">,\n\nMessage:\n".$umessage."\n\n\nMessage sent from Hythe Window Cleaning at: ".date("F j, Y, g:i a")."\n\nForm provided by Matt Rayner - http://www.mattrayner.co.uk/";
		$from = "noreply@hythewindowcleaning.co.uk";
		$replyTo = $uemail;
		$headers = "From:" . $from . "\r\n" .
				   "Reply-To: " . $uemail . "\r\n" .
				   "X-Mailer: PHP/" . phpversion();
		
		if(mail($to,$subject,$message,$headers)){
			$success=true;
		}else{
			$success=false;
		}
		
		//echo($success);
		 
	}
	else
	{
		$success=false;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Contact Us - Hythe Window Cleaning</title>
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <meta name="description" content="Get in contact with us by phone, email or post using the information below.">
    <meta name="author" content="Matt Rayner - mattrayner.co.uk">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/fonts/fonts.css" rel="stylesheet">
    <link href="../assets/css/styles.css" rel="stylesheet">
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>
  <div class="container">
	<div class="masthead">
      <div class="row-fluid">
       	<a href="http://www.hythewindowcleaning.co.uk" class="ir" id="mastheadlogo"><h3 class="muted">Hythe Window Cleaning</h3></a>
       	<div class="span4 pull-right" id="masthead-quote">
        	<p>CALL NOW FOR YOUR <span>FREE</span> QUOTE</p>
        	<p class="masthead-telephone">07595 981 921</p>
        </div>
      </div>
        <div class="navbar">
        <div class="navbar-inner">
          <div class="container">
            <ul class="nav">
              <li><a href="http://www.hythewindowcleaning.co.uk/">Home</a></li>
              <li><a href="http://www.hythewindowcleaning.co.uk/services">Services</a></li>
              <li><a href="http://www.hythewindowcleaning.co.uk/gallery">Gallery</a></li>
              <li><a href="http://www.hythewindowcleaning.co.uk/testimonials">Testimonials</a></li>
              <li class="active"><a href="http://www.hythewindowcleaning.co.uk/contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </div><!-- /.navbar -->
    </div>
    <!-- End of header -->
    

	  <div class="row-fluid">
	  	  <div class="span3">
		    <div id="sidebar-follow" class="well sidebar-nav">
		      <ul class="nav nav-list">
		      	<li class="nav-header">Contact us</li>
		        <li><a href="#snail">Snail mail</a></li>
		        <li><a href="#email">Email</a></li>
		      </ul>
		    </div><!--/.well -->
	      </div>
	      
		  <div class="span9 pull-right">
		  	<div class="jumbotron">
			  	<h1>Contact us!</h1>
			  	<p>We'd love you to get in touch, you can call us on <span class="light-blue">07595 981 921</span> or send us a letter/email using the details below.</p>
		  	</div>
		  	
		  	<hr>
		  	
		  	<div class="row-fluid">
		  		<div class="span8">
		  			<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=15+Springfield+Way,+Hythe,+CT21+5SH&amp;aq=t&amp;sll=52.8382,-2.327815&amp;sspn=8.047465,13.666992&amp;ie=UTF8&amp;hq=&amp;hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&amp;t=m&amp;z=14&amp;ll=51.077429,1.121722&amp;output=embed"></iframe>
		  		</div>
		  		<div class="span4">
		  			<a id="snail"></a>
				  	<h2>Snail mail</h2>
				  	<address>
					  <strong>Hythe Window Cleaning</strong><br>
					  15 Springfield Way<br>
					  Hythe<br>
					  Kent<br>
					  United Kingdon<br>
					  CT21 5SH<br>
					  <abbr title="Phone">P:</abbr> <span class="light-blue">07595 981 921</span>
					</address>
		  		</div>
		  	</div>
		  	
		  	<hr>
		  	
		  	<div class="row-fluid">
		  		<a id="email"></a>
			  	<h2>Email</h2>
			  	<?php
			  		if($posted && !$success){
				?>
				  	<div class="alert">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong>Whoops!</strong> Please fill out all of the form.
					</div>	
				<?php
			  		}
			  	?>
			  	</div>
			  	<?php
			  		if($posted && $success){
			  	?>
			  	<div class="hero-unit">
				  <h1>Thanks for getting in touch!</h1>
				  <p>We'll endeavour to get back to you as quickly as possible.</p>
				</div>
			  	<?php
			  		} else {
			  	?>
			  	<form id="mailForm" method="post" class="well">
				  <div class="row">
						<div class="span5" style="padding-left: 10px">
							<label>First Name</label>
							<input type="text" class="span10" name="firstName" placeholder="Your First Name" value="<?php if(isset($ufirstname)){echo $ufirstname;} ?>">
							<label>Last Name</label>
							<input type="text" class="span10" name="surName" placeholder="Your Last Name" value="<?php if(isset($usurname)){echo $usurname;} ?>">

							<label>Email Address</label>
							<input type="text" class="span10" name="email" placeholder="Your email address" value="<?php if(isset($uemail)){echo $uemail;} ?>">
				          	<label>Subject</label>
							<select id="subject" name="subject" class="span10">
								<option value="na" selected="">Choose One:</option>
								<option value="home">Home Quote</option>
								<option value="business">Business Quote</option>
								<option value="other">General Enquiries</option>
							</select>
						</div>
						<div class="span7">
							<label>Message</label>
							<textarea name="message" id="message" class="input-xlarge span12" rows="10" value="<?php if(isset($umessage)){echo $umessage;} ?>"></textarea>
						</div>
					
						<button id="sendButton" class="btn btn-primary pull-right">Send</button>
					</div>
				</form>	
				<?php } ?>
		  	</div>	  
		  </div>
		  
		  <hr>
		  
		  <!-- Start of footer -->
		<div class="footer">
	        <div class="span6">Copyright &copy; 2013 <a href="http://www.hythewindowcleaning.co.uk/">Hythe Window Cleaning</a></div>
	        <div class="span6 pull-right">Website by <a href="http://www.mattrayner.co.uk/">Matthew Rayner</a></div>
	      </div>

	  </div>  

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    
    <script>
    $(window).load(function(){
        var $root = $('html, body');
        $('a').click(function() {
            var href = $.attr(this, 'href');
            $root.animate({
                scrollTop: $(href).offset().top
            }, 500, function () {
                window.location.hash = href;
            });
            return false;
        });

		console.log("fired");
		
		var scrollable = true;
		
		if($(window).width() < 1160){scrollable = false;} else {scrollable = true;}
		
		$(window).scroll(function () {
			if ($(this).scrollTop() > 179) {
				console.log("fixed");
				if(scrollable)
					$('#sidebar-follow').addClass("fixed");
				else
					$('#sidebar-follow').removeClass("fixed");
			} else {
				console.log("not fixed");
				$('#sidebar-follow').removeClass("fixed");
			}
		});
		
		$(window).resize(function() {
			if($(window).width() < 1160){scrollable = false;} else {scrollable = true;}
		});
		
		var map;
		function initialize() {
		  var mapOptions = {
		    zoom: 8,
		    center: new google.maps.LatLng(-34.397, 150.644),
		    mapTypeId: google.maps.MapTypeId.ROADMAP
		  };
		  map = new google.maps.Map(document.getElementById('map-canvas'),
		      mapOptions);
		}
		
		google.maps.event.addDomListener(window, 'load', initialize);
		
		<?php if($posted){echo("window.location.hash = 'email';");} ?>
	});
    </script>
	<!-- End of footer -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43588624-1', 'hythewindowcleaning.co.uk');
  ga('send', 'pageview');
</script>

  </body>
</html>
