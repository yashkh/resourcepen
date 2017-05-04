<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Future Endeavours</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	

  
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

<!-- END NAV -->



<!--start Page -->



<div class="jumbotron">
  <h1><u>Future Endeavours</u></h1>
  <br>
  <p>Already preparing for the future? Dont you worry for we have all the resources you will need to plan your future career. Doing MS in US will make you give GRE for which various Sample Tests, Word Lists and CDs are available. Resources for CAT entrance are also provided. Securing a job made simple with all the placement papers, interview questions, resume formats and self-help books provided below.</p>
  
</div>



<div class="container marketing">

     

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-9">
          <h2 class="featurette-heading">GRE Resources.<span class="text-muted">&nbsp&nbsp Your masterkey to cracking GRE.</span></h2>
         <br>
          <div class="panel-group" id="accordion3">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion3" href="#collapseOne3">
          All you need to know about GRE.
        </a>
      </h4>
    </div>
    <div id="collapseOne3" class="panel-collapse collapse ">
      <div class="panel-body">
       Agreed, GRE is a tough nut to crack, but only when you lack proper planning, strategy and discipline. It will suddenly start looking orderly, logical and attainable with a little preparation and foresight. GRE preparation is a rigorous mental workout which builds your accuracy, timing and confidence after consistent practice.

      <br>
      <br>
     
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion3" href="#collapseTwo3">
          GRE Structure.
        </a>
      </h4>
    </div>
    <div id="collapseTwo3" class="panel-collapse collapse">
      <div class="panel-body">
      The computer-based General Test is composed of 3 sections:<br>
	Verbal Reasoning (English)<br>
	Quantitative Reasoning (Math)<br>
	Analytical Writing sections (Essays)<br>

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion1" href="#collapseThree3">
         Preparation Resources.
        </a>
      </h4>
    </div>
    <div id="collapseThree3" class="panel-collapse collapse">
      <div class="panel-body">
        Even though the exam pattern has changed, most part of the preparation remains the same. Since Antonyms and Analogy aren't a part of the new syllabus, learning/memorising the word is NO MORE important. Still, it is always advised to have strong vocabulary as sections like sentence. Following are the various resources which will help you prepare for GRE.
        <br>
       
    
      </div>
    </div>
  </div>
</div>
        </div>
        <div class="col-md-3">
        <center>
          <img class="featurette-image img-responsive img-circle"  alt="500x500" src="img.jpg">
          </center>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-3">
        <center>
          <img class="featurette-image img-responsive img-circle"  alt="500x500" src="img.jpg">
          </center>
        </div>
        <div class="col-md-9">
          <h2 class="featurette-heading">CAT Resources. <span class="text-muted">Can  you Manage it?</span></h2>
           <br>
          <div class="panel-group" id="accordion2">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2">
          All you need to know about CAT.
        </a>
      </h4>
    </div>
    <div id="collapseOne2" class="panel-collapse collapse ">
      <div class="panel-body">
        
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2">
          Exam Structure.
        </a>
      </h4>
    </div>
    <div id="collapseTwo2" class="panel-collapse collapse">
      <div class="panel-body">

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
         Preparation Resources.
        </a>
      </h4>
    </div>
    <div id="collapseThree2" class="panel-collapse collapse">
      <div class="panel-body">
       
        <br>
        <br>

      </div>
    </div>
  </div>
</div>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-9">
          <h2 class="featurette-heading">Placement Resources. <span class="text-muted">Let's serve the industry.</span></h2>
          <br>
          <div class="panel-group" id="accordion1">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
          The Placement Process.
        </a>
      </h4>
    </div>
    <div id="collapseOne1" class="panel-collapse collapse ">
      <div class="panel-body">
       Coming Soon!
      <br>
      <br>
     
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
          Past Interview Papers.
        </a>
      </h4>
    </div>
    <div id="collapseTwo1" class="panel-collapse collapse">
      <div class="panel-body">
    Coming Soon!
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
         Help Books, Sample Resumes.
        </a>
      </h4>
    </div>
    <div id="collapseThree1" class="panel-collapse collapse">
      <div class="panel-body">

        
       Coming Soon!   
      </div>
    </div>
  </div>
</div>
        </div>
        <div class="col-md-3">
        <center>
        <br><br>
          <img class="featurette-image img-responsive img-circle"  src="img.jpg">
          </center>
        </div>
      </div>

      <hr class="featurette-divider">

    
<br><br>
      <!-- /END THE FEATURETTES -->



<!-- QUOTE -->

<div class="row">
<div class="col-md-1"></div>
<div class="col-md-6">
<blockquote>
  <p>A computer once beat me at chess. But it was no match for me at kick boxing.</p>
  <small><cite title="Source Title">Emo Philips.</cite></small>
</blockquote>
</div>
</div>


  <!-- End quote -->

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
     
      </footer>

    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>