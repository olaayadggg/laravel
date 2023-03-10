<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts=Post::get('posts');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post=Post::where('user_id',$id)->get();
        return view('show',['posts'=> $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PostModel $postModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PostModel $postModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostModel $postModel)
    {
        //
    }
}
