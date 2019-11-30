<!doctype HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-deep_purple.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link href="fonts/fontello/css/fontello.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/bootstrap-offset-right.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Nursery managment</title>
    <style>
        .mdl-textfield__label {
            margin-bottom: 0;
            color: #d7dbdc;
            font-weight: normal;
        }

        .mdl-textfield--floating-label.is-focused .mdl-textfield__label,
        .mdl-textfield--floating-label.is-dirty .mdl-textfield__label {
            text-transform: uppercase
        }

        .has-feedback label~.form-control-feedback {
            top: 15px;
        }

        .mdl-textfield {
            width: 100%;
        }

        .mdl-checkbox__label {
            cursor: text;
            font-size: 13px;
            float: left;
            color: #b0b3b4;
            font-weight: normal;
        }

        .mdl-checkbox__box-outline {
            border: 1px solid #b0b3b4;
        }

        .mdl-textfield__input {
            border: none;
            border-bottom: 1px solid rgba(0, 0, 0, .12);
            display: block;
            font-size: 16px;
            margin: 0;
            padding: 4px 0;
            width: 100%;
            background: 0 0;
            text-align: left;
            color: inherit;
            font-weight: bold;
        }

        .mdl-switch__label {
            float: left;
            font-weight: normal;
            color: #b0b3b4;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <section class="login"></section>
    <div class="container">
        <div class="center-block row">
            <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-12 col-xs-12 no-padding" style="z-index:1">
                <!-- Slider -->

{{--                <div class="mlt-carousel">--}}
{{--                    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">--}}
{{--                        <div class="carousel-inner" role="listbox">--}}
{{--                            <div class="item active">--}}
{{--                                <img class="img-responsive center-block" src="img/step1.png" alt="step1">--}}
{{--                                <div class="item-content">--}}
{{--                                    <h3>Lorem ipsum dolor sit amet</h3>--}}
{{--                                    <p>Consectetur adipiscing elit</p>--}}
{{--                                    <p>Phasellus orci dolor</p>--}}
{{--                                    <p>dapibus suscipit quam</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="item">--}}
{{--                                <img class="img-responsive center-block" src="img/step2.png" alt="step2">--}}
{{--                                <div class="item-content">--}}
{{--                                    <h3>Pellentesque tincidunt</h3>--}}
{{--                                    <p>Laoreet placerat justo congue vulputate</p>--}}
{{--                                    <p>Diam felis dapibus nulla</p>--}}
{{--                                    <p>Phasellus molestie</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="item">--}}
{{--                                <img class="img-responsive center-block" src="img/step3.png" alt="step3">--}}
{{--                                <div class="item-content">--}}
{{--                                    <h3> Proin sed leo sodales</h3>--}}
{{--                                    <p>ultricies posuere leo</p>--}}
{{--                                    <p>Phasellus orci dolor</p>--}}
{{--                                    <p>dapibus suscipit quam</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Indicators -->--}}
{{--                        <ol class="carousel-indicators">--}}
{{--                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>--}}
{{--                            <li data-target="#myCarousel" data-slide-to="1"></li>--}}
{{--                            <li data-target="#myCarousel" data-slide-to="2"></li>--}}
{{--                        </ol>--}}
{{--                    </div>--}}
{{--                    <!--mlt-carousel-->--}}
{{--                </div>--}}
                <!-- Slider -->
            </div>
            <!-- Login -->
            <div class="col-lg-6 col-lg-offset-right-1 col-md-6 col-md-offset-right-1 col-sm-12 col-xs-12 no-padding">
                <div class="mlt-content">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#register" data-toggle="tab">Register</a></li>
                        <li><a href="#login" data-toggle="tab">Login</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade in active" id="register">
                            <!--register form-->

                            <form form="" data-feedback="{&quot;success&quot;: &quot;fa-check&quot;, &quot;error&quot;: &quot;fa-times&quot;}" novalidate="novalidate" method="post" action="{{url('registerdata')}}">
                                {{csrf_field()}}
                                <div class="col-lg-10 col-lg-offset-1 col-lg-offset-right-1 col-md-10 col-md-offset-1 col-md-offset-right-1 col-sm-12 col-xs-12 pull-right ">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-group has-feedback">
                                        <input type="text" name="name" id="fname" class="mdl-textfield__input" required />
                                        <label class="mdl-textfield__label " for="fullName ">Full Name</label>
                                        <span class="form-control-feedback" aria-hidden="true" id="fname1"></span>
                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input " type="text" name="email" id="emailAddress" required>
                                        <label class="mdl-textfield__label " for="emailAddress ">Email Address</label>
                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
                                        <input class="mdl-textfield__input " type="password" name="password" id="SetPassword" required>
                                        <label class="mdl-textfield__label " for="SetPassword "> Password</label>
                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
                                        <input class="mdl-textfield__input " type="password" name="c_password" id="SetPassword" required >
                                        <label class="mdl-textfield__label " for="SetPassword "> Confirm Password</label>
                                    </div>

                                    <button class="btn lt-register-btn">register now <i class="icon-right pull-right "></i></button>
                                </div>
                            </form>
                            <!--register form-->
                        </div>
                        <div class="tab-pane fade" id="login">
                            <!--login form-->
                            <form novalidate="novalidate" method="post" action="{{url('logindata')}}">
                                {{csrf_field()}}
                                <div class="col-lg-10 col-lg-offset-1 col-lg-offset-right-1 col-md-10 col-md-offset-1 col-md-offset-right-1 col-sm-12 col-xs-12 pull-right ">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label is-upgraded" data-upgraded=",MaterialTextfield">
                                        <input class="mdl-textfield__input" type="text" id="emailAddress" name="email">
                                        <label class="mdl-textfield__label" for="emailAddress">Email Address</label>
                                    </div>
                                </div>

                                <div class="col-lg-10 col-lg-offset-1 col-lg-offset-right-1 col-md-10 col-md-offset-1 col-md-offset-right-1 col-sm-12 col-xs-12 pull-right ">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label is-upgraded" data-upgraded=",MaterialTextfield">
                                        <input class="mdl-textfield__input" type="password" id="password" name="password">
                                        <label class="mdl-textfield__label" for="password">Password</label>
                                    </div>
                                </div>

                                <div class="col-lg-10 col-lg-offset-1 col-lg-offset-right-1 col-md-10 col-md-offset-1 col-md-offset-right-1 col-sm-12 col-xs-12 pull-right ">
                                    <div class="row">
                                        <br>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events is-upgraded" for="rememberPass" data-upgraded=",MaterialSwitch,MaterialRipple">
                                                <input type="checkbox" id="rememberPass" class="mdl-switch__input">
                                                <span class="mdl-switch__label">Remember</span>
                                                <div class="mdl-switch__track"></div><div class="mdl-switch__thumb"><span class="mdl-switch__focus-helper"></span></div><span class="mdl-switch__ripple-container mdl-js-ripple-effect mdl-ripple--center" data-upgraded=",MaterialRipple"><span class="mdl-ripple"></span></span></label>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style=" text-align:right;">
                                            <a href="#">Reset Password</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-10 col-lg-offset-1 col-lg-offset-right-1 col-md-10 col-md-offset-1 col-md-offset-right-1 col-sm-12 col-xs-12 pull-right ">
                                    <button class="btn lt-register-btn">login <i class="icon-right "></i></button>
                                </div>
                            </form>
                            <!--login form-->
                        </div>
                    </div>
                </div>
                <!--Login-->
            </div>
            <!--center-block-->
        </div>
        <!--container-->
    </div>







    <script src="node_modules/jquery/dist/jquery.min.js "></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js "></script>
    <script src="js/material.min.js "></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js "></script>

    <script>
        //Google analytics.
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-79865537-1', 'auto');
        ga('send', 'pageview');
    </script>

    <script>
        //Form validation.
        $('form').validate({
            rules: {
                fname: {
                    minlength: 3,
                    maxlength: 15,
                }
            },
            errorPlacement: function(error, element) {},
            highlight: function(element) {
                var id_attr = "#" + $(element).attr("id") + "1";
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                $(id_attr).removeClass('icon-ok-circled2').addClass('icon-cancel-circled2');
            },
            unhighlight: function(element) {
                var id_attr = "#" + $(element).attr("id") + "1";
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                $(id_attr).removeClass('icon-cancel-circled2').addClass('icon-ok-circled2');
            },
        });
    </script>
            <script src="js/jquery.nicescroll.min.js"></script>
         <script src="js/scripte.js"></script>

      <script src="js/wow.min.js"></script>
      <script>
      new WOW().init();
      </script>


</body>

</html>
