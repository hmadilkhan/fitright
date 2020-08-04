<?php

namespace App\Http\Controllers;

use App\Post;
use App\Timeline;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $username = Timeline::where('id',session('timelineID'))->get();
        $posts = Post::orderBy('created_at','DESC')->where(['active'=> 1])->get();
        return view('home',compact('username','posts'));
    }
}
