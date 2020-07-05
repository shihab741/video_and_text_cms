<?php

namespace App\Http\Controllers;

use App\post;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
    	$posts = post::where('status', 1)->orderBy('id', 'DESC')->get();
    	return view('front-end.home.landing-page', ['posts' => $posts]);
    }

    public function single($id)
    {
    	$post = post::find($id);
    	return view('front-end.single.single-page', ['post' => $post]);
    }
}
