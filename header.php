<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>"> <!--instead of UTF-8 -->
  <title><?php wp_title( '|', true, 'right' ); ?></title> <!-- instead of your title -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bootstrap/css/bootstrap.min.css">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Amatic+SC' rel='stylesheet' type='text/css'>
     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- Leave those next 4 lines if you care about users using IE8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" /> <!-- instead of style.css -->
   <?php wp_head(); ?> 
</head>

<body>
<!-- <div class="container-fluid"> <-->
<header>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-2">
        <div id="welcome">
          <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Follow'Her Logo" class="pastille"/>
           <div class="hidden_message">
             <p class="home">HOME</p>
           </div>
          </a>
        </div>
      </div>
      <div class="col-xs-10 col-lg-7 marg">
        <nav class="navbar navbar-default navbar-transparent" role="navigation">
            <div class="container-navbar-collapse">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <!-- Ajouter un menu (étape 3 avec Bootstrap) et gérée par WordPress.  -->
              <?php
                wp_nav_menu( array(
                    'menu'              => 'accueil',
                    'theme_location'    => 'accueil',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse row',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
                 ?>
        
            </div><!-- /.container-fluid -->
        </nav>
      </div>
      <div class="col-lg-3 marg hidden-xs hidden-sm hidden-md">
          <ul class ="list-inline text-right orange_clair">
              <li class="sousmenu"><a href="#" target="_blank"><i class="centre fa fa-map-marker white"></i></a></li>
                  <!-- redirige vers une page Google Map où je me géolocalise-->
              <li class="sousmenu"><a href="http://www.facebook.com/projet.followher" target="_blank"> <i class="fa fa-facebook"></i> </a> </li>
              <li class="sousmenu" data-uk-tooltip title="Twitter"><a href="https://twitter.com/projetfollowher" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <li class="sousmenu"><a href=#> <i class="fa fa-envelope-o"></i> </a></li>
                  <!-- permet d'envoyer un mail -->   
              <li> 
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                      <i class="fa fa-cog orange_clair"></i>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">FR</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ANG</a></li>
                    </ul>
                </div>
              </li>
            <!-- <li class="sousmenu"><a href=#>ANG</a></li>
            <li class="sousmenu"><a href=#>FR</a></li> -->
          </ul>
      </div>
    </div>
  </div>
</header>




