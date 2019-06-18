<html>
    <head>

        <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- Standard Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

        <!-- Site Properties -->
        <title>QrList</title>
        <script
                src="https://code.jquery.com/jquery-3.1.1.min.js"
                integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
                crossorigin="anonymous"></script>
        <script src="semantic/dist/semantic.min.js"></script>
    <!--    VER DA ONDE É ESSE ASSESTS-->
    <!--    <script src="assets/library/jquery.min.js"></script>-->
        <script src="semantic/dist/components/visibility.js"></script>
        <script src="semantic/dist/components/sidebar.js"></script>
        <script src="semantic/dist/components/transition.js"></script>
        <script>
            $(document)
                .ready(function() {

                    // fix menu when passed
                    $('.masthead')
                        .visibility({
                            once: false,
                            onBottomPassed: function() {
                                $('.fixed.menu').transition('fade in');
                            },
                            onBottomPassedReverse: function() {
                                $('.fixed.menu').transition('fade out');
                            }
                        })
                    ;

                    // create sidebar and attach to menu open
                    $('.ui.sidebar')
                        .sidebar('attach events', '.toc.item')
                    ;

                })
            ;
        </script>
        <link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css">
    </head>

<?php
require_once ('app/views/home.php');
?>