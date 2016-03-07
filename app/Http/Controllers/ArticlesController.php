<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article;

class ArticlesController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth',['except'=>['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,Article::$create_validation_rules);
        $data = $request->only('title','content','slug');
        $data['user_id'] = \Auth::user()->id;
        $article = Article::create($data);
        if($article)
        {
          return redirect()->route('articles.index');
        }
        else {
          return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id)->firstOrFail();
        // dd($article->created_at);
        return view('articles.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $article = Article::find($id)->firstOrFail();
      return view('articles.edit',compact('article'));
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
        $this->validate($request,Article::$update_validation_rules);
        $data = $request->only('title','content','slug');
        $article = Article::find($id)->firstOrFail();
        if($article)
        {
          $article->update($data);
          return redirect()->route('articles.show',$article->id);
        }

        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::destroy($id);
        return redirect()->route('articles.index');
    }
}
