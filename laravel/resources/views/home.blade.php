@extends('layout')

@section('title','Home: Laravel Testing')

@section('content')
    <h1>
        This page should display Episode data from the database.
    </h1>
    <p>
        Here's body text.
    </p>


    <h2>Titles:</h2>
    <ul>
        @foreach($titles as $title)
            <li>{{$title}}</li>
        @endforeach
    </ul>
    <hr>

    <h2>Episode IDs:</h2>
    <ul>
        @foreach($episodes as $episode)
            <li>{{$episode->episode_id}}</li>
        @endforeach
    </ul>

    <h2>Guests:</h2>
    <ul>
        @foreach($guests as $guest)
            <li>{{$guest->firstname}}</li>
        @endforeach
    </ul>

@endsection