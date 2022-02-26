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
    <link rel="icon" href="/images/favicon.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link rel="stylesheet" type="text/css" href="/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="/css/print.css">

    <!--[if IE]>
    <script src="/_ui/js/html5.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper" class="accout-page">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="header-top clear">
                    <div class="logo col-md-4 col-sm-4 col-xs-12">
                        <a href="/">
                            <img src="/images/Logo-acc.png" alt="logo" />
                        </a>
                    </div>
                    <div class="menu col-md-8 col-sm-8 col-xs-12 align-right">

                        <div class="men-icon">
                            <a href="#"><img src="/images/men-icon.png" alt="icon" /></a>
                        </div>
                        <form role="search" method="post" action="/eth/search">

                            <div class="header-form">
                                <input type="text" name="search_string" placeholder="Type your address here">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">

                                <input type="submit" style="position: absolute; left: -9999px"/>

                            </div>
                        </form>
                        <div class="menu-icon">
                            <img src="/images/menu-icon.png" alt="icon" />
                        </div>
                        <nav>
                            <ul class="clear">
                                <li><a href="/btc">Bitcoin</a></li>
                                <li><a href="/bch">Bitcoin Cash</a></li>
                                <li><a href="/eth">Ethereum</a></li>
                                <li><a href="/ltc">Litecoin</a></li>
                                <li><a href="/dash">Dash</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /header -->
    <div class="header_bottom">
        <div class="container">
            <div class="row">

                <div class="header-btm clear">
                    <div class="header-btm-lft col-md-6 col-sm-6 col-xs-12">
                        <div class="btm-lft-info">
                            <h2>Viewing Address</h2>
                            <p>  {{$id}}</p>
                        </div>
                    </div>
                    <div class="header-btm-rgt col-md-6 col-sm-6 col-xs-12">
                        <ul>
                            <li>
                                <a href="#"><img src="/images/copy-url.png" alt="image" />COPY URL</a>
                            </li>
                            <li class="active">
                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i>SAVE TO FAVORITES</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- graph-blk start here -->
    <section class="graph-blk">
        <div class="container">
            <div class="row">
                <div class="lft-graph-blk col-md-12 col-sm-12 col-xs-12">
                    <ul>
                        <div class="col-md-4">

                        <li>
                            <h6>Ethereum</h6>
                            <p>Address Information</p>
                        </li>
                        </div>


                        <div class="col-md-4">

                            <li>
                            <h6>Balance</h6>
                            <p>{{($balance->result)/1000000000000000000}}ETH</p>
                        </li>
                        </div>


                        <div class="col-md-4">

                                <li>
                            <h6>Transactions</h6>
                            <p>{{$tx_count}}</p>
                        </li>
                        </div>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- graph-blk end here -->

    <!-- account-tabs blk start here -->
    <div class="account-tabs">
        <div class="account-tab-head">
            <div class="container">
                <div class="row">
                    <ul>
                        <li class="active"><a href="#">Transactions</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="account-tab-info">
            <div class="container">
                <div class="row">
                    <div class="account-tab-in">


                        @foreach($address->result as $tx)


                            <div class="well section">


                                <p class="pull-right">
      <span class="confirmations">


            <span class="confirmed">
              <i class="fa fa-lock"></i>
              <span id="num-confs" title="{{$tx->confirmations}}">{{$tx->confirmations}}</span>
            </span>

          confirmations

        &nbsp;
      </span>

                                </p>
                                <div class="clearfix"></div>



                                <h4 class="text-center truncate">
                                    <i class="fa fa-exchange"></i>

                                    <a href="/eth/tx/{{$tx->hash}}/">
                                        {{$tx->hash}}
                                    </a>

                                </h4>


                                <div class="col-md-5">

                                    <h4 class="text-center">Input(s) Created</h4>




                                            <div class="txn-input truncate" >


                                                from<br>
                                                <i class="fa fa-qrcode"></i>
                                                <a href="/eth/address/{{$tx->from}}">{{$tx->from}}</a>


                                            </div>





                                </div>

                                <div class="col-md-2">
                                    <div class="txn-arrow"></div>
                                </div>

                                <div class="col-md-5">
                                    <h4 class="text-center"> Output Created</h4>





                                            <div class="txn-output truncate" id="output-index-0">


                                                to<br>
                                                <i class="fa fa-qrcode"></i>
                                                <a href="/eth/address/{{$tx->to}}">{{$tx->to}}</a>
                                                <span class="truncate">


            </span>

                                            </div>




                                </div>

                                <div class="clearfix"></div>



                                <div>

                                    <h4 class="text-center">
                                        <strong>
                                            Value Transacted
                                        </strong>:
                                        {{($tx->value)/1000000000000000000}} ETH
                                    </h4>

                                </div>

                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- account-tabs blk end here -->
</div>
<!-- footer start here -->
<footer class="account-footer">
    <div class="footer-bg">
        <div class="container">
            <div class="row">
                <div class="footer-top">
                    <ul>
                        <li>
                            <a href="#">
                                <img src="/images/Logo.png" alt="image" />
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur <br/> adipiscing elit. Donec lacinia mauris elit, id cursus <br/> quam varius non. Vestibulum a consectetur ex.</p>
                        </li>
                        <li>
                            <h5>About</h5>
                            <a href="#">Who we are</a>
                            <a href="#">Our Team</a>
                            <a href="#">Press Kit</a>
                        </li>
                        <li>
                            <h5>Data</h5>
                            <a href="#">Charts</a>
                            <a href="#">Statistics</a>
                            <a href="#">Markets</a>
                        </li>
                        <li>
                            <h5>Support</h5>
                            <a href="#">Help Center</a>
                            <a href="#">Resources</a>
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-btm clear">
                    <div class="ftr-lft col-md-6 col-sm-6 col-xs-12">
                        <p>Copyright © 2018 Explorer.io. All rights reserved.</p>
                        <a href="#">PRIVACY Policy</a>
                        <a href="#">TERMS & Conditions</a>
                    </div>
                    <div class="ftr-rgt col-md-6 col-sm-6 col-xs-12">
                        <ul class="clear">
                            <li>
                                <a href="#"><img src="/images/social-icon1.png" alt="image" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="/images/social-icon2.png" alt="image" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="/images/social-icon3.png" alt="image" /></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end here -->
<!-- /container -->

<!--JS-->
<script src="/js/vendor/jquery-3.1.0.min.js"></script>
<script src="/js/jquery.dd.js"></script>
<script src="/js/retina.min.js"></script>
<script src="/js/respond.min.js"></script>
<script>
    $(document).ready(function() {
        $(".menu-icon").click(function(){
            $("nav").slideToggle();
        });

        $(window).on("scroll", function() {
            if($(window).scrollTop() > 10) {
                $("header").addClass("stycky_header");
            } else {
                $("header").removeClass("stycky_header");
            }
        });
        $("select").msDropdown({roundedBorder:false});
        createByJson();
    });
</script>
</body>
</html>