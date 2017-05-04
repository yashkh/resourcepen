<?php
session_start();
?>





<?php
$thelist="";
 if ($handle = opendir('.')) {
   while (false !== ($file = readdir($handle))) {
          if ($file != "." && $file != ".." && $file!="trolls.php") {
            $thelist .= '<img src="'.$file.'" class="img-responsive"><br><br><br><br><br><hr><br><br>&nbsp;&nbsp;';
          }
       }
  closedir($handle);
  }
?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Trolls & Jokes</title>




 <!--[if lt IE 9]><script src="https://di8vc3anm8wl1.cloudfront.net/static/lib/html5shiv.js"></script><![endif]-->
 <script src="https://di8vc3anm8wl1.cloudfront.net/static/lib/jquery-1.8.3.min.js"></script> 




<!-- Bootstrap -->
<link href="../css/bootstrap.css" rel="stylesheet">


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head> 
<body > 
  <h1> <font color="orange">Resource Pen</font><small> - The final stop for your engineering resources.</small></h1><hr>

<!-- START NAV -->
  <div class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../home.php">Home</a>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
          <ul class="nav navbar-nav">

            <li class="dropdown">
              <a href="#" class="dropdown-toggle " data-toggle="dropdown">Academics <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="../academics.php#tuts">Video Tutorials</a></li>
                <li><a href="../academics.php#pap">Research Papers</a></li>
                <li><a href="../academics.php#icpc">ACM-ICPC</a></li> 
                <li><a href="../academics.php#icacta">ICACTA Conference</a></li>

              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle " data-toggle="dropdown">Downloads <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="../download.php#ebook">E-Books and Solutions</a></li>
                <li><a href="../download.php#paper">University Papers</a></li>
                <li><a href="../download.php#syl">Syllabus</a></li>
                <li><a href="../download.php#assign">Assignments</a></li>

              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle " data-toggle="dropdown">Future Endeavours <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="../be.php#">GRE Resources</a></li>
                <li><a href="../be.php#">CAT Resources</a></li>
                <li><a href="../be.php#">Placement Resources</a></li>        
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle " data-toggle="dropdown">Exclusive DJ-IT <b class="caret"></b></a>
              <ul class="dropdown-menu">

                <li><a href="../gallery/images/gallery.php">Photo Gallery</a></li>
                <li><a href="../djit.php">Mini Games</a></li>  
                       
              </ul>
            </li>
            <li><a href="../chat/index.php" >Chat & Confessions </a></li>
            <li><a href="#" > Trolls & Jokes </a></li>
            <li><a href="../aboutus.php" >Approach Us </a></li>

          </ul>

          <ul class="nav navbar-nav navbar-right">
           
            <?php

            
            if(!isset($_SESSION['Username'])){
             echo (' <li><a href="../reg/login.php" > <button type="button" class="btn btn-success btn-sm"> <span class="glyphicon glyphicon-log-in"></span>&nbsp Log In</button></a></li>
    <li><a href="../reg/index.php"> <button type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-new-window"></span>&nbsp Sign Up</button></a></li>');
           }

           else
           {
            echo '<li><h5><font color="#ffffff">Welcome <br>', $_SESSION['Username'] ,'&nbsp!' ; 
            echo ('</font></h5></li><li><a href="../logout.php" > <button type="button" class="btn btn-success btn-sm"> <span class="glyphicon glyphicon-log-in"></span>&nbsp Log Out</button></a></li>');
          }
          ?>


        </ul>
      </div>
    </div>

<!-- END NAV -->

<br><br>

<center><h1>Trolls and Jokes:</h1></center>
<br><hr><hr>

<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<center>

<?php echo $thelist;  ?>

</center>
</div>
<div class="col-md-2"></div>
</div>

<br><br>

<!-- QUOTE -->

<div class="row">
<div class="col-md-1"></div>
<div class="col-md-6">
<blockquote>
  <p>I do not fear computers. I fear the lack of them.</p>
  <small><cite title="Source Title">Isaac Asimov.</cite></small>
</blockquote>
</div>
</div>

<center><a href="#">Back to Top</a></center>
<br><br>



  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>