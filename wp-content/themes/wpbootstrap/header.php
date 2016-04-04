<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    

    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>

    
    <!-- Link to Template CSS -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>

   
  </head>

<body role="document">


<!--
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="header row">
          <div class="col-lg-7"><a class="brand" href="<?php echo site_url(); ?>"><img class="logo img-responsive" src="/wp-content/themes/wpbootstrap/theme-images/revertech-logo.png"></a></div>
          <div class="col-lg-5">
            <div class="header-buttons row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><button class="btn btn-success">Resources</button></div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 contact-button"><button class="btn btn-warning">Contact Us</button></div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="dropdown-menu">
              
          </ul>
        </div> /.nav-collapse 
      </div>
    </nav>
-->
<div class="container">
<div id="header" class="header fixed">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="header row">
          <div class="title-area col-lg-7"><a class="brand" href="<?php echo site_url(); ?>"><img class="logo img-responsive" src="http://joeylangley.com/rts/wp-content/themes/wpbootstrap/theme-images/revertech-logo.png"></a></div>
          <div class="col-lg-5">
            <div class="header-buttons row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 resource-button"><button class="btn btn-warning">RTS Portals</button></div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 contact-button"><a href="http://joeylangley.com/rts/contact/"><button class="btn btn-success">Contact Us</button></a></div>
            </div>
          </div>
        </div>
      </div>
<!-- Brand and toggle get grouped for better mobile display --> 
  <div class="container">
  <div class="btn-group navbar-header" role="group"> 
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
      <span class="sr-only">Toggle navigation</span> 
      <span class="icon-bar"></span> 
      <span class="icon-bar"></span> 
      <span class="icon-bar"></span> 
    </button>
  </div> 
  <!-- Collect the nav links, forms, and other content for toggling --> 
  <div class="collapse navbar-collapse navbar-ex1-collapse"> 
<?php /* Primary navigation */
wp_nav_menu( array(
  'menu' => 'top_menu',
  'depth' => 2,
  'container' => false,
  'menu_class' => 'nav navbar-nav',
  //Process nav menu using our custom nav walker
  'walker' => new wp_bootstrap_navwalker())
);
?>
  </div>
</div>
</nav>

  <div id="menu-spacing" class="hide-for-medium-down nav-margin-top">
  </div>

</div>
</div>
<script>
jQuery(document).ready(function ($){
$(window).scroll(function () {
    if ($(document).scrollTop() == 0) {
        $('#header').removeClass('tiny');
        $('#menu-spacing').addClass('nav-margin-top');
        $('.title-area img').attr('src', 'http://joeylangley.com/rts/wp-content/themes/wpbootstrap/theme-images/revertech-logo.png');
        $('.navbar-toggle').removeClass('small');
        $('.contact-button').removeClass('small');
        $('.resource-button').removeClass('small');
        $('.header-buttons').removeClass('small');
        $('.navbar-nav').removeClass('small');
    } else {
        $('#header').addClass('tiny');
        $('#menu-spacing').removeClass('nav-margin-top');
        $('.title-area img').attr('src', 'http://joeylangley.com/rts/wp-content/themes/wpbootstrap/theme-images/rts-circle-logo.png');
        $('.navbar-toggle').addClass('small');
        $('.contact-button').addClass('small');
        $('.resource-button').addClass('small');
        $('.header-buttons').addClass('small');
        $('.navbar-nav').addClass('small');
    }
});

$(window).scroll(function() {
  if ($(document).scrollTop() > 50) {
    $('nav').addClass('shrink');
  } else {
    $('nav').removeClass('shrink');
  }
});
});
</script>
