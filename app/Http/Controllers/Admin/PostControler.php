<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostControler extends Controller
{
    public function index()
    {
       $posts = Post::latest()->paginate(10);
        return view('admin.post.index' , compact('posts'));
          

    }
    public function create ()
    {
        return view('admin.post.create' );
    }
    
    public function store(Request $request) 
    {  
        $request->validate([
            'title'=>'required',
            'description'=>'required'


        ]);  
        $post = Post::create($request->all());
        return redirect()->route('post.index')->with('sccuess' , 'added successefully ');  
      
    } 
    public function show(Post $post)  
    { 
     
        return view('admin.post.show' , compact('post'));

  
    }

    public function edit(Post $post)
    {
        return view('admin.post.edit' , compact('post'));
    }

    public function update(Request $request, Post $post)  
    {  
        $request->validate([
            'title'=>'required',
            'description'=>'required',


        ]);  
        $post ->update($request->all());
        return redirect()->route('post.index')->with('sccuess' , 'updated successefully ');  
      
          
    }  
    public function destroy( $post)

    {

       $post = POST::findOrFail($post);
       $post ->delete();
       return redirect()->route('post.index')
       ->with('sccuess' , 'deleted successefully ');  
    }

}
