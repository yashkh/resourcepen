<?php        
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exclusive DJ IT</title>


 <!--[if lt IE 9]><script src="https://di8vc3anm8wl1.cloudfront.net/static/lib/html5shiv.js"></script><![endif]-->
 <script src="https://di8vc3anm8wl1.cloudfront.net/static/lib/jquery-1.8.3.min.js"></script> 

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head> 
<body>

  <h1> <font color="orange">Resource Pen</font><small> - The final stop for your engineering resources.</small></h1><hr>
<!-- START NAV -->


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


<!-- End NAV -->




<!-- START PAGE WITH PHP -->


<?php

if(!isset($_SESSION['Username']))
{
	echo "<br><br><center><font color=red><h2>You need to  first Sign up with username as your DJSCE SAP ID and then Log In in order to access this page!</h2>";
	echo "<br>";
	echo ('<a href="reg/login.php" ><button type="button" class="btn btn-success btn-lg"> <span class="glyphicon glyphicon-log-in"></span>&nbsp Log In</button></a></font></center>');
}
else
{

	$string2=$_SESSION['Username'];

	if (!(strlen($string2)==11 &&  substr_compare($string2, '60003', 0,4)==0))
	{
		echo "<br><br><center><h2>You are not a student of DJSCE IT as your username is not a valid SAP ID";
	}
	else
	{
		
		echo ('<br>

<div class="jumbotron">
  <h1>Exclusive DJ-IT</h1>
  <br>
  <p>So you Managed to enter this restricted section. Welcome to DJ IT, a rocking stunning and one of a kind group of engineering students! Find the best pics depicting the class in the Gallery Section. Have more to add to it? You can also upload your own pics to the Gallery! Supporting it are a few mini games created by team themselves. Hope you enjoy them!</p>
  
</div>
<div class="container marketing">

  <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-3">
        <center>
          <img class="featurette-image img-responsive img-circle"  alt="500x500" src="img.jpg">
          </center>
        </div>
        <div class="col-md-9">
          <h2 class="featurette-heading">DJ IT Gallery. <span class="text-muted">Moving down memory lane.</span></h2>
           <br>
            <p><font size="4">A collection of the best of images representing DJ IT. Come on! Just have a look and upload your images to add to the gallery.</font></p><br><br>
            <center><a href="gallery/images/gallery.php" ><button class="btn btn-danger ">Go To The Gallery!</button></a></center>

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-9">
          <h2 class="featurette-heading">Mini Games. <span class="text-muted">Go on! Waste your time.</span></h2>
          <br>
          <p><font size="4">The game is called the Ball of Fury. The objective is to protect yourselves from the ever irritating and boring guy called Kodi from reaching towards you. Mind It! He is gonna rip your head off as he has the Ball of Fury with him...</font></p><br><br>
          <center><a href="" target="_blank"><button class="btn btn-warning ">Download The Game!</button></a></center>
        </div>
        <div class="col-md-3">
        <center>
        <br>
          <img class="featurette-image img-responsive img-circle"  src="img.jpg">
          </center>
        </div>
      </div>

      <hr class="featurette-divider">

  
      <br>
      <br>
<hr class="featurette-divider">');
	}

}

?>



<!-- PUT DIS IN ECHO -->


      <!-- STOP ECHO -->



      <!-- QUOTE -->
<hr class="featurette-divider">
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-6">
<blockquote>
  <p>Learning is our Goal. Marks should not be our Aim.</p>
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





