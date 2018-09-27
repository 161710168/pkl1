<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikels;
use App\kategoriartikels;
use App\User;
use File;
use Alert;
class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        $artikels =artikels::all();
        return view('artikel.index',compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artikels = artikels::all();
        return view('artikel.create',compact('artikels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Data successfully saved','Good Job')->autoclose(1700);
        $this->validate($request, [
            'judul' => 'required|max:255',
            'gambar' => '',
            'deskripsi' => 'required|max:255',
        ]);

        $artikels = new artikels;
        $artikels->judul = $request->judul;
        $artikels->deskripsi = $request->deskripsi;

        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path(). '/assets/img/artikel/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $artikels->gambar = $filename;
        } 
        $artikels->save();
        return redirect()->route('artikel.index');
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

        $artikels = artikels::findOrFail($id);
        return view('artikel.edit',compact('artikels'));
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
        Alert::success('Data successfully changed','Good Job')->autoclose(1700);

        $this->validate($request,[
             'judul' => 'required',
             'gambar' => 'required',
             'deskripsi' => 'required',
            ]);

        $artikels = artikels::findOrFail($id);
        $artikels->judul = $request->judul;
        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path(). '/assets/img/artikel/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);

        if ($artikels->gambar) {
        $old_gambar = $artikels->gambar;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/artikel'
        . DIRECTORY_SEPARATOR . $artikels->gambar;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $artikels->gambar = $filename;
        }
            $artikels->deskripsi = $request->deskripsi;
            $artikels->save();

        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alert::success('Data successfully deleted','Good Job')->autoclose(1700);

        $artikels = artikels::findOrFail($id);
        $artikels->delete();
        return redirect()->route('artikel.index');
    }
}
