<?php
 if ($handle = opendir('.')) {
   while (false !== ($file = readdir($handle))) {
          if ($file != "." && $file != "..") {
            $thelist .= '<a href="'.$file.'"><img src="'.$file.'" style="width:200px;!important height:200px;!important"></a>&nbsp;&nbsp;';
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
<title>User Uploaded Gallery</title>




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
<h1>User Uploaded Images:</h1>

<?php echo $thelist;  ?>






  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>