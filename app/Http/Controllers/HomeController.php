<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;
use App\Harm;
use App\Source;
use App\Dl;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function harmonogram(){
        $posts = Harm::all();
        foreach($posts as $post){
            $post->newDate = Carbon::createFromFormat("Y-m-d", $post->date)->format("d. m. Y");
        }
        return view('harmonogram',compact('posts'));
    }

    public function posts(){
        $posts = Post::all();
        foreach($posts as $post){
            $post->newDate = Carbon::createFromFormat("Y-m-d", $post->date)->format("d. m. Y");
        }
        return view('posts',compact('posts'));
    }

    public function technologies(){
        return view('technologies');
    }

    public function sources(){
        $sources = Source::all();
        return view('sources',compact('sources'));
    }

    public function downloads(){
        $downloads = Dl::all();
        return view('downloads',compact('downloads'));
    }
}
