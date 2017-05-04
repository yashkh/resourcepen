<?php        
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home</title>


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

    <body >


  <h1> <font color="orange">Resource Pen</font><small> - The final stop for your engineering resources.</small></h1><hr>

     
      <!-- Start NAV -->

      <div class="navbar navbar-default" >
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
             echo (' <li><a href="reg/login.php" > <button type="button" class="btn btn-success btn-sm"> <span class="glyphicon glyphicon-log-in"></span>&nbsp Log In</button></a></li>
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

    <!-- END NAV -->


    <!-- Start Page -->

   <br><br>
      <div class="row">
        
        <div class="col-md-12">
            <div class="jumbotron">
           <h2>Hello, fellow Engineers!</h2>
          <p> <h4><b>CODEFORCES </b>plans to make your life in Engineering a bit simple! <br><br>Want help with your academics or want guidance to excel in your career?<br>We provide you with all the resources required in order to tread on this tough road called engineering!<br><br>
          So what are you waiting for, check out the various sections below and explore this website!<br><br></h4></p>
           <?php

            
            if(!isset($_SESSION['Username'])){
             echo ('<h4>And yeah! Do not forget to signup inorder to get the best out of this site.</h4><br><p><a href="reg/index.php" class="btn btn-danger " role="button">Sign Up</a></p>');
           }

           else
           {
            
            echo ('');
          }
          ?>

           
            </div>
            
       </div>


</div>
<hr><br>



<div class="row">
<div class=" col-md-3">
 <center>
   <div class="thumbnail">
   <br>
      <img  src="img/acad.jpg" class="img-circle img-responsive"  alt="..."  style="width:250px !important; height:250px !important;">
      <br>

      <div class="caption">
        <h2>Academics</h2>
       
        
        <p>Providing various tutorials and resources for writing research papers and coding competitions.<br>
        <center><a href="academics.php"  type="button" class="btn btn-warning">Take me there!</a></center> </p>
     
    </div>
    </center>
  </div>


  <div class=" col-md-3">
  <center>
   <div class="thumbnail"><br>
      <img  src="img/dwn.jpg" class="img-circle img-responsive"  alt="..."  style="width:250px !important; height:250px !important;">
      <div class="caption">
      <br>
        <h2>Downloads</h2>
        <p>Latest E-Books, University Papers, Assignments and Syllabus found here!<br><br>
        <center><a href="download.php"  type="button" class="btn btn-warning">Take me there!</a></center> </p>
      </div>
    </div>
    </center>
  </div>
<div class=" col-md-3">
 <center>
   <div class="thumbnail"><br>
      <img data-src="img/be.jpg" src="img/be.jpg" class="img-circle img-responsive"  alt="..."  style="width:250px !important;">
      <div class="caption"><br>
        <h2>Future Endeavours</h2>
    <p>So looking to further enhance your career? Find GRE, CAT and Placement preparation materials on this page.<br>
        <center><a href="be.php"  type="button" class="btn btn-warning">Take me there!</a></center> </p>
      </div>
    </div>
    </center>

  </div>
  <div class=" col-md-3">
 <center>
   <div class="thumbnail">
   <br>
      <img data-src="img2.jpg" src="img/joke.jpg" class="img-circle img-responsive"  alt="..."  style="width:250px !important;">
      <br>

      <div class="caption">
        <h2>Trolls and Jokes</h2>
       
      
      <p>Presenting the light side of Engineering. Laugh your hearts out with our collection of these Trolls and Jokes.<br>
        <center><a href="trolls/trolls.php"  type="button" class="btn btn-warning">Take me there!</a></center> </p>
     
    </div>
    </center>
  </div>
</div>



<!--
<hr>
<center><h2>Recent Updates</h2></center>

<div class="row">


</div>

-->

<br><hr>




<!-- QUOTE -->

<div class="row">
<div class="col-md-1"></div>
<div class="col-md-6">
<blockquote>
  <p>The question of whether computers can think is like the question of whether submarines can swim.</p>
  <small><cite title="Source Title">Edsger W. Dijkstra</cite></small>
</blockquote>
</div>
</div>


  <!-- End quote -->


  <!-- SOCIAL -->






  <!-- end Social -->

    
 <!-- End Page -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>