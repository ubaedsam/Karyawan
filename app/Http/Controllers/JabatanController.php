<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use App\Http\Resources\JabatanResource;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Menampilkan semua data post sebanyak 10 data per halaman
        $jabatans = Jabatan::paginate(10);
        return JabatanResource::collection($jabatans);
    }

    public function all()
    {
        return view('jabatan',[
            'jabatans' => Jabatan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_jabatan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jabatan = new Jabatan();
        $jabatan->jabatan = $request->jabatan;
        if($jabatan->save())
        {
            return new JabatanResource($jabatan);
        }
    }

    public function tambah(Request $request)
    {
        // Untuk setelah login
        $validateData = $request->validate([
            'jabatan' => 'required'
        ]);

        $jabatan = new Jabatan();
        $jabatan->jabatan = $request->input('jabatan');
        $jabatan->save();
        return redirect('jabatan')->with('success','Data jabatan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        return new JabatanResource($jabatan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editj($id)
    {
        $jabatan = Jabatan::find($id);
        return view('edit_jabatan',['jabatan' => $jabatan]);
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
        $jabatan = Jabatan::findOrFail($id);
        $jabatan->jabatan = $request->jabatan;
        if($jabatan->save())
        {
            return new JabatanResource($jabatan);
        }
    }

    public function ubahj(Request $request, $id)
    {
        // Untuk setelah login
        $validateData = $request->validate([
            'jabatan' => 'required'
        ]);

        $jabatan = Jabatan::find($id);
        $jabatan->jabatan = $request->input('jabatan');
        $jabatan->update();
        return redirect('jabatan')->with('success','Data jabatan berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        if($jabatan->delete())
        {
            return new JabatanResource($jabatan);
        }
    }

    public function hapusj($id)
    {
        // Untuk setelah login
        $jabatan = Jabatan::find($id);
        $jabatan->delete();
        return redirect()->back()->with('success','Data jabatan berhasil dihapus!');
    }
}
