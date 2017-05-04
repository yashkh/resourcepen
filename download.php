<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Downloads</title>

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
  <h1>Downloads</h1>
  <br>
  <p>The final stop to your download needs. Be it E-books along with solutions, University Papers, Assignments or Syllabus, we have them covered on this page. Just click on the link to start the downloads. No more useless waiting in order to download the files.</p>
  
</div>



<div class="container marketing">

     

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette" id="ebook">
        <div class="col-md-9">
          <h2 class="featurette-heading">E-books & Solutions.<span class="text-muted"> Yes, every book listed here is free!</span></h2>
            <br>
             <p><font size="4">Finding out the books too expensive or you just dont want them to occupy space in your cupboard? Dont worry, we provide you with all the recommended E-Books along with the solutions.<br>If you want to request any other E-Book other than listed below, send a mail to us.</font></p>
            <br>
                    <div class="panel-group" id="accordion5">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion5" href="#collapseOne5">
         Programming Languages.
        </a>
      </h4>
    </div>
    <div id="collapseOne5" class="panel-collapse collapse">
      <div class="panel-body">
       <a href="xyz.html" target="_blank">C The Complete Reference</a><br>
       <a href="xyz.html" target="_blank">C++ The Complete Reference</a><br>
       <a href="xyz.html" target="_blank">JAVA Primer - Balagurusamy</a><br>
       <a href="xyz.html" target="_blank">Head First JAVA</a><br>
       <a href="xyz.html" target="_blank">JAVA The Complete Reference - Herb Schildt</a><br>
       <a href="xyz.html" target="_blank">HTML and CSS The Complete Reference</a><br>
       
       <a href="xyz.html" target="_blank">Beginning Web Programming (HTML XHTML CSS)</a><br>
       <a href="xyz.html" target="_blank">SQL for Dummies</a><br>
       <a href="xyz.html" target="_blank">Object Oriented Programming using JAVA</a><br>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion5" href="#collapseTwo5">
          Data Structures, DBMS, Computer Networks, Automata Theory, Coding Theory.
        </a>
      </h4>
    </div>
    <div id="collapseTwo5" class="panel-collapse collapse">
      <div class="panel-body">
       <a href="" target="_blank">Data Structures and Algorithm Analysis in C - Mark Weiss</a><br>
       <a href="" target="_blank">Data Structures and Algorithms in JAVA</a><br>
       <a href="" target="_blank">Computer Networks 5th ed - AS Tanenbaum</a><br>
       <a href="" target="_blank">Computer Networks 5th ed - AS Tanenbaum Solutions</a><br>
       <a href="" target="_blank">Database System Concepts - Korth</a><br>
       <a href="" target="_blank">Database System Concepts - Korth Solutions</a><br>
       <a href="" target="_blank">Introduction to Automata Theory and Computation - Ullman, Hopcroft, Motwani</a><br>
       <a href="" target="_blank">Introduction to Cryptography and Coding Theory - Trappe, Washington</a><br>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion5" href="#collapseThree5">
         Operating Systems, Hardware Related.
        </a>
      </h4>
    </div>
    <div id="collapseThree5" class="panel-collapse collapse">
      <div class="panel-body">
       <a href="xyz.html" target="_blank">Computer Organization and Architecture - William Stallings</a><br>
       <a href="xyz.html" target="_blank">The 8051 Microcontroller and Embedded Systems</a><br>
       <a href="xyz.html" target="_blank">Modern Digital Electronics - RP Jain</a><br>
       <a href="xyz.html" target="_blank">Operating Systems 5th ed - Galvin</a><br>
     
        
        

      </div>
    </div>
  </div>
</div>

        </div>
        <div class="col-md-3">
        <center>
          <img class="featurette-image img-responsive img-circle"   alt="500x500" src="img/ebook.jpg">
          </center>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette" id="paper">
        <div class="col-md-3">
        <br><br>
        <center>
          <img class="featurette-image img-responsive img-circle"  alt="500x500" src="img/UNI-PAPERS.jpg"  >
          </center>
        </div>
        <div class="col-md-9">
          <h2 class="featurette-heading">University Papers. <span class="text-muted">Ignore them and regret later.</span></h2>
           <br>
           <p><font size="4">All the university papers are available below. Clicking on the respective Sem will start the download of a RAR file consisting of all past year papers of all the subjects in that semester.</font></p><br>
          <div class="panel-group" id="accordion2">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2">
         Information Technology.
        </a>
      </h4>
    </div>
    <div id="collapseOne2" class="panel-collapse collapse">
      <div class="panel-body">
       <a href="xyz.html" target="_blank">SEM-1</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="xyz.html" target="_blank">SEM-2</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="xyz.html" target="_blank">SEM-3</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="xyz.html" target="_blank">SEM-4</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="xyz.html" target="_blank">SEM-5</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="xyz.html" target="_blank">SEM-6</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="xyz.html" target="_blank">SEM-7</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="xyz.html" target="_blank">SEM-8</a>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2">
          Computer Science.
        </a>
      </h4>
    </div>
    <div id="collapseTwo2" class="panel-collapse collapse">
      <div class="panel-body">
      <a href="xyz.html" target="_blank">SEM-1</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="xyz.html" target="_blank">SEM-2</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="xyz.html" target="_blank">SEM-3</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="xyz.html" target="_blank">SEM-4</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="xyz.html" target="_blank">SEM-5</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="xyz.html" target="_blank">SEM-6</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="xyz.html" target="_blank">SEM-7</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="xyz.html" target="_blank">SEM-8</a>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
         Extra Papers.
        </a>
      </h4>
    </div>
    <div id="collapseThree2" class="panel-collapse collapse">
      <div class="panel-body">
        Resources go here.
        <br>
        <br>
        <a href="http://www.djicacta.org" target="_blank"> <button type="button" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-new-window"></span>&nbspOfficial Website</button></a>

      </div>
    </div>
  </div>
</div>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette" id="syl">
        <div class="col-md-9">
          <h2 class="featurette-heading">Syllabus. <span class="text-muted">No end to it.</span></h2>
          <p><font size="4">Finally it's time for your exams and the first think that come's to your mind is,"Syllabus kya hai bhai??".May be you wish to study exactly what's been prescribed by your University or else you are a very intelligent human being!  Either way your hunt for the syllabi ends here - complete syllabus of all engineering courses under Mumbai University (MU). Enjoy!</font><br><br>
          <br>
          <div class="panel-group" id="accordion1">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
          Information Technology.
        </a>
      </h4>
    </div>
    <div id="collapseOne1" class="panel-collapse collapse ">
      <div class="panel-body">
      <a href="xyz.html" target="_blank">First Year</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="xyz.html" target="_blank">Second Year</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="xyz.html" target="_blank">Third Year</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="xyz.html" target="_blank">Fourth Year</a>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
          Computer Science.
        </a>
      </h4>
    </div>
    <div id="collapseTwo1" class="panel-collapse collapse">
      <div class="panel-body">
        <a href="xyz.html" target="_blank">First Year</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="xyz.html" target="_blank">Second Year</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="xyz.html" target="_blank">Third Year</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="xyz.html" target="_blank">Fourth Year</a>
      </div>
    </div>
  </div>
 
</div>
        </div>
        <div class="col-md-3">
        <center>
        <br><br>
          <img class="featurette-image img-responsive img-circle"  src="img/syl.jpg">
          </center>
        </div>
      </div>

      <hr class="featurette-divider">

       <div class="row featurette" id="assign">
        <div class="col-md-3">
        <br><br><br>
        <center>
          <img class="featurette-image img-responsive img-circle"  alt="500x500" src="img/assign.jpg">
         </center>
        </div>
        <div class="col-md-9">
          <h2 class="featurette-heading">Assignments.<span class="text-muted">&nbsp&nbspA Complete waste of Time.</span></h2>
          <p><b><font size="4">Assignments</b>: A task given to students by their teachers to be completed out of the class time. A useless task given to students by their teachers. Understood?? Ohh c'mon these are Assignments! Just make them look Big.</font>
          <br><br>
          <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          Subject 1
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse">
      <div class="panel-body">
      <a href="xyz.html" target="_blank">Assignment-1</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          Subject-2
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
       <a href="xyz.html" target="_blank">Assignment-1</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          Subject-3
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        <a href="xyz.html" target="_blank">Assignment-1</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </div>
    </div>
  </div>
</div>
        </div>
      </div>
      <br>
      <br>

<hr>
      <!-- /END THE FEATURETTES -->



<!-- QUOTE -->
<br><br><br>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-6">
<blockquote>
  <p>Computers are useless. They can only give you answers.</p>
  <small><cite title="Source Title">Pablo Picasso.</cite></small>
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