<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return the home page
        $posts = DB::select("select * from posts order by id desc");
        return view("home", ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("createPost");
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
        $title = $request->post("title");
        $body = $request->post("body");
        DB::insert('INSERT INTO posts(title, body,created_at) VALUES(:title,:body,:createdAt)', ['title'=> $title,"body"=>$body,"createdAt"=>now()]);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $posts = DB::select('select * from posts where id = ?', [$id]);
        return view("viewPost",['post'=>$posts[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = DB::select("select * from posts where id = ?", [$id]);
        $post = $posts[0];
        return view("editPost", ["id"=> $id,"title"=> $post->title, "body"=> $post->body]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $title = $request->post('title');
        $body = $request->post('body');
        DB::update('update posts set title = :title, body= :body where id = :id', ["title"=>$title,"body"=>$body,"id"=>$id]);
        return redirect()->route('home');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::delete('delete from posts where id = ?', [$id]);
        return redirect()->route('home');
    }
}
