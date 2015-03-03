<!-- 
     * Shakespeare's Kids
     * Copyright (C) Sharon McNally
     *
     * Developed by: Patrick Menlove  patrickmenlove@hotmail.co.uk  GitHub: pm990320
-->
<!DOCTYPE html>
<html>
<head <?php language_attributes() ?> >
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title(); ?></title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
    <link href='http://fonts.googleapis.com/css?family=Pompiere|Bilbo|Tangerine' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

    <?php wp_head(); ?>
</head>
<body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1374412376212948&pages=1&page=239296332794155&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

    <div id="bgimgwrapper" class="hidden-xs">
        <img id="bgimg" class="noselect" src="<?php echo get_template_directory_uri(); ?>/img/scroll_better.png" alt="scroll">
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">

                <header class="row text-center hidden-xs">
                    <h1 id="header" class="noselect">Shakespeare's Kids</h1>
                    <h1 id="subheading" class="noselect hidden-sm">Bringing literature to life!</h1>
                </header>

                <div class="row navbar navbar-default" role="navigation" id="navbar">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".collapseme">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1 class="brand visible-xs" id="smallheader">Shakespeare's Kids</h1>
                    </div>
                    <div class="collapse navbar-collapse collapseme" id="navmenu" style="border:none;outline:none;">
                        <ul class="nav nav-pills nav-justified noselect">
                            <!-- Requires WP Bootstrap Menu plugin -->
                            <?php if (function_exists('getNavMenu')): ?>
                                <?php echo getNavMenu('mainmenu'); ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div><!-- div.row -->

                <div class="row" id="content-row">
                    <aside id="side-content" class="hidden-xs sidebar text-center">
                        <?php get_sidebar(); ?>
                    </aside>
                    <article id="content">
                        

                    