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
            <h3 class="episode-title"><a href="episode.html">{{ $episodes[0]->title }}</a></h3>
                <div class="episode-meta">Season {{ $episodes[0]->season_id }} &middot; Episode {{ $episodes[0]->episode_id_season }}</div>
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

            @for ($ep = 1; $ep <= 2; $ep++)
                <div class="episode-img-container">
                    <img src="/img/episodes/ep{{ $episodes[$ep]->episode_id }}_800x800.jpg" alt="Episode cover art" onerror="this.onerror=null;this.src='{{ $image_default }}'">
                    <div class="episode-info-container">
                        <div class="episode-info">
                        <h3 class="episode-title"><a href="episode.html">{{ $episodes[$ep]->title }}</a></h3>
                        <div class="episode-meta">Season {{ $episodes[$ep]->season_id }} &middot; Episode {{ $episodes[$ep]->episode_id_season }}</div>
                        </div>
                    </div>
                </div>        
            @endfor
            
        </div>

        <div class="episodes-related">

            @for ($ep = 3; $ep <= 4; $ep++)
                <div class="episode-img-container">
                    <img src="/img/episodes/ep{{ $episodes[$ep]->episode_id }}_800x800.jpg" alt="Episode cover art" onerror="this.onerror=null;this.src='{{ $image_default }}'">
                    <div class="episode-info-container">
                        <div class="episode-info">
                        <h3 class="episode-title"><a href="episode.html">{{ $episodes[$ep]->title }}</a></h3>
                        <div class="episode-meta">Season {{ $episodes[$ep]->season_id }} &middot; Episode {{ $episodes[$ep]->episode_id_season }}</div>
                        </div>
                    </div>
                </div>        
            @endfor

        </div>

        <div class="more-episodes">
            <h4><a href="/seasons.html">More Episodes <i class="fas fa-fast-forward"></i></a></h4>
        </div>

        </section>

    </main>

@endsection