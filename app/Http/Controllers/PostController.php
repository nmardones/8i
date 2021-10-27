<?php

namespace App\Http\Controllers;

use App\Repositories\Posts;

class PostController extends Controller
{

    protected $posts;

    public function __construct(Posts $posts){
        $this->posts = $posts;
    }

    public function index(){
        $posts = $this->posts->all();
        return view('welcome',compact('posts'));
    }
    public function show($id){
        $post = $this->posts->find($id);
        return view('post',compact('post'));
    }

}
