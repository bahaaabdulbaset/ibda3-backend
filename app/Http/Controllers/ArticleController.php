<?php

namespace App\Http\Controllers;

use App\Models\Post;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = \App\Models\Post::all();
        return view('postrates.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('postrates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules =[
            'title' => 'required',
        ];

        $messages= [
            'title.required' => 'ادخل عنوان المقالة',


        ];

        $this->validate($request,$rules,$messages);




        $record = new Post;
        //   this is create  &  this is for database table
        $record->title = $request->input('title');
        $record->views = $request->input('view');
        $record->save();
        flash('تم اضافة مقالة جديدة')->success();
        return redirect(route('article.index'));

        //        $record = Article::create($request->all()); ممكن نستخدم السطر دا يضيف البيانات كلها من غير ماكتبها سطر سطر

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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model =  \App\Models\Post::findOrFail($id);

        return redirect(route('article.edit', compact('model')));


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
