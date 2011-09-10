<?php
    // PHP performance tools: https://github.com/doat/TouchyPHP
    require "../../php/TouchyPHP.php";
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Viewport scale setting (required): http://labs.doat.com/touchybp/#meta-viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <!-- iPhone standalone settings: http://labs.doat.com/touchybp/#standalone -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <link rel="apple-touch-icon" href="img/icon.png"/>
        <link rel="apple-touch-startup-image" href="img/splash.png" />        
        
        <!-- Initial configuration script -->
        <script>
            // Determines if the agent has a touch interface:  http://labs.doat.com/touchybp/#istouch
            var isTouch = location.href.indexOf('istouch=true') !== -1 ? true : ('ontouchstart' in window);
            // TouchyJs configuration: http://labs.doat.com/touchyjs/#configuration
            var doat_config = {
                'fixedPositioning': true, // default
                'browserHistory': true // default
            };
        </script>
        
        <!-- Normalize css by : http://labs.doat.com/touchybp/#normalize.mobile.css -->
        <script> 
            var csspath = isTouch ? 'normalize.mobile.css' : 'normalize.css';
            document.write('<link rel="stylesheet" href="../../css/normalize.css/' + csspath + '"><\/script>');
        </script>
        <!-- TouchyPHP:getFile lets you reduce http requests: http://labs.doat.com/touchyphp/#getFile -->
        <link href="../../css/style.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />

        <!-- Hide content before rendering: http://labs.doat.com/touchyjs/#nav-dependancy  -->
        <style type="text/css"> .doml_content { display: none; } </style>
    </head>
    <body>
        <div class="doml_header">
            <h1><a href="" onclick="Doat.Nav.goTo('page1'); return false;">Loading...</a></h1>
            <a href="" onclick="Doat.Nav.back(); return false;" class="btn-back">Back</a>
            <doml:searchbar onsubmit="search" defaulttext="Type to search"></doml:searchbar>
        </div>
        <div class="doml_content" id="search">
            <div>
                <span class="loading">Loading results</span>
            </div>
        </div>
   
        <div class="doml_content" id="item">
            <div>
                <h2></h2>
                <p></p>
            </div>
        </div>
        
        <script>
            if(!isTouch) {
                document.write('<script src="../../js/libs/jquery-1.6.2.min.js"><\/script>');
            } else {
                document.write('<script src="http://developer.stg.doat.com/min/g=zepto.0.7&debug"><\/script>');
            }
        </script>
        
        <!--script src="js/libs/touchy.min.js"></script-->
        <script>
            <? 
                include 'file:///home/ran/workspace/TouchyJS/src/header.js';
                include 'file:///home/ran/workspace/TouchyJS/src/events.js';
                include 'file:///home/ran/workspace/TouchyJS/src/env.js';
                include 'file:///home/ran/workspace/TouchyJS/src/tml.js';
                include 'file:///home/ran/workspace/TouchyJS/src/tmls/searchbar.js';
                include 'file:///home/ran/workspace/TouchyJS/src/tmls/slider.js';
                include 'file:///home/ran/workspace/TouchyJS/src/tmls/swiper.js';
                include 'file:///home/ran/workspace/TouchyJS/src/plugins/iscroll.js';
                include 'file:///home/ran/workspace/TouchyJS/src/scroll.js';
                include 'file:///home/ran/workspace/TouchyJS/src/plugins/animate.js';
                include 'file:///home/ran/workspace/TouchyJS/src/plugins/signals.min.js';
                include 'file:///home/ran/workspace/TouchyJS/src/plugins/hasher.min.js';
                include 'file:///home/ran/workspace/TouchyJS/src/nav.js';
                include 'file:///home/ran/workspace/TouchyJS/src/utils.js';
                include 'file:///home/ran/workspace/TouchyJS/src/main.js';
                include 'file:///home/ran/workspace/TouchyJS/src/footer.js';
            ?>
        </script>
        <script src="js/scripts.js"></script>
    </body>
</html>