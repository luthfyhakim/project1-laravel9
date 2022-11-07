<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LokerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Loker::all();

        return view('loker.index', [
            'loker' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('loker.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'nama_pekerjaan' => 'required',
            'nama_perusahaan' => 'required',
            'lokasi' => 'required',
            'gaji' => 'required',
            'gambar' => 'required'
        ]);

        Loker::create([
            'id' => $request->id,
            'nama_pekerjaan' => $request->nama_pekerjaan,
            'nama_perusahaan' => $request->nama_perusahaan,
            'lokasi' => $request->lokasi,
            'gaji' => $request->gaji,
            'gambar' => $request->gambar
        ]);

        return redirect('/loker');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Loker::find($id);

        return view('loker.detail', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Loker::find($id);

        return view('loker.edit', [
            'data' => $data
        ]);
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
        $this->validate($request, [
            'id' => 'required',
            'nama_pekerjaan' => 'required',
            'nama_perusahaan' => 'required',
            'lokasi' => 'required',
            'gaji' => 'required',
            'gambar' => 'required'
        ]);

        $loker = Loker::find($id);

        $loker->id = $request->id;
        $loker->nama_pekerjaan = $request->nama_pekerjaan;
        $loker->nama_perusahaan = $request->nama_perusahaan;
        $loker->lokasi = $request->lokasi;
        $loker->gaji = $request->gaji;
        $loker->gambar = $request->gambar;

        $loker->save();

        return redirect('/loker/show/' . $loker->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $loker = Loker::find($id);
        $loker->delete();

        return redirect('/loker');
    }
}
