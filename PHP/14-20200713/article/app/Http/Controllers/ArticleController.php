<?php

namespace App\Http\Controllers;

use App\articles;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Articles::all();
        dd($articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $categories = ['Thoi Su', 'Chinh Tri', 'Phap Luat']; // lay tu DB ve
        return view('articles.create', [
            'categories' => $categories
        ]);
        // return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // dd($request->all());
        // $articles = new articles();
        // $articles->title = $request->title;
        // $articles->description = $request->description;
        // $articles->slug = Str::slug($articles->description,'-');
        // $articles->content = $request->content;
        // $articles->save();
        // return redirect()->route('articles.create');}
        articles::create([
            'title'=>$request->title,
            'slug'=>Str::slug($request->title,'-'),
            'description'=>$request->description,
            'content'=>$request->content
        ]);
        return redirect()->route('articles.index');}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }
}
