<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //create-store, edit-update,

    public function index()
    {
        //menampilkan semua
        $news = News::all();
        //200 adalah pesan sukses, mirip 404 untuk gagal
        $data = [
            'message' => 'Success',
            'code' => 200,
            'data' => $news
        ];
        return response($data, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //menampilkan form
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //ketika dipost
        $input = $request->input();
        $news = New News($input);
        $news->save();
        $data = [
            'message' => 'Success',
            'code' => 200,
            'data' => $news
        ];
        return response($data, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //menampilkan 1 data
        $data = [
            'message' => 'Success',
            'code' => 200,
            'data' => $news
        ];
        return response($data, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //menampilkan form
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //menyimpan perubahan yang ada pada edit
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //untuk tombol delete
    }
}
