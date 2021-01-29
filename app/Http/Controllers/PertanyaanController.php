<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PertanyaanController extends Controller
{
    // tampilkan all pertanyaan
    public function index(){
      // SELECT * from pertanyaan
      $pertanyaan = DB::table('pertanyaan')->get();

      // mengirim data pertanyaan ke view
      return view('index', ['pertanyaan' => $pertanyaan]);
    }

    // menampilkan form tambah pertanyaan
    public function create(){
      return view('create');
    }

    // menyimpan form pertanyaan ke database
    public function store(Request $request){
      // insert data ke table pegawai
      DB::table('pertanyaan')->insert([
        'judul' => $request->judul,
        'isi' => $request->isi,
        'tanggal_dibuat' => Carbon::now()->toDateTimeString(),
        'tanggal_diperbaharui' => Carbon::now()->toDateTimeString(),
        'jawaban_tepat_id' => 0,
        'profil_id' => 0
      ]);
      // alihkan halaman ke halaman pegawai
      return redirect('/pertanyaan')->with('success', 'Berhasil menyimpan pertanyaan');
    }

    // melihat pertanyaan dengan id
    public function show($id){
      $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();
      return view('show', compact('pertanyaan'));
    }

    // alihkan ke halamanedit pertanyaan
    public function edit($id){
      $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();
      return view('edit', compact('pertanyaan'));
    }

    // update data ke database
    public function update($id, Request $request){
      $query = DB::table('pertanyaan')->where('id', $id)
        ->update([
          'judul' => $request->judul,
          'isi' => $request->isi
        ]);
        return redirect('/pertanyaan')->with('success', 'Berhasil Mengubah pertanyaan');
    }

    // delete data dari database
    public function destroy($id){
      $query = DB::table('pertanyaan')->where('id', $id)->delete();
      return redirect('/pertanyaan')->with('success', 'Berhasil menghapus pertanyaan');
    }

}
