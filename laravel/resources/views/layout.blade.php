<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

         <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WRQTJ44');</script>
        <!-- End Google Tag Manager -->

        <meta lang="en" charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('title','The K12 Engineering Education Podcast, by Pios Labs')</title>

        <!-- SEO -->
        <meta name="description" content="Listen to conversations and stories about how to bring engineering to younger ages.  For educators, engineers, entrepreneurs, parents, and everyone else.">
        <meta name="keywords" content="engineering, education, k12, k-12, podcast, STEM, STEAM, conversation, communication, secondary education, primary education, elementary education, science, technology, NGSS, design, teaching, teachers, educators">
        <meta property="og:site_name" content="The K12 Engineering Education Podcast"/>
        <meta property="og:title" content="The K12 Engineering Education Podcast"/>
        <meta property="og:image" content="http://www.k12engineering.net/img/episodes/ep0_800x800.jpg"/>
        <meta property="og:url" content="http://www.k12engineering.net"/>
        <meta property="og:description" content="Listen to conversations and stories about how to bring engineering to younger ages, on iTunes, Soundcloud, Google Play, and more. For educators, engineers, entrepreneurs, makers, parents, students, and podcast fans."/>
        <meta property="og:type" content="website"/>
        <meta property="fb:app_id" content="1093531260695171"/>
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:site" content="@K12Engineering"/>
        <meta name="twitter:title" content="The K12 Engineering Education Podcast" />
        <meta name="twitter:description" content="Stories and conversations about how to bring engineering to younger ages. #K12Engineering" />
        <meta property="og:image" content="http://www.k12engineering.net/img/episodes/ep0_800x800.jpg"/>
        <meta name="twitter:image:alt" content="K12 Engineering Education Podcast logo" />

        <!-- favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#603cba">
        <meta name="theme-color" content="#ffffff">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Anton|PT+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!-- In-line Styles -->
        <style>
        </style>

        <!-- Styles -->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        
    </head>

    <body>

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WRQTJ44"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    @yield('title','The K12 Engineering Education Podcast')
                </div>
                <div class="testing">

                @yield('content')

                    <!-- <ul>
                        <li>
                            <a href="/#">Contact</a> us to learn more.
                        </li>
                        <li>
                            <a href="/">Go Home!</a>
                        </li>
                        <li>
                            <a href="/#">About</a> us and all our shenanigans.
                        </li>
                        <li>
                            <a href="/#">Projects</a> listed by title.
                        </li>
                    </ul> -->
                </div>

            </div>
        </div>
    </body>

    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

</html>
