<html>
<head>

    <link rel="stylesheet" type="text/css" href="../../semantic/dist/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
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
    <script src="../../semantic/dist/semantic.min.js"></script>
    <!--    VER DA ONDE É ESSE ASSESTS-->
    <!--    <script src="assets/library/jquery.min.js"></script>-->
    <script src="../../semantic/dist/components/visibility.js"></script>
    <script src="../../semantic/dist/components/sidebar.js"></script>
    <script src="../../semantic/dist/components/transition.js"></script>
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

    <body class="pushable">

        <!-- Following Menu -->
        <div class="ui large top fixed menu transition hidden">
            <div class="ui container">
                <a class="active item" href="#">Home</a>
                <a class="item">Work</a>
                <a class="item">Company</a>
                <a class="item">Careers</a>
                <div class="right menu">
                    <div class="item">
                        <a class="ui button" href="#">Log in</a>
                    </div>
                    <div class="item">
                        <a class="ui primary button" href="http://localhost/COPIA_POO/app/controllers/usuario.php?acao=cadastrar_usuario">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <div class="ui vertical sidebar menu left">
            <a class="active item">Home</a>
            <a class="item">Work</a>
            <a class="item">Company</a>
            <a class="item">Careers</a>
            <a class="item" href="#">Login</a>
            <a class="item" href="http://localhost/COPIA_POO/app/controllers/usuario.php?acao=cadastrar_usuario">Signup</a>
        </div>


        <!-- Page Contents -->
        <div class="pusher">

            <div class="ui inverted vertical masthead center aligned segment bg_primarioIndex">
                <div class="ui text container letraIndex">
                    <!--                    LOGO DO QRLIST                 -->
                    <!--            <img src="../imagens/QrList_preto.png">-->
                    <h1 class="ui inverted header">QrList</h1>
                    <h2 >Um jeito inovador de fazer suas listas de compras.</h2>
                    <div class="item ">
                        <a class="ui inverted button" href="#">Log in</a>
                        <a class="ui inverted button" href="http://localhost/COPIA_POO/app/controllers/usuario.php?acao=cadastrar_usuario">Sign Up</a>
                    </div>
                </div>
            </div>

            <div class="ui vertical stripe segment fundoIndex">
                <div class="ui middle aligned stackable grid container">
                    <div class="row">
                        <div class="eight wide column">
                            <h3 class="ui header">We Help Companies and Companions</h3>
                            <p>We can give your company superpowers to do things that they never thought possible. Let us delight your customers and empower your needs...through pure data analytics.</p>
                            <h3 class="ui header">We Make Bananas That Can Dance</h3>
                            <p>Yes that's right, you thought it was the stuff of dreams, but even bananas can be bioengineered.</p>
                        </div>
                        <div class="six wide right floated column">
                            <img src="../../imagens/index.jpg" class="ui large bordered rounded image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="ui vertical stripe segment fundoIndex">
                <div class="ui middle aligned stackable grid container">
                    <div class="row">
                        <div class="six wide left floated column">
                            <img src="../../imagens/index.jpg" class="ui large bordered rounded image">
                        </div>
                        <div class="eight wide column">
                            <h3 class="ui header">We Help Companies and Companions</h3>
                            <p>We can give your company superpowers to do things that they never thought possible. Let us delight your customers and empower your needs...through pure data analytics.</p>
                            <h3 class="ui header">We Make Bananas That Can Dance</h3>
                            <p>Yes that's right, you thought it was the stuff of dreams, but even bananas can be bioengineered.</p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="ui vertical stripe segment fundoIndex">
                <div class="ui middle aligned stackable grid container">
                    <div class="row">
                        <div class="eight wide column">
                            <h3 class="ui header">We Help Companies and Companions</h3>
                            <p>We can give your company superpowers to do things that they never thought possible. Let us delight your customers and empower your needs...through pure data analytics.</p>
                            <h3 class="ui header">We Make Bananas That Can Dance</h3>
                            <p>Yes that's right, you thought it was the stuff of dreams, but even bananas can be bioengineered.</p>
                        </div>
                        <div class="six wide right floated column">
                            <!--<img src="../../imagens/index.jpg" class="ui large bordered rounded image">-->
                        </div>
                    </div>
                </div>
            </div>

            <div class="ui vertical stripe segment fundoIndex">
                <div class="ui text container">
                    <h3 class="ui header">Breaking The Grid, Grabs Your Attention</h3>
                    <p>Instead of focusing on content creation and hard work, we have learned how to master the art of doing nothing by providing massive amounts of whitespace and generic content that can seem massive, monolithic and worth your attention.</p>
                    <a class="ui large button">Read More</a>
                    <h4 class="ui horizontal header divider">
                        <a href="#">Case Studies</a>
                    </h4>
                    <h3 class="ui header">Did We Tell You About Our Bananas?</h3>
                    <p>Yes I know you probably disregarded the earlier boasts as non-sequitur filler content, but its really true. It took years of gene splicing and combinatory DNA research, but our bananas can really dance.</p>
                    <a class="ui large button">I'm Still Quite Interested</a>
                </div>
            </div>

            <div class="ui inverted vertical footer segment">
                <div class="ui container">
                    <div class="ui stackable inverted divided equal height stackable grid">
                        <div class="three wide column">
                            <h4 class="ui inverted header">About</h4>
                            <div class="ui inverted link list">
                                <a href="#" class="item">Sitemap</a>
                                <a href="#" class="item">Contact Us</a>
                                <a href="#" class="item">Religious Ceremonies</a>
                                <a href="#" class="item">Gazebo Plans</a>
                            </div>
                        </div>
                        <div class="three wide column">
                            <h4 class="ui inverted header">Services</h4>
                            <div class="ui inverted link list">
                                <a href="#" class="item">Banana Pre-Order</a>
                                <a href="#" class="item">DNA FAQ</a>
                                <a href="#" class="item">How To Access</a>
                                <a href="#" class="item">Favorite X-Men</a>
                            </div>
                        </div>
                        <div class="seven wide column">
                            <h4 class="ui inverted header">Footer Header</h4>
                            <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div id="goog-gt-tt" class="skiptranslate" dir="ltr">
            <div style="padding: 8px;">
                <div>
                    <div class="logo">
                        <img src="https://www.gstatic.com/images/branding/product/1x/translate_24dp.png" width="20" height="20" alt="Google Translate">
                    </div>
                </div>
            </div>

            <div class="top" style="padding: 8px; float: left; width: 100%;">
                <h1 class="title gray">Original text</h1>

                <div class="middle" style="padding: 8px;">
                    <div class="original-text"></div>
                </div>

                <div class="bottom" style="padding: 8px;">

                    <div class="activity-links">
                        <span class="activity-link">Contribute a better translation</span>
                        <span class="activity-link"></span>
                    </div>

                    <div class="started-activity-container">
                        <hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;">
                        <div class="activity-root"></div>
                    </div>

                </div>

                <div class="status-message" style="display: none;"></div>

            </div>
        </div>

<div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div></body></html>s