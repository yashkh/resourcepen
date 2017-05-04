<?php        
   session_start();
?>


<!DOCTYPE HTML>

<html lang="en">
<head>
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
<meta charset="utf-8">
<title>DJ IT Image Gallery</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../../css/bootstrap.css">
<link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<link rel="stylesheet" href="../css/bootstrap-image-gallery.css">
<link rel="stylesheet" href="../css/demo.css">
</head>

<body style="background-color:#ffffff;">


<?php
$thelist="";
 if ($handle = opendir('.')) {
   while (false !== ($file = readdir($handle))) {
          if ($file != "." && $file != ".." && $file!="gallery.php") {
            $thelist .= '<a href="'.$file.'" data-gallery></a>';
          }
       }
  closedir($handle);
  }
?>

  <!--<h1> <font color="orange">Resource Pen</font><small> - The final stop for your engineering resources.</small></h1><hr> -->

<!-- START NAVBAR -->


<!-- START NAV -->
  <div class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../../home.php">Home</a>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
          <ul class="nav navbar-nav">

            <li class="dropdown">
              <a href="#" class="dropdown-toggle " data-toggle="dropdown">Academics <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="../../academics.php#tuts">Video Tutorials</a></li>
                <li><a href="../../academics.php#pap">Research Papers</a></li>
                <li><a href="../../academics.php#icpc">ACM-ICPC</a></li> 
                <li><a href="../../academics.php#icacta">ICACTA Conference</a></li>

              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle " data-toggle="dropdown">Downloads <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="../../download.php#ebook">E-Books and Solutions</a></li>
                <li><a href="../../download.php#paper">University Papers</a></li>
                <li><a href="../../download.php#syl">Syllabus</a></li>
                <li><a href="../../download.php#assign">Assignments</a></li>

              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle " data-toggle="dropdown">Future Endeavours <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="../../be.php#">GRE Resources</a></li>
                <li><a href="../../be.php#">CAT Resources</a></li>
                <li><a href="../../be.php#">Placement Resources</a></li>        
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle " data-toggle="dropdown">Exclusive DJ-IT <b class="caret"></b></a>
              <ul class="dropdown-menu">

                <li><a href="#">Photo Gallery</a></li>
                <li><a href="../../djit.php">Mini Games</a></li>  
                       
              </ul>
            </li>
            <li><a href="../../chat/index.php" >Chat & Confessions </a></li>
            <li><a href="../../trolls/trolls.php" > Trolls & Jokes </a></li>
            <li><a href="../../aboutus.php" >Approach Us </a></li>

          </ul>

          <ul class="nav navbar-nav navbar-right">
           
            <?php

            
            if(!isset($_SESSION['Username'])){
             echo (' <li><a href="../../reg/login.php" > <button type="button" class="btn btn-success btn-sm"> <span class="glyphicon glyphicon-log-in"></span>&nbsp Log In</button></a></li>
    <li><a href="../../reg/index.php"> <button type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-new-window"></span>&nbsp Sign Up</button></a></li>');
           }

           else
           {
            echo '<li><h5><font color="#ffffff">Welcome <br>', $_SESSION['Username'] ,'&nbsp!' ; 
            echo ('</font></h5></li><li><a href="../../logout.php" > <button type="button" class="btn btn-success btn-sm"> <span class="glyphicon glyphicon-log-in"></span>&nbsp Log Out</button></a></li>');
          }
          ?>


        </ul>
      </div>
    </div>
<!-- END NAV -->


<?php

if(!isset($_SESSION['Username']))
{
	echo "<br><br><center><font color=red><h2>You need to  first Sign up with username as your DJSCE SAP ID and then Log In in order to access this page!</h2>";
	echo "<br>";
	echo ('<a href="../../reg/login.php" ><button type="button" class="btn btn-success btn-lg"> <span class="glyphicon glyphicon-log-in"></span>&nbsp Log In</button></a></font></center>');
}
else
{

	$string2=$_SESSION['Username'];

	if (!(strlen($string2)==11 &&  substr_compare($string2, '60003', 0,4)==0))
	{
		echo "<br><br><center><h2>You are not a student of DJSCE IT as your username is not a valid SAP ID and are not allowed to access this page";
	}
	else
	{
		
		echo ('<div class="container">
<center>
    <h1><font color="#000000">DJ IT Image Gallery</h1>
   <h4> Click on the Launch Gallery button below to view all images and videos.</h4>
    <br>
    
    <br></font></center>



    <center>
   
    <form class="form-inline">
        <div class="form-group">
         
        </div>

        <div class="form-group">
            <button id="image-gallery-button" type="button" class="btn btn-warning ">
                <i class="glyphicon glyphicon-picture"></i>
                Launch Image Gallery
            </button>
        </div>
        <div class="btn-group" data-toggle="buttons">
          <label class="btn btn-success ">
            <i class="glyphicon glyphicon-leaf"></i>
            <input id="borderless-checkbox" type="checkbox"> Borderless
          </label>
          <label class="btn btn-primary ">
            <i class="glyphicon glyphicon-fullscreen"></i>
            <input id="fullscreen-checkbox" type="checkbox"> Fullscreen
          </label>
        </div>
    </form>
    <br>
    <a href="../upnew/index.html" > <button type="button" class="btn btn-info"> <span class="glyphicon glyphicon-upload"></span>&nbsp Upload Pics</button></a>
    </center>
    <br>
   

    <div id="links">');

     echo $thelist;  

     echo('
    </div>
    <br>
</div>

<div id="blueimp-gallery" class="blueimp-gallery">
  
    <div class="slides"></div>
  
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
 
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
        
      </ol>
      <div class="carousel-inner">
        <div class="item">
          <center><img data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide" src="1.jpg" style="height:500px !important;"></center>
        </div>
        <div class="item active">
        <center>  <img data-src="holder.js/900x500/auto/#666:#444/text:Second slide" alt="Second slide" src="2.jpg" style="height:500px !important;"></center>
        </div>
     
      </div>
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>

    </div>
    <div class="col-md-2"></div></div>






');


	}

}

?>



       























<!-- QUOTE -->
<hr><br><br><br><br>

<div class="row">
<div class="col-md-1"></div>
<div class="col-md-6">
<blockquote>
  <p><font color="black">Power resides where men believe it resides.</p>
  <small><cite title="Source Title">Lord Varys.</cite></small></font>
</blockquote>
</div>
</div>


  <!-- End quote -->


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation and button states -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="../js/bootstrap-image-gallery.js"></script>
<script src="../js/demo.js"></script>
</body> 
</html>
