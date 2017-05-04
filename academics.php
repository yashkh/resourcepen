<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Academics</title>

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

<br>

<div class="jumbotron">
  <h1>Academics</h1>
  <br>
  <p>So you in a mood to study? Well, here on this page you will find various E-Tutorials of the subjects from the best of faculties. Also, resources for writing Research Papers are available. To flex your coding muscles, try participating in ACM-ICPC. Made a breakthrough innovation in your field? Try publishing your research paper in the upcoming ICACTA Conference.</p>
  
</div>


<a name="tuts"></a>

<div class="container marketing">

     

      <!-- START THE FEATURETTES -->
<a name="tuts"></a>
      <hr class="featurette-divider">

      <div class="row featurette" id="tuts">
        <div class="col-md-9">
          <h2 class="featurette-heading">Video Tutorials & E-Courses.<span class="text-muted">&nbsp&nbsp Watch and Learn.</span></h2>
          <br>

                  <div class="panel-group" id="accordion4">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion4" href="#collapseOne4">
          Introduction to Computer Science and Programming.
        </a>
      </h4>
    </div>
    <div id="collapseOne4" class="panel-collapse collapse ">
      <div class="panel-body">
      <a href="https://www.edx.org/course/harvardx/harvardx-cs50x-introduction-computer-1022#.UzRLjvmSw08" target="_blank">edX CS50x - Introduction to Computer Science by Harvard University.</a><br>
      <a href="https://www.edx.org/course/iitbombayx/iitbombayx-cs101-1x-introduction-1447#.UzRMHfmSw08" target="_blank">edX CS101x - Introduction to Computer Programming by IIT Bombay.</a><br>
      <a href="https://www.youtube.com/playlist?list=PLBD5381FE500534C0" target="_blank">Course on JAVA by Stanford University.</a><br>
         <a href="https://www.udemy.com/java-tutorial/" target="_blank">JAVA For Complete Beginners on Udemy.</a><br>
          <a href="https://www.edx.org/course/mitx/mitx-6-00x-introduction-computer-science-586#.UzRNN_mSw08" target="_blank">edX 6.00x - Introduction to Programming using PYTHON by MIT.</a><br>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion4" href="#collapseTwo4">
          Data Structures and Algorithms.
        </a>
      </h4>
    </div>
    <div id="collapseTwo4" class="panel-collapse collapse">
      <div class="panel-body">
       <a href="http://ocw.mit.edu/courses/electrical-engineering-and-computer-science/6-046j-introduction-to-algorithms-sma-5503-fall-2005/" target="_blank"> Intorduction To Algorithms MIT Open Courseware.</a><br>
      	 <a href="http://ocw.mit.edu/courses/electrical-engineering-and-computer-science/6-851-advanced-data-structures-spring-2012/"ltarget="_blank">Advanced Data Structures MIT Open Courseware.</a><br>
      	   <a href="http://www.youtube.com/watch?v=zWg7U0OEAoE&list=PLBF3763AF2E1C572F" target="_blank">Data Structures and Algorithms by IIT Delhi.</a><br>

          <a href="http://www.youtube.com/watch?v=5Y8Lfsreeck&list=PL7DC83C6B3312DF1E" target="_blank">Design and Analysis of Algorithms by IIT Delhi.</a><br>

           <a href="http://www.youtube.com/watch?v=S47aSEqm_0I&list=PLD9781AC5EBC9FA16" target="_blank">Programming and Data Structures.</a><br>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion4" href="#collapseThree4">
         Database Management, Web Programming, Computer Networks.
        </a>
      </h4>
    </div>
    <div id="collapseThree4" class="panel-collapse collapse">
      <div class="panel-body">
<a href="http://www.youtube.com/watch?v=EUzsy3W4I0g&list=PL9426FE14B809CC41" target="_blank">Database Management System.</a><br>
<a href="http://www.youtube.com/watch?v=YOXwcbwSEUo&list=PL04D5787E247DC324" target="_blank">Internet Technologies.</a><br>
<a href="http://www.youtube.com/watch?v=cXRIFijfcZI&list=PLbMVogVj5nJQ3EZa7mBWKaKOJqvS9UE0G" target="_blank">Computer Networks.</a>

        <br>

      </div>
    </div>
  </div>
   <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion4" href="#collapseFour4">
         Cloud Computing and Advanced Computer Science.
        </a>
      </h4>
    </div>
    <div id="collapseFour4" class="panel-collapse collapse">
      <div class="panel-body">

<a href="https://www.edx.org/course/uc-berkeleyx/uc-berkeleyx-cs169-1x-software-service-1136#.UzRY8fmSw08" target="_blank">Software as a Service SaaS by Berkeley University.</a><br>
<a href="http://www.lynda.com/Cloud-Computing-training-tutorials/1385-0.html" target="_blank">Cloud Computing by Lynda.</a><br>
<a href="https://www.youtube.com/watch?v=7jZBVb-c_vs&list=PLD8AF625E53B0691F" target="_blank">High Performance Computer Architecture.</a><br>
<a href="https://www.youtube.com/watch?v=Q-HugPvA7GQ&list=PL71FE85723FD414D7" target="_blank">Cryptography and Network Security.</a><br>

        
      </div>
    </div>
  </div>
</div>      
        </div>
        <div class="col-md-3">
        <center>
          <img class="featurette-image img-responsive img-circle"  alt="500x500" src="img/video.png">
          </center>
        </div>
      </div>


<br>





      <hr class="featurette-divider">

      <div class="row featurette" id="pap">
        <div class="col-md-3">
        <center>
          <img class="featurette-image img-responsive img-circle"  alt="500x500" src="img/research.jpg" style="width:300px !important; height:300px !important;">
          </center>
        </div>
        <div class="col-md-9">
          <h2 class="featurette-heading">Research Papers. <span class="text-muted">Publish your discovery.</span></h2>
           <br>
          <div class="panel-group" id="accordion2">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2">
          What are Technical Research Papers?
        </a>
      </h4>
    </div>
    <div id="collapseOne2" class="panel-collapse collapse ">
      <div class="panel-body">


        A research paper is an expanded essay that presents your own interpretation or evaluation or argument. When you write an essay, you use everything that you personally know and have thought about a subject. When you write a research paper you build upon what you know about the subject and make a deliberate attempt to find out what experts know. A research paper involves surveying a field of knowledge in order to find the best possible information in that field. And that survey can be orderly and focused, if you know how to approach it. A research paper is more than the sum of your sources, more than a collection of different pieces of information about a topic, and more than a review of the literature in a field. A research paper analyzes a perspective or argues a point. 


      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2">
          How to start writing them?
        </a>
      </h4>
    </div>
    <div id="collapseTwo2" class="panel-collapse collapse">
      <div class="panel-body">
       Writing a Research Paper requires great skills and efforts. The following Document compiles the various tricks and techniques required to write a good research paper. So download the following document in order to get a crystal clear view on how to go about writing a research paper.<br><br>
       <center><a href="https://docs.google.com/document/d/1_rkY4KXqe0etQZc2ds0wtOfyJpo93oN40KnbD9iHdso/edit?pli=1" target="_blank" type="button" class="btn btn-warning"><span class="glyphicon glyphicon-new-window"></span> How To Write A Research Paper</a></center>



      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
         Helpful Resources.
        </a>
      </h4>
    </div>
    <div id="collapseThree2" class="panel-collapse collapse">
      <div class="panel-body">
        Following are few of the important resources which will help you write a research paper.<br><br>

        <center><a href="http://scholar.google.co.in/" target="_blank" type="button" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-new-window"></span> Google Scholar</a></center>
        <br>
          <center><a href="http://www.springeropen.com/" target="_blank" type="button" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-new-window"></span> Springer Open</a></center>
        <br>
        <center><a href="http://dl.acm.org/" target="_blank" type="button" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-new-window"></span> ACM Digital Library</a></center>
       <br>
       <center><a href="http://ieeexplore.ieee.org/Xplore/home.jsp" target="_blank" type="button" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-new-window"></span> IEEE Xplore</a></center>
       <br>
      </div>
    </div>
  </div>
</div>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette" id="icpc">
        <div class="col-md-9">
          <h2 class="featurette-heading">ACM-ICPC. <span class="text-muted">Unleash the Coder within you.</span></h2>
          <br>
          <div class="panel-group" id="accordion1">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
          What is ACM-ICPC?
        </a>
      </h4>
    </div>
    <div id="collapseOne1" class="panel-collapse collapse ">
      <div class="panel-body">
       The ACM ICPC is considered as the "Olympics of Programming Competitions". It is quite simply, the oldest, largest, and most prestigious programming contest in the world.
      The ACM-ICPC (Association for Computing Machinery - International Collegiate Programming Contest) is a multi-tier, team-based, programming competition. Headquartered at Baylor University, Texas, it operates according to the rules and regulations formulated by the ACM. The contest participants come from over 2,000 universities that are spread across 80 countries and six continents.
      <br>
      <br>
      Official Website:&nbsp&nbsp <a href="http://icpc.baylor.edu/" target="_blank"> <button type="button" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-new-window"></span>&nbspACM-ICPC</button></a>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
          Contest Rules.
        </a>
      </h4>
    </div>
    <div id="collapseTwo1" class="panel-collapse collapse">
      <div class="panel-body">
      The ICPC is a team competition. Current rules stipulate that each team consist of three students. Participants must be university students, who have had less than five years of university education before the contest. Students who have previously competed in two World Finals or four regional competitions are ineligible to compete again. During contest, the teams are given 5 hours to solve between 8 and 12 programming problems (with 8 typical for regionals and 10 for finals). They must submit solutions as programs in C, C++, or Java. Programs are then run on test data. If a program fails to give a correct answer, the team is notified and can submit another program.
The winner is the team which correctly solves most problems. If necessary to rank teams for medals or prizes among tying teams, the placement of teams is determined by the sum of the elapsed times at each point that they submitted correct solutions plus 20 minutes for each rejected submission of a problem ultimately solved.

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
         Preparation Resources.
        </a>
      </h4>
    </div>
    <div id="collapseThree1" class="panel-collapse collapse">
      <div class="panel-body">
        The recommended language in which to program is C++ because of its Standard Template Library (STL) and also because of its speed.<br>The recommended book for learning algorithms is<a href="https://docs.google.com/uc?id=0B3QqXXBcTkaMd2lBS3RrWUZ0VEU&export=download" target="_blank">  Introduction to Algorithms by Cormen (CLRS)</a>.<br>
        The Following are the various Links and Resources which can be used for preparation:<br>
        <br>
        Syllabus:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="https://drive.google.com/file/d/0B3QqXXBcTkaMX0xwOGtBZkRwaGc/edit?usp=sharing" target="_blank"> <button type="button" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-new-window"></span>&nbspSyllabus</button></a> <br><br>
        Codechef:&nbsp&nbsp&nbsp&nbsp&nbsp <a href="http://www.codechef.com/" target="_blank"> <button type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-new-window"></span>&nbspCodechef</button></a> <br><br>
        SPOJ:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="http://www.spoj.pl/" target="_blank"> <button type="button" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-new-window"></span>&nbspSPOJ</button></a> <br><br>
        CodeForces:&nbsp <a href="http://www.codeforces.com/" target="_blank"> <button type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-new-window"></span>&nbspCodeforces</button></a> <br><br>
          Top Coder:&nbsp&nbsp&nbsp&nbsp <a href="http://www.topcoder.com/" target="_blank"> <button type="button" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-new-window"></span>&nbspTopcoder</button></a> <br><br>
    
      </div>
    </div>
  </div>
</div>
        </div>
        <div class="col-md-3">
        <center>
        <br><br>
          <img class="featurette-image img-responsive img-circle"  src="img/icpc.jpg">
          </center>
        </div>
      </div>

      <hr class="featurette-divider">

       <div class="row featurette" id="icacta">
        <div class="col-md-3">
        <br><br><br>
        <center>
          <img class="featurette-image img-responsive img-circle"  alt="500x500" src="img/icacta.jpg">
         </center>
        </div>
        <div class="col-md-9">
          <h2 class="featurette-heading">ICACTA Conference.<span class="text-muted">&nbsp&nbsp Let the world know your potential.</span></h2>
          <br>
          <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          What is ICACTA?
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse ">
      <div class="panel-body">
        ICACTA is the International Conference on Advanced Computing Technologies and Applications organized by D. J. Sanghvi College of Engineering, Mumbai, India. It will be conducted on the 26th and 27th of March, 2015. The primary objective of ICACTA 2015 is to provide a platform for researchers, academicians, and industry professionals from all over the world to present their research and development activities in the area of computing technologies. The conference will be organized specifically to help the IT industry to derive the advances of next generation computing. It aims to provide participants an opportunity to exchange new ideas and their research work, to establish business or research relations and to find global partners for further collaboration. This conference focuses on recent computing technologies like Soft Computing, Ubiquitous and High Performance Computing, Network Computing, and Computing Applications.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          How can I contribute to it?
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
       ICACTA 2015, is an international conference where original contributions are solicited on topics covered under broad areas such as of Soft Computing, Ubiquitous and High Performance Computing, Network Computing, and Computing Applications. You can view the full list of topics on the <a href="http://www.djicacta.org" target="_blank">official website</a>. Students from DJSCE can also apply for the various committees before 26-03-14.


      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          More Information.
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        People who are interested in this conference can visit the official page for the complete details about the event.
        <br>
        <br>
        <a href="http://www.djicacta.org" target="_blank"> <button type="button" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-new-window"></span>&nbspOfficial Website</button></a>

      </div>
    </div>
  </div>
</div>
        </div>
      </div>
      <br>
      

      <!-- /END THE FEATURETTES -->


     

    
<br><br>


      <!-- QUOTE -->
<hr class="featurette-divider">
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-6">
<blockquote>
  <p>Computers are like Old Testament Gods. Lots of rules but no mercy.</p>
  <small><cite title="Source Title">Joseph Campbell.</cite></small>
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