<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use App\Http\Resources\PegawaiResource;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Menampilkan semua data post sebanyak 10 data per halaman
        $pegawais = Pegawai::paginate(10);

        return PegawaiResource::collection($pegawais);
    }

    public function all()
    {
        return view('pegawai',[
            'pegawais' => Pegawai::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_pegawai');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // untuk API
        $pegawai = new Pegawai();
        $pegawai->nama = $request->nama;
        $pegawai->ttl = $request->ttl;
        $pegawai->usia = $request->usia;
        if($pegawai->save())
        {
            return new PegawaiResource($pegawai);
        }
    }

    public function tambah(Request $request)
    {
        // Untuk setelah login
        $validateData = $request->validate([
            'nama' => 'required',
            'ttl' => 'required',
            'usia' => 'required'
        ]);

        $pegawai = new Pegawai;
        $pegawai->nama = $request->input('nama');
        $pegawai->ttl = $request->input('ttl');
        $pegawai->usia = $request->input('usia');
        $pegawai->save();
        return redirect('pegawai')->with('success','Data pegawai berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return new PegawaiResource($pegawai);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editp($id)
    {
        $pegawai = Pegawai::find($id);
        return view('edit_pegawai',['pegawai' => $pegawai]);
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
        // Untuk API
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->nama = $request->nama;
        $pegawai->ttl = $request->ttl;
        $pegawai->usia = $request->usia;
        if($pegawai->save())
        {
            return new PegawaiResource($pegawai);
        }
    }

    public function ubahp(Request $request, $id)
    {
        // Untuk setelah login
        $validateData = $request->validate([
            'nama' => 'required',
            'ttl' => 'required',
            'usia' => 'required'
        ]);

        $pegawai = Pegawai::find($id);
        $pegawai->nama = $request->input('nama');
        $pegawai->ttl = $request->input('ttl');
        $pegawai->usia = $request->input('usia');
        $pegawai->update();
        return redirect('pegawai')->with('success','Data pegawai berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Untuk API
        $pegawai = Pegawai::findOrFail($id);
        if($pegawai->delete())
        {
            return new PegawaiResource($pegawai);
        }
    }

    public function hapusp($id)
    {
        // Untuk setelah login
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        return redirect()->back()->with('success','Data pegawai berhasil dihapus!');
    }
}
