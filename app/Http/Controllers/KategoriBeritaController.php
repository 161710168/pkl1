<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategoriberitas;
use App\beritas;
use Alert;
class KategoriBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriberitas = kategoriberitas::all();
        return view('kategoriberita.index',compact('kategoriberitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategoriberita.create');
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

        $kategoriberitas = new kategoriberitas;
        $kategoriberitas->nama_kategori = $request->nama_kategori;
        $kategoriberitas->save();
        return redirect()->route('kategoriberita.index');
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

        $kategoriberitas = kategoriberitas::findOrFail($id);
        return view('kategoriberita.edit',compact('kategoriberitas'));
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

        $kategoriberitas = kategoriberitas::findOrFail($id);
        $kategoriberitas->nama_kategori = $request->nama_kategori;
        $kategoriberitas->save();
        return redirect()->route('kategoriberita.index');
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

        $kategoriberitas = kategoriberitas::findOrFail($id);
        $kategoriberitas->delete();
        return redirect()->route('kategoriberita.index');
    }
}
