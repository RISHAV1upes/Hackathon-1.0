<?php
include 'config.php';
?>
<!DOCTYPE html>

<html>
<head>
 <style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
	
}
/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
	border-radius: 0%;
    width: 50%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}
/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}
/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: 	#00ffbf;
    color: white;
	
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}


.button {
    background-color: #535353;
    border: none;
    color: black;
    padding: 5px 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
<link rel="icon" type="image/png" href="favicon.png" />
<title>Hackathon-Themes</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
 
</head>
<body id="top" style="background-image: url('assets/images/9809.jpg');padding-bottom:0px;margin-bottom:0px;" >
<div class="bgded overlay" style="padding-bottom:0px;margin-bottom:0px;"> 
</div>
<div class="wrapper row3" style="background-image:url('images/9809.jpg');background-repeat: no-repeat;" >
		<img style="position:absolute;margin-top:13px;" src="favicon.png">  
		<img style="position:absolute;height:85px;width:85px;margin-top:13px;left:1260px;" src="assets/images/owasp.gif">
  <main class="hoc container clear">

    <div class="btmspace-80 center">
      <h3 class="nospace" style="font-family: 'poppins',sans-serif;
    color: #080808;
    font-size: 60px;"><b>Themes</b></style></h3>
      <p class="nospace" style="font-family:tahoma;font-size:25px;color:#f0f0f0;">Be Quick!</p>
    </div>
    <ul class="nospace group services">
      <li class="one_third first active">
        <article class="bgded overlay" style="background-image:url('images/digitalindia.jpg');">
          <div class="txtwrap"><i class="block fa fa-4x fa-desktop"></i>
            <h6 class="heading">Digital India</h6>
            <p>The theme for the hackathon is Digital India is Traffic Management, 
			Smart Urban Lighting, Waste Management, City Maintenance, 
			Intelligent Transport System, Smart Wi-Fi, Smart Grids, 
			E-Governance and Safety Management. The products will be evaluated
			by the jury based on creativity, innovation, design, impact and simplicity and 
			all the products must be in line with the idea and the theme.&hellip;</p>
          </div>
          <footer><a href="#" onclick="document.getElementById('myModal').style.display='block'" style="width:auto;">More &raquo;</a></footer>
        </article>
      </li>
      <li class="one_third active">
        <article class="bgded overlay" style="background-image:url('images/automateclg.jpg');">
          <div class="txtwrap"><i class="block fa fa-4x fa-graduation-cap"></i>
            <h6 class="heading">Automate College Process Theme</h6>
            <p>There are lot of problems in college that need automation with 
			the implementation of technology under the field of faculty services 
			or student problems that are faced daily by them and needs solution 
			by means of this hackathon which will serve as a platform to
			give appropriate alternative to these problems. Aim at providing 
			feasable solutions on this theme.&hellip;</p>
          </div>
          <footer><a href="#" onclick="document.getElementById('modal1').style.display='block'" style="width:auto;">More &raquo;</a></footer>
        </article>
      </li>
      <li class="one_third active">
        <article class="bgded overlay" style="background-image:url('images/paysecure.png');">
          <div class="txtwrap"><i class="block fa fa-4x fa-lock"></i>
            <h6 class="heading">Pay Secure</h6>
            <p>With the Indian government taking many initiatives to 
			drive a cashless economy it is not only important to have 
			multiple channels present but also necessary to increase the
			adoption of cashless channels. Today, India has issued over 
			850 million debit cards out of which only 100 million is actively used. There is an urgent need to improve this usage.
             Rise of digital payments and technology adoption 
			 &hellip;</p>
          </div>
          <footer><a href="#" onclick="document.getElementById('modal2').style.display='block'" style="width:auto;">More &raquo;</a></footer>
        </article>
      </li>
	  
      <li class="one_third first active" style="position:relative;left:160px;">
        <article class="bgded overlay" style="background-image:url('images/womenemp2.jpg');">
          <div class="txtwrap"><i class="block fa fa-4x fa-female"></i>
            <h6 class="heading">Empower Her</h6>
            <p>In this theme, shared goal is to support and empower 
			disadvantaged women and girls who are disproportionately affected
			by poverty, lack of education, discrimination, abuse and violations 
			of their rights entitlements, access and control of finances.
			Experience has proved that if equipped with proper education 
			and resources, women have the power to help and &hellip;</p>
          </div>
          <footer><a href="#" onclick="document.getElementById('modal3').style.display='block'" style="width:auto;">More &raquo;</a></footer>
        </article>
      </li>
      <li class="one_third active" style="position:relative;left:180px;">
        <article class="bgded overlay" style="background-image:url('images/chooseown.jpg');">
          <div class="txtwrap"><i class="block fa fa-4x fa-rocket"></i>
            <h6 class="heading">Choose Your Own Theme</h6>
            <p>In this theme, the participant has to choose his/her own theme
			if the participant is not comfortable with the themes 
			provided. The theme chosen by the participant should not 
			be a problem statement. The participant choosing own theme
			will be accepted by making a note of certain aspects like 
			the feasibility of the 
			product and use of.&hellip;</p>
          </div>
          <footer><a href="#" onclick="document.getElementById('modal4').style.display='block'" style="width:auto;">More &raquo;</a></footer>
        </article>
      </li>
	  
      
    </ul>
	<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span onclick="document.getElementById('myModal').style.display='none'" class="close" title="Close Modal">&times;</span>
      <h2><center>Digital India</center></h2>
    </div>
    <div class="modal-body">
      <p>The theme for the hackathon is Digital India is Traffic Management, 
			Smart Urban Lighting, Waste Management, City Maintenance, 
			Intelligent Transport System, Smart Wi-Fi, Smart Grids, 
			E-Governance and Safety Management. The products will be evaluated
			by the jury based on creativity, innovation, design, impact and simplicity and 
			all the products must be in line with the idea and the theme.
			</p>
			<h2>Problem Statement</h2>
			<ol start="1">
			<li>Real time tracking system of bus using SMS/on map</li>
			  <a>The solution will be used by commuters to get the live 
			  updates about the current position of the buses using SMS/map facility.</a>
		     <li>Real time traffic information</li>
			  <a>The real time traffic information system will be used by 
			  citizens to understand the current situation of traffic in the city and to plan their journey accordingly. The solution shall provide the real time traffic 
			  information on map which the citizens can easily interpret.
			  </a>
		    <li>Carpooling Solution</li>
			  <a>The solution intends to reduce the private vehicle 
			  usage both by citizens and by officials. Using the solution, the citizens 
			  and officials can car pool based on their destination.
			  </a>

			  <li>E - Voting</li>
			  <a>This solution tends to make the whole voting process online. 
			  It makes it easy for the people who are not able to come at the 
			  voting centers due to certain reasons and for the 
			  government to make the process easier for themselves too.
			  </a>
			  <li>Healthcare </li>
			  <a>Healthcare will include certain topics like that of 
			  hospital management system and healthcare facilities and 
			  other smart devices related to the healthcare field.
			  </a></ol>
    </div></div></div>
	<!-- The Modal -->
<div id="modal1" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span onclick="document.getElementById('modal1').style.display='none'" class="close" title="Close Modal">&times;</span>
      <h2><center>Automate College Process System</center></h2>
    </div>
    <div class="modal-body">
	<p>There are lot of problems in college that need automation with 
			the implementation of technology under the field of faculty services 
			or student problems that are faced daily by them and needs solution 
			by means of this hackathon which will serve as a platform to
			give appropriate alternative to these problems. Aim at providing 
			feasable solutions on this theme.</p>
      <h2>Problem Statement</h2>
				<ol start="1">
			<li>Automated Parking Management Systems</li>
			  <a>Smart Parking systems typically obtain information about
			  available parking spaces in a particular geographic area and the process occurs in real-time to inform users about available vacant spaces. Department requires an automated parking management systems which can be used by citizens to find the available parking spots in the 
			  city/nearby area and pay parking bill for the available spot.
			  </a>
		     <li>Centralized database for all information </li>
			  <a>Developing a data hub for all related content like 
			  student policies, events, time table etc.
			  </a></ol>
    </div>
    
  </div>

</div>

</div>
	<div id="modal2" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span onclick="document.getElementById('modal2').style.display='none'" class="close" title="Close Modal">&times;</span>
      <h2><center>Pay Secure</center></h2>
    </div>
	
    <div class="modal-body">
	<p>With the Indian government taking many initiatives to 
			drive a cashless economy it is not only important to have 
			multiple channels present but also necessary to increase the
			adoption of cashless channels. Today, India has issued over 
			850 million debit cards out of which only 100 million is actively used. There is an urgent need to improve this usage.
             Rise of digital payments and technology adoption, has 
			 accelerated the importance of security in all aspects. 
			 Security details of the payments products are designed 
			 with extreme attention and focus to provide utmost comfort 
			 to the user. Security becomes one of the primary factor in selection of digital payment products

			</p>
      <h2>Problem Statement</h2>
				<ol start="1">
			<li>An Artificial Intelligence (AI) and cognitive fraud detection system.</li>
			  <li>Propose a model and system architecture for cheaply but safely distributing pension 
			  pay-outs to people in rural areas.</li>
			  <li>Design and develop an OTP system for Internet Banking that doesn't 
			  require the use of a mobile phone.</li>
			  <li>Create a solution that is easily integrated with offline merchants 
			  and enables them to offer alternate payment solutions to 
			  their customers to drive cashless transactions.</li></ol>
    </div>
    
  </div>

</div>

</div>
<div id="modal3" class="modal">
<!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span onclick="document.getElementById('modal3').style.display='none'" class="close" title="Close Modal">&times;</span>
      <h2><center>Empower Her</center></h2>
    </div>
	
    <div class="modal-body">
	<p>In this theme, shared goal is to support and empower disadvantaged women and girls who are disproportionately affected by poverty, lack of education, discrimination, abuse and violations of their rights entitlements, access and control of finances. Experience has proved that if equipped with proper education and resources, women have the power to help and overcome poverty, marginalization and social injustice.</p>
	
      <h2>Problem Statement</h2>
				<ol start="1">
			
			<li>Women Safety</li>
			  <a>Having a secure SOS algorithm on all platforms is a necessity for safety. </a>
		     <li>Welfare Schemes</li>
			  <a>A centralized structure to let people know about the welfare schemes available for women. </a>
		    <li>Grievance Redressal</li>
			  <a>Developing a complaint or feedback form to be reviewed and taken action by officials
			  </a></ol>
    </div>
    
  </div>

</div>

</div>
<div id="modal4" class="modal">
<!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span onclick="document.getElementById('modal4').style.display='none'" class="close" title="Close Modal">&times;</span>
      <h2><center>Choose Your Own Theme</center></h2>
    </div>
	
    <div class="modal-body">
	
      <p> In this theme, the participant has to choose his/her own theme
			if the participant is not comfortable with the themes 
			provided. The theme chosen by the participant should not 
			be a problem statement. The participant choosing own theme
			will be accepted by making a note of certain aspects like 
			the feasibility of the 
			product and use of the product in general public.
			</p>
    </div>
    
  </div>

</div>

<div class=button  style="position:relative; left:565px;">
<button type="submit" value="Submit" onclick="document.getElementById('modal5').style.display='block'">Select Your Themes Here</button>
</div>
  <div id="modal5" class="modal">
<!-- Modal content -->
  <div class="modal-content" >
    <div class="modal-header" >
      <span onclick="document.getElementById('modal5').style.display='none'" class="close" title="Close Modal">&times;</span>
      <h2><center><br>Submit Your Theme</center></h2>
    </div>
	
    <div class="modal-body">
	<form action="counter.php" method="post">
	
<table border="none">
<tr><td align="right">Enter Your Team Name:</td><td><input type="text" name="name" id="team" placeholder="Name" required=" Enter your team name"/></td></tr>
<tr><td align="right">Select Your Theme:</td><td></td></tr>
<tr><td align="right"><input type="radio" name="selecttheme" value="digindia" checked></td><td> Digital India(
<?php
$counter = mysqli_query($con,"SELECT counter FROM setcounter where theme='digindia'");
        $row = mysqli_fetch_array($counter);
        $num= ($row['counter']);
		echo $num;
		?>remaining)
		</td></tr>
<tr><td align="right"><input type="radio" name="selecttheme" value="automate"></td><td> Automate College Process Theme(
<?php
$counter = mysqli_query($con,"SELECT counter FROM setcounter where theme='automate'");
        $row = mysqli_fetch_array($counter);
        $num= ($row['counter']);
		echo $num;
		?>remaining)</td></tr>
<tr><td align="right"><input type="radio" name="selecttheme" value="paysecure"></td><td>Pay Secure(
<?php
$counter = mysqli_query($con,"SELECT counter FROM setcounter where theme='paysecure'");
        $row = mysqli_fetch_array($counter);
        $num= ($row['counter']);
		echo $num;
		?>remaining)</td></tr>
<tr><td align="right"><input type="radio" name="selecttheme" value="empower"></td><td>Empower Her(
<?php
$counter = mysqli_query($con,"SELECT counter FROM setcounter where theme='empower'");
        $row = mysqli_fetch_array($counter);
        $num= ($row['counter']);
		echo $num;
		?>remaining)</td></tr>
<tr><td align="right"><input type="radio" name="selecttheme" value="choose"></td><td>Choose Your Own Theme(
<?php
$counter = mysqli_query($con,"SELECT counter FROM setcounter where theme='choose'");
        $row = mysqli_fetch_array($counter);
        $num= ($row['counter']);
		echo $num;
		?>remaining)</td></tr>
		<div id="emailid">
<tr><td align="right">Enter your Registered Email-ID:</td><td><input type="email" class="email" id="e1" name="email" placeholder=" Email" required=" "/></td></tr>
</div>
<tr><td align="right">Verification Code</td><td><input type="text" name="otp" placeholder="Enter the otp" required=""/>
<tr><td colspan="2" align="center"><input type="Submit" value="SUBMIT" style="color:black"/></td></tr>
    </table>
	</form>
	</div>
    
  </div>

</div>
<div class="wrapper" >
  <article id="shout" class="hoc container clear"> 
    
    <footer class="one_quarter"></footer>
  </article>
</div>
<div class="wrapper row5" style="padding-top:0px;margin-top:0px;">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">&copy;UPES-CSI- All Rights Reserved</p>
	
	
  </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script>
// Get the modal
var modal = document.getElementById('myModal');
// Get the <span> element that closes the modal

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
// Get the modal
var modal = document.getElementById('modal1');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
// Get the modal
var modal = document.getElementById('modal2');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
// Get the modal
var modal = document.getElementById('modal3');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
// Get the modal
var modal = document.getElementById('modal4');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
// Get the modal
var modal = document.getElementById('modal5');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script src="layout/scripts/jquery.min1.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>