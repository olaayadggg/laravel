<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;

class Postcontroller extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return view('posts.allposts', ['Post' => $posts]);
    }

    
    public function create()
    {
        return view('posts.create');
    }

    
    public function store(Request $request)
    {
        $validated=$request ->validate([
            'title' => 'required',
            'discription' => 'required',
            'creator' => 'required',
            'created_at' => 'required',
        ]);

        Post::create($request->all());
        return redirect()->route('posts.allposts');
    }
    
    public function show($id)
    {
        $post=Post::find($id);
        // or Post::where('name','ola ayad');
        return view('posts.singlepost',['post'=> $post]);
    }

    
    public function edit($id,Request $request)
    {
        // dd($id,$request->all());
        $post = Post::find($id);
        $post->update($request->except(['_method','_token']));
        return redirect()->route('posts.allposts');
        // or $post ->update([
        //     'title'=> $request->title,
        //     'discription'=> $request->discription,
        //     'creator'=>$request->creator,
        //     'created_at'=>$request->created_at,
        // ]);

        // or $post->update($request->all);
    }

    
    public function update($id)
    {
        $post =Post::find($id);
        return view('posts.update',compact('post'));
    }

    
    public function destroy($id)
    {
        
        $post =Post::find($id);
        $post->delete();
        // or Post::where('id',$id)->delete();
        return redirect()->route('posts.allposts');

    }
}


