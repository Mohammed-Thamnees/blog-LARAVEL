<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article=Article::all();
        //return $article;
        if(Auth()->user()->role=='admin'){
            return view('backend.pages.admin.article_list')->with('article',$article);
        }
        else{
            return view('backend.pages.staff.article_list')->with('article',$article);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.staff.article_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'heading'=>'required|string|min:3',
            'category'=>'required|string',
            'content'=>'required|string|min:5',
        ]);

        $data=$request->all();
        $data['user_id']=Auth()->user()->id;
        $data['category_id']=$request->category;
        //return $data;
        $status=Article::create($data);
        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article=Article::find($id);
        return view('backend.pages.admin.article_view')->with('article',$article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article=Article::find($id);
        if(Auth()->user()->role=='admin'){
            return view('backend.pages.admin.article_edit')->with('article',$article);
        }
        else{
            return view('backend.pages.staff.article_edit')->with('article',$article);
        }
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
        $article=Article::find($id);

        $this->validate($request,[
            'heading'=>'required|string|min:3',
            'category'=>'required|string',
            'content'=>'required|string|min:5',
        ]);

        $data=$request->all();
        $data['user_id']=Auth()->user()->id;
        $data['category_id']=$request->category;

        $status=$article->fill($data)->save();
        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article=Article::find($id);
        $status=$article->delete();
        return redirect()->route('article.index');
    }
}
