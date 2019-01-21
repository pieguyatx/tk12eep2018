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

    <body class="home">

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WRQTJ44"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <header>
            <div class="branding">
                <a href="/">
                    <h1>The <div class="logo-text"><span class="logo-k">K</span><span class="logo-12">12</span></div> Engineering Education Podcast</h1>
                </a>
            </div>

            <div class="nav-primary-container">
                <nav>
                    <ul>
                    <li class="nav-listen nav-item-container" id="nav-listen" tabindex="-1">
                        <button class="nav-main-item" id="btn-nav-listen" tabindex="0">
                        <div class="nav-main-item-title">
                            Listen
                        </div>
                        <div class="nav-main-item-icon icon">
                            <i class="fas fa-play"></i>
                        </div>
                        </button>
                        <div class="submenu">
                        <div class="search-widget">
                            <!-- <form class="nav-search">
                            <label>Episode Search</label>
                            <input type="search"></input>
                            </form> -->
                            <script>
                            (function() {
                                var cx = '000174629342465940590:wj-mnlaohye';
                                var gcse = document.createElement('script');
                                gcse.type = 'text/javascript';
                                gcse.async = true;
                                gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                                var s = document.getElementsByTagName('script')[0];
                                s.parentNode.insertBefore(gcse, s);
                            })();
                            </script>
                            <gcse:search></gcse:search>
                        </div>
                        <div class="link-list-container">
                            <ul>
                            <li>
                                <a href="/latest.html"><i class="fas fa-step-forward"></i> Latest Episodes</a>
                            </li>
                            <li>
                                <a href="/seasons.html"><i class="fas fa-step-forward"></i> Seasons</a>
                            </li>
                            <li>
                                <a href="/playlists.html"><i class="fas fa-step-forward"></i> Playlists</a>
                            </li>
                            </ul>
                        </div>
                        <div class="subscribe-list icon-list-container">
                            <!-- Subscribe <i class="fas fa-broadcast-tower"></i> -->
                            <ul>
                            <li>
                                <a href="https://itunes.apple.com/us/podcast/k12-engineering-education/id1119404863?mt=2" title="Listen on Apple Podcasts (opens in new window)" target="_blank">
                                <img src="/img/icons/apple_color.png" alt="Icon for Apple Podcasts">
                                </a>
                            </li>
                            <li>
                                <a href="https://exchange.prx.org/series/37938-the-k12-engineering-education-podcast" title="Listen on the Public Radio Exchange (opens in new window)" target="_blank">
                                <img src="/img/icons/prx.png" alt="Icon for PRX">
                                </a>
                            </li>
                            <li>
                                <a href="https://soundcloud.com/piuswong" title="Listen on SoundCloud (opens in new window)" target="_blank">
                                <img src="/img/icons/sc_orangebg.png" alt="Icon for SoundCloud">
                                </a>
                            </li>
                            <li>
                                <a href="http://www.stitcher.com/podcast/the-k12-engineering-education-podcast" title="Listen on Stitcher (opens in new window)" target="_blank">
                                <img src="/img/icons/stitcher.png" alt="Icon for Stitcher">
                                </a>
                            </li>
                            <li>
                                <a href="https://radiopublic.com/the-k12-engineering-education-pod-GA5MjK" title="Listen on RadioPublic (opens in new window)" target="_blank">
                                <img src="/img/icons/radiopublic_red.png" alt="Icon for RadioPublic">
                                </a>
                            </li>
                            <li>
                                <a href="https://play.google.com/music/listen?u=0#/ps/Igvf2ytc5vb74l7dpo6r7w4b45i" title="Listen on Google Play Music (opens in new window)" target="_blank">
                                <img src="/img/icons/googleplaymusic.png" alt="Icon for Google Play Music">
                                </a>
                            </li>
                            <li>
                                <a href="http://tun.in/ph0C3" title="Listen on TuneIn (opens in new window)" target="_blank">
                                <img src="/img/icons/tunein_rounded.png" alt="Icon for TuneIn">
                                </a>
                            </li>
                            <li class="bg-white">
                                <a href="https://www.the-ambient.com/how-to/alexa-podcast-guide-343" title='"Ask Alexa to play K12 Engineering Education Podcast"' target="_blank">
                                <img src="/img/icons/amazonalexa.png" alt="Icon for Amazon Alexa">
                                </a>
                            </li>
                            <li>
                                <a href="http://feeds.soundcloud.com/users/soundcloud:users:217781916/sounds.rss" title="Subscribe to the RSS feed" target="_blank">
                                <img src="/img/icons/rss_orange.png" alt="Icon for RSS feeds">
                                </a>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </li>
                    <li class="nav-about nav-item-container" id="nav-about" tabindex="-1">
                        <button class="nav-main-item" id="btn-nav-about" tabindex="0" onclick="window.location.href = '/about.html';" value="Link">
                        <div class="nav-main-item-title">
                            About
                        </div>
                        <div class="nav-main-item-icon icon">
                            <i class="fas fa-pause"></i>
                        </div>
                        </button>
                        <div class="submenu">
                        <div class="tagline">
                            Promoting engineering education for all ages.
                        </div>
                        <div class="social-list icon-list-container">
                            <ul>
                            <li>
                                <a href="https://www.patreon.com/pioslabs" title="Support the show and get updates on Patreon (opens in new window)" target="_blank">
                                <img src="/img/icons/patreon_logo.png" alt="Icon for Patreon">
                                </a>
                            </li>
                            <li>
                                <a href="http://ko-fi.com/U6U3AG24" title="Buy us a coffee (opens in new window)" target="_blank">
                                <img src="/img/icons/kofi.png" alt="Icon for Ko-fi">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/K12EngineeringEducation/" title="Like the show on Facebook (opens in new window)" target="_blank">
                                <img src="/img/icons/fb.png" alt="Icon for Facebook">
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/K12Engineering" title="Tweet the show (opens in new window)" target="_blank">
                                <img src="/img/icons/twitter_blue.png" alt="Icon for Twitter">
                                </a>
                            </li>
                            <li>
                                <a href="https://soundcloud.com/piuswong" title="Comment on SoundCloud (opens in new window)" target="_blank">
                                <img src="/img/icons/sc_orangebg.png" alt="Icon for SoundCloud">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.reddit.com/r/EngineeringEducation/" title="Discuss on Reddit: r/EngineeringEducation (opens in new window)" target="_blank">
                                <img src="/img/icons/reddit_orange.png" alt="Icon for Reddit">
                                </a>
                            </li>
                            <li class="bg-white">
                                <a href="https://k12engineering.us14.list-manage.com/subscribe?u=d08bc6d0a914158cbdc7c5fe2&id=7a28223d11" title="Sign up for the podcast newsletter (opens in new window)" target="_blank">
                                <i class="fab fa-mailchimp"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UC7hifPdoqjbI5zXSLYnrr4Q" title="Subscribe to the YouTube channel (opens in new window)" target="_blank">
                                <img src="/img/icons/yt.png" alt="Icon for YouTube">
                                </a>
                            </li>
                            <li>
                                <a href="mailto:info@k12engineering.net" title="Email the podcast">
                                <img src="/img/icons/email_red.png" alt="Icon for email">
                                </a>
                            </li>
                            </ul>
                        </div>
                        <div class="link-list-container">
                            <ul>
                            <li>
                                <a href="/about.html"><i class="fas fa-step-forward"></i> About the Show</a>
                            </li>
                            <li>
                                <a href="/news.html"><i class="fas fa-step-forward"></i> News</a>
                            </li>
                            <li>
                                <a href="/signup.html"><i class="fas fa-step-forward"></i> Sign Up</a>
                            </li>
                            <li>
                                <a href="/support.html"><i class="fas fa-step-forward"></i> Support the Show</a>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </li>
                    </ul>
                </nav>
                </div>

            </header>

            <main class="episode-container">

                <section class="episode-primary" id="episode-primary">
                <h2 class="section-title">Latest Episode</h2>
                <div class="episode-player-container">
                    <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/497674491&color=%23ff3399&auto_play=false&hide_related=true&show_comments=false&show_user=true&show_reposts=false&show_teaser=false&visual=true"></iframe>
                    <div class="episode-info-container">
                    <div class="episode-info">
                        <h3 class="episode-title"><a href="episode.html">Latest Episode Title</a></h3>
                        <div class="episode-meta">Season 3 &middot; Episode 17</div>
                    </div>
                    </div>
                </div>
                <div class="latest-episode-link">
                    <h4><a href="episode.html">Latest Episode Show Notes <i class="fas fa-file-alt"></i></a></h4>
                </div>
                </section>

                <section class="episodes-other">
                <h2 class="section-title">Also check out these other episodes:</h2>

                <div class="episodes-recent">
                    <div class="episode-img-container">
                    <img src="/img/episodes/ep0_800x800.jpg" alt="Episode cover art">
                    <div class="episode-info-container">
                        <div class="episode-info">
                        <h3 class="episode-title"><a href="episode.html">Recent Episode Title</a></h3>
                        <div class="episode-meta">Season 3 &middot; Episode 16</div>
                        </div>
                    </div>
                    </div>
                    <div class="episode-img-container">
                    <img src="/img/episodes/ep016_800x800.jpg" alt="Episode cover art">
                    <div class="episode-info-container">
                        <div class="episode-info">
                        <h3 class="episode-title"><a href="episode.html">Recent Episode Title</a></h3>
                        <div class="episode-meta">Season 3 &middot; Episode 15</div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="episodes-related">
                    <div class="episode-img-container">
                    <img src="/img/episodes/ep023_800x800.jpg" alt="Episode cover art">
                    <div class="episode-info-container">
                        <div class="episode-info">
                        <h3 class="episode-title"><a href="episode.html">Related Episode Title</a></h3>
                        <div class="episode-meta">Season 1 &middot; Episode 2</div>
                        </div>
                    </div>
                    </div>
                    <div class="episode-img-container">
                    <img src="/img/episodes/ep068_800x800.jpg" alt="Episode cover art">
                    <div class="episode-info-container">
                        <div class="episode-info">
                        <h3 class="episode-title"><a href="episode.html">Related Episode Title</a></h3>
                        <div class="episode-meta">Season 2 &middot; Episode 11</div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="more-episodes">
                    <h4><a href="/seasons.html">More Episodes <i class="fas fa-fast-forward"></i></a></h4>
                </div>

                </section>

            </main>

            <footer>

                <nav class="nav-footer">
                <ul>
                    <li>Copyright 2018 <a href="http://www.pioslabs.com">Pios Labs</a></li>
                    <li><a href="/privacy.html">Privacy Policy</li>
                    <li><a href="subscribe.html">Subscribe</a></li>
                    <li class="footer-social-container">
                    <a href="http://patreon.com/pioslabs" target="_blank" title="Support the show on Patreon (opens in new window)"><i class="fab fa-patreon"></i></a>
                    <a href="https://soundcloud.com/piuswong" target="_blank" title="Listen on SoundCloud (opens in new window)"><i class="fab fa-soundcloud"></i></a>
                    <a href="https://www.facebook.com/K12EngineeringEducation/" target="_blank" title="Like on Facebook (opens in new window)"><i class="fab fa-facebook-f"></i>
                    <a href="https://twitter.com/K12Engineering" target="_blank" title="Follow on Twitter (opens in new window)"><i class="fab fa-twitter"></i>
                    </li>
                </ul>
                </nav>

            </footer>



    </body>

    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

</html>
