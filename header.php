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
    <link href='http://fonts.googleapis.com/css?family=Pompiere|Rancho' rel='stylesheet' type='text/css'>
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

    <div id="bgimgwrapper">
        <img id="bgimg" class="noselect" src="<?php echo get_template_directory_uri(); ?>/img/scroll_better.jpg" alt="scroll">
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">

                <header class="row text-center">
                    <h1 id="header" class="noselect">Shakespeare's Kids</h1>
                    <h1 id="subheading">Bringing literature to life!</h1>
                </header>

                <nav class="row" id="navmenu">
                    <ul class="nav nav-pills nav-justified noselect">
                        <!-- Requires WP Bootstrap Menu plugin -->
                        <?php if (function_exists('getNavMenu')): ?>
                            <?php echo getNavMenu('mainmenu'); ?>
                        <?php endif; ?>
                    </ul>
                </nav>

                <div class="row">
                    <article id="content">
                        <aside id="side_content">
                            <?php get_sidebar(); ?>
                        </aside>

                    