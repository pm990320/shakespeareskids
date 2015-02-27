<!-- 
     * Shakespeare's Kids
     * Copyright (C) Sharon McNally
     *
     * Developed by: Patrick Menlove  patrickmenlove@hotmail.co.uk  GitHub: pm990320
-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">

    <script type="text/javascript" src="<?php echo get_template_directory_uri() + 'js/bootstrap.js' ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() + '/css/bootstrap.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() + '/css/style.css' ?>">
</head>
<body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1374412376212948&pages=1&page=239296332794155&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">

                <header class="row text-center">
                    <h1 id="header">Shakespeare's Kids</h1>
                </header>

                <nav class="row" id="navmenu">
                    <ul class="nav nav-pills nav-justified">
                        <?php if (function_exists('getNavMenu')): ?>
                            <?php echo getNavMenu('mainmenu'); ?>
                        <?php endif; ?>
                    </ul>
                </nav>

                <aside class="row" id="side_content">
                    <div class="fb-activity" data-app-id="1374412376212948" data-site="developers.facebook.com" data-action="likes, recommends" data-colorscheme="light" data-header="true"></div>

                    <div style="margin-top:5%">
                        <div class="fb-like" data-href="https://www.facebook.com/ShakespearesKids" data-width="200" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>
                    </div>
                </aside>

                <article class="row" id="content">