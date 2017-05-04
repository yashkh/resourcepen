

<?php        
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Approach Us</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
</head>
<style>


.ui-group-buttons .or{position:relative;float:left;width:.3em;height:1.3em;z-index:3;font-size:12px}
.ui-group-buttons .or:before{position:absolute;top:50%;left:50%;content:'or';background-color:#5a5a5a;margin-top:-.1em;margin-left:-.9em;width:1.8em;height:1.8em;line-height:1.55;color:#fff;font-style:normal;font-weight:400;text-align:center;border-radius:500px;-webkit-box-shadow:0 0 0 1px rgba(0,0,0,0.1);box-shadow:0 0 0 1px rgba(0,0,0,0.1);-webkit-box-sizing:border-box;-moz-box-sizing:border-box;-ms-box-sizing:border-box;box-sizing:border-box}
.ui-group-buttons .or:after{position:absolute;top:0;left:0;content:' ';width:.3em;height:2.84em;background-color:rgba(0,0,0,0);border-top:.6em solid #5a5a5a;border-bottom:.6em solid #5a5a5a}
.ui-group-buttons .or.or-lg{height:1.3em;font-size:16px}
.ui-group-buttons .or.or-lg:after{height:2.85em}
.ui-group-buttons .or.or-sm{height:1em}
.ui-group-buttons .or.or-sm:after{height:2.5em}
.ui-group-buttons .or.or-xs{height:.25em}
.ui-group-buttons .or.or-xs:after{height:1.84em;z-index:-1000}
.ui-group-buttons{display:inline-block;vertical-align:middle}
.ui-group-buttons:after{content:".";display:block;height:0;clear:both;visibility:hidden}
.ui-group-buttons .btn{float:left;border-radius:0}
.ui-group-buttons .btn:first-child{margin-left:0;border-top-left-radius:.25em;border-bottom-left-radius:.25em;padding-right:15px}
.ui-group-buttons .btn:last-child{border-top-right-radius:.25em;border-bottom-right-radius:.25em;padding-left:15px}
</style>
  
<body>
  <h1> <font color="orange">Resource Pen</font><small> - The final stop for your engineering resources.</small></h1><hr>




<!-- Start NAV -->

  <div class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php">Home</a>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
          <ul class="nav navbar-nav">

            <li class="dropdown">
              <a href="#" class="dropdown-toggle " data-toggle="dropdown">Academics <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="academics.php#tuts">Video Tutorials</a></li>
                <li><a href="academics.php#pap">Research Papers</a></li>
                <li><a href="academics.php#icpc">ACM-ICPC</a></li> 
                <li><a href="academics.php#icacta">ICACTA Conference</a></li>

              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle " data-toggle="dropdown">Downloads <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="download.php#ebook">E-Books and Solutions</a></li>
                <li><a href="download.php#paper">University Papers</a></li>
                <li><a href="download.php#syl">Syllabus</a></li>
                <li><a href="download.php#assign">Assignments</a></li>

              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle " data-toggle="dropdown">Future Endeavours <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="be.php#">GRE Resources</a></li>
                <li><a href="be.php#">CAT Resources</a></li>
                <li><a href="be.php#">Placement Resources</a></li>        
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle " data-toggle="dropdown">Exclusive DJ-IT <b class="caret"></b></a>
              <ul class="dropdown-menu">

                <li><a href="gallery/images/gallery.php">Photo Gallery</a></li>
                <li><a href="djit.php">Mini Games</a></li>  
                       
              </ul>
            </li>
            <li><a href="chat/index.php" >Chat & Confessions </a></li>
            <li><a href="trolls/trolls.php" > Trolls & Jokes </a></li>
            <li><a href="aboutus.php" >Approach Us </a></li>

          </ul>

          <ul class="nav navbar-nav navbar-right">
           
            <?php

            
            if(!isset($_SESSION['Username'])){
             echo (' <li><a href="reg/login.php" target="_blank"> <button type="button" class="btn btn-success btn-sm"> <span class="glyphicon glyphicon-log-in"></span>&nbsp Log In</button></a></li>
    <li><a href="reg/index.php"> <button type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-new-window"></span>&nbsp Sign Up</button></a></li>');
           }

           else
           {
            echo '<li><h5><font color="#ffffff">Welcome <br>', $_SESSION['Username'] ,'&nbsp!' ; 
            echo ('</font></h5></li><li><a href="logout.php" > <button type="button" class="btn btn-success btn-sm"> <span class="glyphicon glyphicon-log-in"></span>&nbsp Log Out</button></a></li>');
          }
          ?>


        </ul>
      </div>
    </div>







<!--END NAV -->


<!-- Start Jumbotron -->

<div class="jumbotron">
  <h1>Approach Us</h1>
  <p>A short information about the developers of the website. Contact details also provided so that you can communicate with us. Suggestions in order to improve this website are welcome.</p>
  
</div>

<!-- end jumbotorn -->


<!-- START INFOS -->

<hr>
<br>
<center><h1>About Us <small>A short description!</small></h1><br><hr></center>

<div class="row">
<div class=" col-md-4">
 <center>
   <div class="thumbnail">
   <br>
      <img data-src="img2.jpg" src="img/patil.jpg" class="img-circle img-responsive"  alt="..."  style="width:250px !important; height:250px !important;">
      <br>

      <div class="caption">
        <h2>Chinmay Patil</h2>
       
        <br>
        <p>  <div class="ui-group-buttons">
                <a href="https://www.facebook.com/chinmay.patil.3591?fref=ts" type="button" target="_blank"class="btn btn-primary btn-sm">Facebook</a>
                <div class="or or-sm"></div>
                <a href="" type="button" target="_blank" class="btn btn-danger btn-sm">Google +</a>
            </div></p>
     
    </div>
    </center>
	</div>

  <div class=" col-md-4">
  <center>
   <div class="thumbnail"><br>
      <img data-src="img2.jpg" src="img/ashu.jpg" class="img-circle img-responsive"  alt="..."  style="width:250px !important; height:250px !important;">
      <div class="caption">
      <br>
        <h2>Ashutosh Parekh</h2>
        <br>
        <p><div class="ui-group-buttons">
                <a href="https://www.facebook.com/ashutosh.parekh.9" type="button" target="_blank" class="btn btn-primary btn-sm">Facebook</a>
                <div class="or or-sm"></div>
                <a href="https://plus.google.com/109867150500814013596/posts" type="button" target="_blank" class="btn btn-danger btn-sm">Google +</a>
            </div></p>
      </div>
    </div>
    </center>
  </div>
<div class=" col-md-4">
 <center>
   <div class="thumbnail"><br>
      <img data-src="img2.jpg" src="img/khandu.jpg" class="img-circle img-responsive"  alt="..."  style="width:250px !important; height:250px !important;">
      <div class="caption"><br>
        <h2>Yash Khandelwal</h2>
        <br>
        <p><div class="ui-group-buttons">
                <a href="https://www.facebook.com/yash.khandelwal.9041?fref=ts" type="button" target="_blank" class="btn btn-primary btn-sm">Facebook</a>
                <div class="or or-sm"></div>
                <a href="https://plus.google.com/108564459883211331901/posts" type="button" target="_blank" class="btn btn-danger btn-sm">Google +</a>
            </div></p>
      </div>
    </div>
    </center>

	</div>
</div>

<br>
<br>
<div class="row">
<div class=" col-md-4"></div>
<div class=" col-md-4">
 <center>
   <div class="thumbnail">
   <br>
      <img data-src="img2.jpg" src="img/modi.jpg" class="img-circle img-responsive"  alt="..."  style="width:250px !important; height:250px !important;">
      <div class="caption"><br>
        <h2>Vinit Modi</h2>
        <br>
        <p><div class="ui-group-buttons">
                <a href="https://www.facebook.com/Vinitmody3?fref=ts" type="button" target="_blank" class="btn btn-primary btn-sm">Facebook</a>
                <div class="or or-sm"></div>
                <a href="https://plus.google.com/117911266915968111002/posts" type="button"target="_blank"  class="btn btn-danger btn-sm">Google +</a>
            </div></p>
      </div>
    </div>
    </center>
	
</div>
<div class=" col-md-4"></div>
</div>
<br><br><br>

<hr>
<!-- END INFOS-->






<!-- Start Contact US PAGE -->
<br>
<center><h1>Contact Us <small>Feel free to approach us!</small></h1><br><hr></center>

	<div class="container">
	<div class="row">
        <div class="col-md-8">
        	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1885.00197187744!2d72.83730372698531!3d19.107482920382733!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9c676018b43%3A0x75f29a4205098f99!2sDwarkadas+J+Sanghvi+College+of+Engineering!5e0!3m2!1sen!2sin!4v1395574564047" width="600" height="450" frameborder="0" style="border:0"></iframe>
    	</div>
    	
      	<div class="col-md-4">
      	<br><br><br><br>
    		<h2>Resource Pen</h2>
    		<address>
    			<strong>Information Technology Department</strong><br>
    			Dwarkadas J Sanghvi College of Engineering,<br>
    			Bhaktivedanta Swami Marg,<br>
    			JVPD, Vile Parle(West),<br>
    			Mumbai,<br>
    			400056.<br>
    			<abbr title="Phone">Phone:</abbr> 90-290-55123
    		</address>
    	</div>
    </div>
</div>

<hr><hr>
<!-- End Contact US -->



      <!-- QUOTE -->
<hr class="featurette-divider">
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-6">
<blockquote>
  <p>Learning should be our Goal. Marks is not our aim.</p>
  <small><cite title="Source Title">You Know Who.</cite></small>
</blockquote>
</div>
</div>


  <!-- End quote -->



  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>