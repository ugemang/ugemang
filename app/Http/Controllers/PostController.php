<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;


class PostController extends Controller
{
    //

    public function index(){

      $posts = post::all();//where('title','=','1')-get();
       //$posts = \DB::table('posts')->get(); //put \ in front of DB becuase of namespace = > without this it can cuase can not find class error
       //dd($posts);
      return view('curation', compact('posts'));
    }
    //=> this same as $tast = Blog:: all(); return veiw('post.index', compact('tasks')) from routes

    public function show($id){
      $post = post::where('document_id', $id)->get();
      dd($post);
      return view('post', compact('post'));

    }

    public function create(){
      return view('writeCuration');
    }

    public function store(){

      //dd(request() -> all());

      //dd(request('title'));//=> if you just want title

      //dd(request(['title','content'])); => also you can pick specific values by using array as parameter
      //create a new post using requests
      //$curation = new post;

      //1. simple form with no validataion

      /*$curation -> title = request('title');
      $curation -> content = request('content');

      $curation -> save();*/

      //2. create() with validataion

      // $curation::create([
      //
      //   'title' => request('title'),
      //   'content' => request('content')
      // ]);

      //3. the most simple form

      post::create(request(['title','content']));
      return redirect('/curation');

    }
}
