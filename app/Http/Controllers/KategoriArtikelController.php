<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategoriartikels;
use App\artikels;
use Alert;
class KategoriArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriartikels = kategoriartikels::all();
        return view('kategoriartikel.index',compact('kategoriartikels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategoriartikel.create');
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

        $this->validate($request,[
            'nama_kategori' => 'required',
           
        ]);

        $kategoriartikels = new kategoriartikels;
        $kategoriartikels->nama_kategori = $request->nama_kategori;
        $kategoriartikels->save();
        return redirect()->route('kategoriartikel.index');
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

        $kategoriartikels = kategoriartikels::findOrFail($id);
        return view('kategoriartikel.edit',compact('kategoriartikels'));
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
             'nama_kategori' => 'required',
            
        ]);

        $kategoriartikels = kategoriartikels::findOrFail($id);
        $kategoriartikels->nama_kategori = $request->nama_kategori;
        $kategoriartikels->save();
        return redirect()->route('kategoriartikel.index');
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

        $kategoriartikels = kategoriartikels::findOrFail($id);
        $kategoriartikels->delete();
        return redirect()->route('kategoriartikel.index');
    }
}
