<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;


class PostController extends Controller
{
    //

    public function index(){

      // $posts = post::get();
      // $posts = \DB::table('posts')->get(); put \ in front of DB becuase of namespace = > without this it can cuase can not find class error

      return view('curation', compact('posts'));
    }
    //=> this same as $tast = Blog:: all(); return veiw('post.index', compact('tasks')) from routes

    public function show($id){
      $post = post::find($id);

      return view('post.show', compact('post'));

    }
}
