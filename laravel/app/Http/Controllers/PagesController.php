<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home()
    {
        // Get metadata
        $title = 'The K12 Engineering Education Podcast, by Pios Labs';
        $description = 'Listen to conversations and stories about how to bring engineering to younger ages.  A podcast for educators, engineers, entrepreneurs, parents, and everyone else.';
        $keywords = 'engineering, education, k12, k-12, podcast, STEM, STEAM, conversation, communication, secondary education, primary education, elementary education, science, technology, NGSS, design, teaching, teachers, educators';
        $url = 'http://www.k12engineering.net';
        $fb_image = 'http://www.k12engineering.net/img/episodes/ep0_800x800.jpg';
        $fb_description = $description;
        $twitter_description = 'Stories and conversations about how to bring engineering to younger ages. #K12Engineering';
        $twitter_image = $fb_image;
        $twitter_image_alt = 'K12 Engineering Education Podcast logo';

        // Get episode data
        // $episodes = \App\Episode::all();
        $episodes = \App\Episode::orderBy('date_released', 'desc')->take(5)->get();
        $latest_episode_id = $episodes[0]->episode_id;
        $latest_episode_embed = \App\Embed_code::where('episode_id',$latest_episode_id)->pluck('soundcloud');
        $latest_episode_embed = json_decode(json_encode($latest_episode_embed, JSON_UNESCAPED_SLASHES),true)[0];


        // Return view
        return view('home', compact('title','description','keywords','fb_image','url', 'fb_image','fb_description','twitter_description','twitter_image','twitter_image_alt','episodes','latest_episode_embed')); // shortened code
        // return view('home', [
        //     'title' => $title,
        //     'description' => $description,
        //     'keywords' => $keywords,
        //     'fb_image' => $fb_image,
        //     'url' => $url
        // ]);
    }


}
