@extends('layout')


@section('body_classes','home')


@section('main_content')

    <main class="episode-container">

        <section class="episode-primary" id="episode-primary">
        <h2 class="section-title">Latest Episode</h2>
        <div class="episode-player-container">
            {!! $latest_episode_embed !!}
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

@endsection