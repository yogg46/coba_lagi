
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="Prakasam Mathaiyan">
    <meta name="description" content="">

    <!--[if IE]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="assets/plugins/lib/modernizr.js"></script>
    <link rel="icon" href="assets/images/favicon.png" type="image/gif">
    <link rel="stylesheet" type="text/css" href="assets/plugins/animate-it/animate.min.css">


    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/monthly/css/monthly.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/emojionearea/emojionearea.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/ionrangeSlider/css/ion.rangeSlider.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/ionrangeSlider/css/ion.rangeSlider.skinFlat.css">

    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-default.css">
    @livewireScripts
    @livewireStyles
</head>

<body class="lock-screen">



    <div class="lock-wrapper">
        <div class="panel lock-box text-center animated swing">
            <img alt="lock avatar" src="assets/images/hourglass.svg">
            <h1>wellcome  </h1>
            @guest
            @if (Route::has('login'))

            <div class="row">
                <form action="{{ route('login') }}" class="form-inline" role="form">
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" href="{{ route('login') }}><i class="fa fa-check"></i> {{ __('Login') }}</button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            @endif
            @else
            <div class="row">
                <form action="{{ route('home') }}" class="form-inline" role="form">
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button class="btn btn-success" href="{{ route('home') }}><i class="fa fa-check"></i> {{ __('Home') }}</button>
                            </span>
                        </div>
                    </div>
                </form>
            </div

            @endguest


        </div>
    </div>





    <script type="text/javascript" src="assets/plugins/lib/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="assets/plugins/lib/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/lib/plugins.js"></script>

    <script type="text/javascript" src="assets/plugins/flot/excanvas.min.js"></script>
    <script type="text/javascript" src="assets/plugins/flot/jquery.flot.min.js"></script>
    <script type="text/javascript" src="assets/plugins/flot/jquery.flot.tooltip.js"></script>
    <script type="text/javascript" src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
    <script type="text/javascript" src="assets/plugins/flot/jquery.flot.crosshair.min.js"></script>
    <script type="text/javascript" src="assets/plugins/flot/jquery.flot.pie.min.js"></script>

    <script type="text/javascript" src="assets/plugins/lib/sparklines.js"></script>
    <script type="text/javascript" src="assets/plugins/lib/jquery.knob.min.js"></script>
    <script type="text/javascript" src="assets/plugins/monthly/js/monthly.js"></script>
    <script type="text/javascript" src="assets/plugins/emojionearea/emojionearea.min.js"></script>


    <script type="text/javascript" src="assets/js/app.base.js"></script>
    <script type="text/javascript" src="assets/js/cmp-todo.js"></script>
    <script type="text/javascript" src="assets/plugins/ionrangeSlider/js/ion.rangeSlider.min.js"></script>
    <script type="text/javascript" src="assets/js/page-dashboard.js"></script>
    <script type="text/javascript" src="assets/js/cmp-ion-slider.js"></script>

</body>
</html>
