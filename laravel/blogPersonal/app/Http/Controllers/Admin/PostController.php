<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function getIndex()
    {
        $posts = Post::all();

        return view('blog.index',['posts'=>$posts]);
    }

    public function getAdminIndex()
    {
        $posts = Post::all();

        return view('blog.index',['posts'=>$posts]);
    }

    public function getPost($id)
    {
        $post = Post::find($id);

        return view('blog.post',['post'=>$post]);
    }

    public function getAdminCreate()
    {
        return view('admin.create');
    }

    public function postAdminCreate(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|min:5',
            'content'=>'required|min:18'
        ]);
        $post = new Post(
            [
                'title'=>$request->input('title'),
                'content'=>$request->input('content')
            ]);
        $post->save();

        return redirect()->route('admin.index')->with('info','Post created, Title is: '.$request->input('title'));
    }
    public function getAdministrador()
    {
        $posts = Post::all();
        return view('admin.index',compact('posts'));
    }

    public function getAdminEdit($id)
    {
        $post = Post::find($id);

        return view('admin.index',['post'=>$post,'postId'=>$id]);
    }    
}
