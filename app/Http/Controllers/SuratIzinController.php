<?php

namespace App\Http\Controllers;
use App\Models\suratizin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class SuratIzinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suratizin= suratizin::orderBy ('id','desc')->get();
        return view('home.index')->with('suratizin',$suratizin);
    }

    public function tampil()
    {
        
        $suratizin= suratizin::orderBy('id','desc')->paginate(1);
        return view('cetak.index')->with('suratizin',$suratizin);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('home.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('tujuan_surat', $request->tujuan_surat);
        Session::flash('tanggal', $request->tanggal);
        Session::flash('nama_siswa', $request->nama_siswa);
        Session::flash('isi', $request->isi);
        Session::flash('kelas', $request->kelas);
        Session::flash('alamat_siswa', $request->alamat_siswa);
        Session::flash('penulis_surat', $request->penulis_surat);
   
        $request->validate([
            'tujuan_surat' => 'required',
            'tanggal' => 'required',
            'nama_siswa' => 'required',
            'isi' => 'required',
            'kelas' => 'required',
            'alamat_siswa' => 'required',
            'penulis_surat' => 'required',
         
 
           
        ], [
            'tujuan_surat.required' => 'tujuan surat wajib diisi',
            'tanggal.required' => 'tanggal surat wajib diisi',
            'nama_siswa.required' => 'nama siswa wajib diisi',
            'isi.required' => 'Isi wajib Ada',
            'kelas.required' => 'kelas wajib diisi',
            'alamat_siswa.required' => 'alamat siswa wajib diisi',
            'penulis_surat.required' => 'penuis surat siswa wajib diisi',
        ]); 


     

        $suratizin = [
            'tujuan_surat' => $request->input('tujuan_surat'),
            'tanggal' => $request->input('tanggal'),
            'nama_siswa' => $request->input('nama_siswa'),
            'isi' => $request->input('isi'),
            'kelas' => $request->input('kelas'),
            'alamat_siswa' => $request->input('alamat_siswa'),
            'penulis_surat' => $request->input('penulis_surat'),

        
        ];
        suratizin::create($suratizin);
        return redirect()->to('/cetak')->with('success', 'Suratmu Berhasil Tercetak');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
