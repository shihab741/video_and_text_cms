<?php

namespace App\Http\Controllers;

use App\post;
use Image;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::orderBy('id', 'DESC')->get();
        return view('admin.dashboard.home', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Checks whether excerpt is entered or not
        $this->validate($request,[
            'excerpt' => 'required'
        ]);

        // Checks whether video link is posted or not amd then only video id is collected from url.
        if(isset($request->video_id))
        {
            $video_link = $request->video_id;
            $video_link_exploded = explode("v=", $video_link);
            $video_id = $video_link_exploded[1];
        }
        else
        {
            $video_id = NULL;
        }


        // Checks wheteher image is selected or not.
        $image = $request->file('image');
        if(isset($image))
        {
            $imageName = $image->getClientOriginalName();
            $directory = 'uploads/post-images/';
            $imageUrl = $directory.$imageName;

            // If Image with same name already exists in server, following line rename uploaded image.
            while(file_exists($imageUrl))
            {
                $imageNameWithoutExtension = basename($imageName, '.'.$image->getClientOriginalExtension());
                $imageName = $imageNameWithoutExtension.'-copy'.'.'.$image->getClientOriginalExtension();
                $imageUrl = $directory.$imageName;
            }

            Image::make($image)->resize(960,540)->save($imageUrl);
        }
        else
        {
            $imageName = NULL;
        }

        $post = new post();
        $post->title = $request->title;
        $post->video_id = $video_id;
        $post->excerpt = $request->excerpt;
        $post->body = $request->body;
        $post->image = $imageName;
        $post->section = $request->section;
        $post->type = $request->type;
        $post->status = $request->status;
        $post->save();

        return redirect('dashboard')->with('message', '<div class="alert alert-success" role="alert">Post added successfully!</div>'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::find($id);
        if($post->image)
        {
            unlink('uploads/post-images/'.$post->image);
            $post->delete();
        }
        else
        {
            $post->delete();
        }
        
        return redirect()->back()->with('message', '<div class="alert alert-success" role="alert">Post deleted successfully!</div>');
    }


    public function publish($id)
    {
        $post = post::find($id);
        $post->status = 1;
        $post->save();

        return redirect()->back()->with('message', '<div class="alert alert-success" role="alert"> Published successfully!</div>');
    }

    public function unpublish($id)
    {
        $post = post::find($id);
        $post->status = 0;
        $post->save();

        return redirect()->back()->with('message', '<div class="alert alert-success" role="alert">Unublished successfully!</div>');
    }

    public function to_section_one($id)
    {
        $post = post::find($id);
        $post->section = 1;
        $post->save();

        return redirect()->back()->with('message', '<div class="alert alert-success" role="alert"> Moved to section one successfully!</div>');
    }

    public function to_section_two($id)
    {
        $post = post::find($id);
        $post->section = 2;
        $post->save();

        return redirect()->back()->with('message', '<div class="alert alert-success" role="alert">Moved to section two successfully!</div>');
    }

    public function ajaxTitleCheck()
    {
        $a = $_GET['title'];

        $post = post::where('title', $a)->first();

        if($post)
        {
            echo "Already exists! Submit button is disabled. Please use another title for your post.";
        }
        else
        {
            echo 'Available!';
        }
    }

}
