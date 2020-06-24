<?php

namespace App\Http\Controllers;

use App\Policies\PostPolicy;
use App\Post;
use Illuminate\Http\Request;

use App\Comment;

class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $post = (Post::inRandomOrder()->limit(1)->with('comments')->get())[0];

        // $comment = New Comment;
        // $comment->content = "This is sample content";
        // dump( $post->comments()->save($comment) );

        $user = auth()->user();

        // $user = auth()->user();

        // $user->posts()->title = "Test title";
        // $user->posts()->content = "Nothing really";

        // $user->posts()->comments()->content = "this is just awesome";

        // $user->save();

    //    $post =  $user->posts()->create([
    //         'title'=>"Test title",
    //         'content' => "Nothing really",
    //     ]);

      //  dd( $user->posts->first()->comments()->create(['content' => "this is just awesome"]));


          $comments = $user->comments;

          dump($comments);

        // $post = new Post;

        // $post->title = "Test title";
        // $post->content = "Nothing really";

        // $post = $user->posts()->save($post);

       // $post->comments()->create(['content' => "this is just awesome"]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
