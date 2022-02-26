<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <title>Explorer.IO</title>
    <meta charset="utf-8">
    <!-- Responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- CSS -->
    <link rel="icon" href="images/favicon.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/print.css">
    <!--[if IE]>
    <script src="_ui/js/html5.js"></script>
    <![endif]-->
    <style>
        .chain-blk .chainblk-info .chain-form .chain-select .dd .ddTitle .ddlabel {
            margin-left: 25px;
        }
    </style>
</head>
<body>
<div id="wrapper" class="home-bg-clr">
    <div class="home-bg">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="logo col-md-4 col-sm-4 col-xs-12">
                        <a href="#">
                            <img src="images/Logo.png" alt="logo" />
                        </a>
                    </div>
                    <div class="menu col-md-8 col-sm-8 col-xs-12 align-right">

                        <div class="menu-icon home_icon">
                            <img src="images/home-menu-icon.png" alt="icon" />
                        </div>
                        <nav>
                            <ul class="clear">
                                <li><a href="/btc" >Bitcoin</a></li>
                                <li><a href="/bch" >BCH</a></li>
                                <li><a href="/eth">Ethereum</a></li>
                                <li><a href="/ltc" style="color: #6fcf97">Litecoin</a></li>
                                <li ><a href="/dash" style="color: white">Dash</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

    <!-- chain-blk start here -->
        <section class="chain-blk">
            <div class="container">
                <div class="row">
                    <div class="chainblk-info">
                        <h1>The easiest <strong>multi-blockchain</strong> explorer</h1>
                        <form role="search" method="post" action="/ltc/search">

                            <div class="chain-form clear">
                                <input type="text"  name="search_string" placeholder="Type your address here">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">

                                <div class="chain-select">
                                    <select id="mycomp" class="clear" onchange="location = this.value;">
                                        <option value="/" >BTC</option>
                                        <option value="/bch" >BCH</option>
                                        <option value="/eth" >ETH</option >
                                        <option selected  value="/ltc" >LTC</option >
                                        <option value="/dash" >DASH</option>
                                    </select>
                                </div>
                                <input type="submit" style="position: absolute; left: -9999px"/>

                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </section>
        <!-- chain-blk end here -->


    </div>
    <div class="push"></div>
</div>
<!-- footer start here -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="ftr-lft col-md-6 col-sm-6 col-xs-12">
                <p>Copyright © 2018 Explorer.io. All rights reserved.</p>
                <a href="#">PRIVACY Policy</a>
                <a href="#">TERMS & Conditions</a>
            </div>
            <div class="ftr-rgt col-md-6 col-sm-6 col-xs-12">
                <ul class="clear">
                    <li>
                        <a href="#"><img src="images/social-icon1.png" alt="image" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/social-icon2.png" alt="image" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/social-icon3.png" alt="image" /></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- footer end here -->
<!-- /container -->

<!--JS-->
<script src="js/vendor/jquery-3.1.0.min.js"></script>
<script src="js/jquery.dd.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/respond.min.js"></script>
<script>
    $(document).ready(function() {
        $(".menu-icon").click(function(){
            $("nav").slideToggle();
        });
        $("select").msDropdown({roundedBorder:false});
        createByJson();
    });
</script>
</body>
</html>