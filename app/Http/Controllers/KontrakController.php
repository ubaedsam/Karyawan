<?php

namespace App\Http\Controllers;

use App\Http\Resources\KontrakResource;
use App\Models\Kontrak;
use Illuminate\Http\Request;

class KontrakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Menampilkan semua data post sebanyak 10 data per halaman
        $kontraks = Kontrak::paginate(10);

        return KontrakResource::collection($kontraks);
    }

    public function all()
    {
        return view('kontrak',[
            'kontraks' => Kontrak::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_kontrak');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kontrak = new Kontrak();
        $kontrak->durasi = $request->durasi;
        $kontrak->gaji = $request->gaji;
        if($kontrak->save())
        {
            return new KontrakResource($kontrak);
        }
    }

    public function tambah(Request $request)
    {
        // Untuk setelah login
        $validateData = $request->validate([
            'durasi' => 'required',
            'gaji' => 'required'
        ]);

        $kontrak = new Kontrak();
        $kontrak->durasi = $request->input('durasi');
        $kontrak->gaji = $request->input('gaji');
        $kontrak->save();
        return redirect('kontrak')->with('success','Data kontrak berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kontrak = Kontrak::findOrFail($id);
        return new KontrakResource($kontrak);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editk($id)
    {
        $kontrak = Kontrak::find($id);
        return view('edit_kontrak',['kontrak' => $kontrak]);
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
        $kontrak = Kontrak::findOrFail($id);
        $kontrak->durasi = $request->durasi;
        $kontrak->gaji = $request->gaji;
        if($kontrak->save())
        {
            return new KontrakResource($kontrak);
        }
    }

    public function ubahk(Request $request, $id)
    {
        // Untuk setelah login
        $validateData = $request->validate([
            'durasi' => 'required',
            'gaji' => 'required'
        ]);

        $kontrak = Kontrak::find($id);
        $kontrak->durasi = $request->input('durasi');
        $kontrak->gaji = $request->input('gaji');
        $kontrak->update();
        return redirect('kontrak')->with('success','Data kontrak berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kontrak = Kontrak::findOrFail($id);
        if($kontrak->delete())
        {
            return new KontrakResource($kontrak);
        }
    }

    public function hapusk($id)
    {
        // Untuk setelah login
        $kontrak = Kontrak::find($id);
        $kontrak->delete();
        return redirect()->back()->with('success','Data kontrak berhasil dihapus!');
    }
}
