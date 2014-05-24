<!doctype html>
<head>
    <meta charset="utf-8">
    <title>
        @section('title')
        Thingernet - Internet in the Things
        @show
    </title>
    <link rel="shortcut icon" href="images/thingernet_round.ico">
    <meta name="thingernet-INTERNET IN THE THINGS" content="Responsive Template, html5 Template, html5, css3, jquery, responsive">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    {{ HTML::style('bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('bootstrap/css/bootstrap-responsive.min.css') }}
    {{ HTML::style('css/style.css') }}
    {{ HTML::style('css/font-awesome.min.css') }}
    {{ HTML::style('http://fonts.googleapis.com/css?family=Lato:400,900,900italic,400italic') }}

    <style>
        @section('styles')
        body {
            /*padding-top: 60px;*/
        }
        @show
    </style>

</head>
<body>
<!--Header Part Start-->
@include('includes.header')
<!--Header Part End-->

<!--Content Part Start-->
@yield('content')
<!--Content Part End-->

<!--Footer Start-->
@include('includes.footer')
<!--Footer End-->

{{ HTML::script('js/jquery.js') }}
{{ HTML::script('bootstrap/js/bootstrap.min.js') }}
{{ HTML::script('js/jquery.contenthover.min.js') }}
{{ HTML::script('js/jquery.tweet.js') }}

<script>
    <?php if(isset($menuSelection)) : ?>
    {{
         '$("#'.$menuSelection.'").addClass("active");'
    }}
    <?php endif; ?>

</script>

<script type="text/javascript">
    $(window).load(function() {
        /***  jQuery ContentHover Plugin ***/
        $('ul.withHover img').contenthover({
            overlay_opacity:0.5
        });

        /***  Footer Back to Top link ***/
        $('a.toTop').click(function(){
            $('html, body').animate({scrollTop: '0px'}, 300);
            return false;
        });

        /*** Carousel Bootstrap slider ***/
        $('#quartumCarousel').carousel({
            interval:7000,
            pause: "hover"
        })

    });





    jQuery(document).ready(function () {

        /* tooltip init */
        jQuery("[data-toggle='tooltip']").tooltip();

        /* twitter */
        jQuery('.tweets').tweet({
            template: "{text} {time}",
            //li_class: " ",
            twitter_api_url: 'twitter/proxy/twitter_proxy.php'
        });

    });


</script>

</body>

</html>

