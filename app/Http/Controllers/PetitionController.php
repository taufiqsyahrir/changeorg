<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\PetitionRequest;
use App\Petition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentRequest;

class PetitionController extends Controller
{
    // -- untuk Auth. sejak di tuils ini maka semua halaman butuh login.
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('auth')->except(['index', 'show']);
    }


    //
    //menampilkan semuanya
    public function index(){
        $petitions = Petition::all();
        //return $petitions;
        return view('petition/index', compact('petitions')); //seperti GET
        //atau . sama saja dengan /
        //return view('petition.index', compact('petitions'));
    }

    //menampilkan yang spesific
    public function show($id){
        $petition = Petition::where('id', $id)->first();
        //atau
        //$petition = Petition::find($id);

        //return $petitions;
        return view('petition/show', compact('petition'));
    }


    public function create()
    {
        return view('petition/create');
    }

    public function store(PetitionRequest $request){
    //public function store(Request $request){
        //return $request->input(); //ini menuju /petitions menggunakan metode post
        $input = $request->input();
        $petition = New Petition($input);

        /* ini cara yang panjang
        $user_id = Auth::user()->id;
        $petition['user_id'] = $user_id;
        $petition->save();
        */

        //ini cara yang singkat
        Auth::user()->petitions()->save($petition);

        return redirect(url('petitions')); //ini menuju /petitions menggunakan metode get
    }

    public function edit($id){
        $petition = Petition::find($id);
        return view('petition/edit', compact('petition'));
    }

    public function update(PetitionRequest $request, $id){
        $petition = Petition::find($id);
        $input = $request->input();
        $petition->update($input);
        return redirect(url('petitions/'.$id));
    }

    public function destroy($id){
        $petition = Petition::find($id);
        $petition->delete();
        return redirect(url('petitions/'));
    }

    public function storeComment(CommentRequest $request, $id)
    {
        //dd($request);
        //die;
        $comment = $request->input();
        $petition = Petition::findOrFail($id);
        $petition->comments()->create($comment);
        return back();
    }
}
