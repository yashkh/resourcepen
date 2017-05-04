<?php



include ('database_connection.php');
if (isset($_POST['formsubmitted'])) {
    $error = array();//Declare An Array to store any error message  
    if (empty($_POST['name'])) {//if no name has been supplied 
        $error[] = 'Please Enter a name ';//add to array "error"
      } else {
        $name = $_POST['name'];//else assign it a variable
      }

      if (empty($_POST['e-mail'])) {
        $error[] = 'Please Enter your E-mail ';
      } else {


        if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['e-mail'])) {
           //regular expression for email validation
          $Email = $_POST['e-mail'];
        } else {
         $error[] = 'Your E-Mail Address is invalid  ';
       }


     }


     if (empty($_POST['Password'])) {
      $error[] = 'Please Enter Your Password ';
    } else {
      $Password = $_POST['Password'];
    }


    if (empty($error)) //send to Database if there's no error '

    { // If everything's OK...

        // Make sure the email address is available:
    $query_verify_email = "SELECT * FROM members  WHERE Email ='$Email'";
    $result_verify_email = mysqli_query($dbc, $query_verify_email);
        if (!$result_verify_email) {//if the Query Failed ,similar to if($result_verify_email==false)
          echo ' Database Error Occured ';
        }

        if (mysqli_num_rows($result_verify_email) == 0) { // IF no previous user is using this email .


            // Create a unique  activation code:
          $activation = md5(uniqid(rand(), true));


          $query_insert_user = "INSERT INTO `members` ( `Username`, `Email`, `Password`) VALUES ( '$name', '$Email', '$Password')";
          $passmd5=MD5($Password);
          $query_insert_user2 = "INSERT INTO `s_members` ( `id`, `name`, `pass`) VALUES ( NULL, '$name', '$passmd5')";

          mysqli_query($dbc, $query_insert_user2);

          $result_insert_user = mysqli_query($dbc, $query_insert_user);
          if (!$result_insert_user) {
            echo 'Query Failed ';
          }

            if (mysqli_affected_rows($dbc) == 1) { //If the Insert Query was successfull.


                // Send the email:
              $message = " To activate your account, please click on this link:\n\n";
              $message .= WEBSITE_URL . '/activate.php?email=' . urlencode($Email) . "&key=$activation";
            //  mail($Email, 'Registration Confirmation', $message, 'From: resourcepen@gmail.com');




    




                // Flush the buffered output.


                // Finish the page:
echo '<div class="alert alert-dismissable alert-success">
<button type="button" class="close" data-dismiss="alert">×</button>Thank you for
registering!You can now start using your account! </div>';


            } else { // If it did not run OK.
              echo '<div class="alert alert-dismissable alert-danger">
              <button type="button" class="close" data-dismiss="alert">×</button>You could not be registered due to a system
              error. We apologize for any
              inconvenience.</div>';
            }

        } else { // The email address is not available.
          echo '<div class="alert alert-dismissable alert-danger">
          <button type="button" class="close" data-dismiss="alert">×</button>That email
          address has already been registered.
        </div>';
      }

    } else {//If the "error" array contains error msg , display them



    echo '<div class="alert alert-dismissable alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button> <ol>';
    foreach ($error as $key => $values) {

      echo '	<li>'.$values.'</li>';



    }
    echo '</ol></div>';

  }
  
    mysqli_close($dbc);//Close the DB Connection

} // End of the main Submit conditional.



?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Registration Form</title>


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


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
            <li><a href="../trolls/trolls.php" > Trolls & Jokes </a></li>
            <li><a href="../aboutus.php" >Approach Us </a></li>

          </ul>

          <ul class="nav navbar-nav navbar-right">

            <?php

            
            if(!isset($_SESSION['Username'])){
             echo (' <li><a href="login.php" > <button type="button" class="btn btn-success btn-sm"> <span class="glyphicon glyphicon-log-in"></span>&nbsp Log In</button></a></li>
              <li><a href="#"> <button type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-new-window"></span>&nbsp Sign Up</button></a></li>');
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


    <div class="col-md-3"></div>
    <div class="col-md-6">
      <br>
      <br>

      <form action="index.php" method="post" class="form-horizontal">
        <fieldset>
          <legend><center><u><b>Sign-Up</b></u></legend></center>
          <br>
          <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Name:</label>
            <div class="col-lg-8">
              <div class="input-group">
                <input type="text" class="form-control" id="name" name="name" size="235" placeholder="Enter your SAP ID if you in DJ IT.">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span></div>
              </div>
            </div>

            <div class="form-group">
              <label for="inputEmail" class="col-lg-2 control-label">E-mail:</label>
              <div class="col-lg-8">
                <div class="input-group">

                  <input type="text" class="form-control" id="e-mail" name="e-mail" size="235" placeholder="Enter Email">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-globe"></span></span></div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Password:</label>
                <div class="col-lg-8">
                  <div class="input-group">
                    <input type="password" class="form-control" id="Password" name="Password" size="25" placeholder="Enter Password">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-certificate"></span></span></div>

                  </div>
                </div>
                <center>
                  <br>
                  <button type="reset" class="btn btn-danger"><span class="glyphicon glyphicon-refresh"></span>&nbspReset</button>&nbsp&nbsp&nbsp
                  <input type="hidden" name="formsubmitted" value="TRUE" />
                  <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-log-in"></span>&nbsp&nbspRegister</button></center>
                  <br>
                  <br>
                </div>
              </div>
            </fieldset>
          </form>
        </div>


        <div class="col-md-3"></div>


        <br><br>
        <!-- QUOTE -->

        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-6">
            <blockquote>
              <p>The question of whether computers can think is like the question of whether submarines can swim.</p>
              <small><cite title="Source Title">Edsger W. Dijkstra</cite></small>
            </blockquote>
          </div>
        </div>

        <center><a href="#">Back to Top</a></center>
        <br><br>





        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
      </body>
      </html>
