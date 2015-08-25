<!doctype html>
<html class="no-js" lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <!--[if lt IE 9]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <![endif]-->

    <title>iTheatre Collaborative | @yield('title', 'Phoenix, AZ')</title>
    <meta name="description" content="@yield('meta', 'Bringing Cutting-Edge Theatre to the Phoenix Metro area.')" />

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Amaranth|Viga|Dosis:400,800,700|Rambla:400,700,700italic|BenchNine:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ url('css/styles.css') }}" />

    @yield('css')

    <style>
        #outer-wrap:after {
            height: 0;
        }

        .content {
            padding-bottom: 0;
        }
    </style>


<?php if (Request::is('productions/2014-2015/an-almost-holy-picture')) : ?>
    <!-- Facebook Conversion Code for Buy &quot;Love Disorder&quot; tickets -->
    <script>(function() {

    var _fbq = window._fbq || (window._fbq = []);

    if (!_fbq.loaded) {

    var fbds = document.createElement('script');

    fbds.async = true;

    fbds.src = '//connect.facebook.net/en_US/fbds.js';

    var s = document.getElementsByTagName('script')[0];

    s.parentNode.insertBefore(fbds, s);

    _fbq.loaded = true;

    }

    })();

    window._fbq = window._fbq || [];

    window._fbq.push(['track', '6021131079325', {'value':'0.01','currency':'USD'}]);

    </script>

    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6021131079325&amp;cd[value]=0.01&amp;cd[currency]=USD&amp;noscript=1" /></noscript>
    <?php endif; ?>
</head>
