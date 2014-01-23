<?php
  $pages = array(
    'Current Execs',
    'Career Fair',
    //'Library',
    //'Tutors',
    'http://uofscsss.tumblr.com/'=>'Tumblr',
    'https://twitter.com/UofSCSSS'=>'Twitter'
  );

$nav = '';
foreach($pages as $url=>$page){
  if(!is_string($url)){
    $url = strtolower(str_replace(' ','-',$page)).'.php';
  }

  if(preg_match("/$page/", $_SERVER['PHP_SELF'])){
      $nav .='<li class="active">';
  } else {
      $nav .='<li>';
  }
  $nav .= "<a href='$url'>$page</a></li>";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CSSS Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/csss.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="ico/favicon.png">
  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href=".">CSSS</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <?php echo $nav;?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="hero-unit">
      <img class="logo" src='img/csss_logo_color.png'/>
    </div>
    <div class="container">
