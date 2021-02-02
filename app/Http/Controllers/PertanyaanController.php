<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;
use App\Tag;
use Auth;

class PertanyaanController extends Controller{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth')->only(['create', 'store', 'edit', 'update', 'delete']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
      $pertanyaan = Pertanyaan::all();
      return view('pertanyaan.index', compact('pertanyaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('pertanyaan.create');
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
          'judul' => 'required',
          'isi'   => 'required',
          'tags'  => 'required'
        ]);
        // splitting tags input
        $arr_tags = explode(',', $request['tags']);
        // dd($arr_tags);
        // insert into tag table
        $tag_ids = [];
        foreach ($arr_tags as $tag) {
          $tag        = Tag::firstOrCreate(['nama_tag' => $tag]);
          $tag_ids[]  = $tag->id;
        }
        $pertanyaan = Pertanyaan::create([
          'judul'   => $request->judul,
          'isi'     => $request->isi,
          'user_id' => Auth::id()
        ]);
        $pertanyaan->tags()->sync($tag_ids);
        return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $pertanyaan = Pertanyaan::find($id);
      return view('pertanyaan.show', compact('pertanyaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $pertanyaan = Pertanyaan::find($id);
      return view('pertanyaan.edit', compact('pertanyaan'));
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
      $request->validate([
          'judul' => 'required|unique:pertanyaan',
          'isi' => 'required',
      ]);

      $pertanyaan = Pertanyaan::find($id);
      $pertanyaan->judul = $request->judul;
      $pertanyaan->isi = $request->isi;
      $pertanyaan->update();
      return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $pertanyaan = Pertanyaan::find($id);
      $pertanyaan->delete();
      return redirect('/pertanyaan');
    }
}
