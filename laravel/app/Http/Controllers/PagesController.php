<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home()
    {
        // Get data

        $episodes = \App\Episode::all();
        // return $projects; // default returns as JSON format
        $guests = \App\Guest::all();
            // create a new model for each table? i.e. in PowerShell:
            // php artisan make:model Guest
            // creates Guest.php in app/http/

        $titles = $episodes->map->title; // created w/ php artisan make:model Project
            // PS4 namespace structure


        // Return view

        // return view('projects.titles',[ // searches 'projects' directory in 'views'
        //     'titles' => $titles
        // ]);
        // return view('projects.titles', compact('projects','titles')); // shortened code
        return view('home', compact('episodes','titles','guests')); // shortened code

    }


}
