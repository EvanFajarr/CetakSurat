<?php

namespace App\Http\Controllers;
use App\Models\izinkantor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class IzinKantorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('suratizin.index');
    }
    public function print()
    {
        
        $izinkantor= izinkantor::orderBy('id','desc')->paginate(1);
        return view('print.index')->with('izinkantor',$izinkantor);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suratizin.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nama_kantor', $request->nama_kantor);
        Session::flash('alamat_kantor', $request->alamat_kantor);
        Session::flash('tanggal', $request->tanggal);
        Session::flash('jabatan', $request->jabatan);
        Session::flash('nama', $request->nama);
        Session::flash('isi', $request->isi);
        Session::flash('alamat_pemohon', $request->alamat_pemohon);
        
   
        $request->validate([
            'nama_kantor' => 'required',
            'alamat_kantor' => 'required',
            'tanggal' => 'required',
            'jabatan' => 'required',
            'nama' => 'required',
            'isi' => 'required',
            'alamat_pemohon' => 'required',
        
         
 
           
        ], [
            'nama_kantor.required' => 'nama_kantor surat wajib diisi',
            'alamat_kantor.required' => 'alamat_kantor surat wajib diisi',
            'tanggal.required' => 'tanggal surat wajib diisi',
            'nama.required' => 'nama pemohon wajib diisi',
            'jabatan.required' => 'jabatan pemohon wajib diisi',
            'isi.required' => 'Isi wajib Ada',
            'alamat_pemohon.required' => 'alamat siswa wajib diisi',
          
        ]); 


     

        $izinkantor = [
            'nama_kantor' => $request->input('nama_kantor'),
            'alamat_kantor' => $request->input('alamat_kantor'),
            'tanggal' => $request->input('tanggal'),
            'nama' => $request->input('nama'),
            'isi' => $request->input('isi'),
            'jabatan' => $request->input('jabatan'),
            'alamat_pemohon' => $request->input('alamat_pemohon'),
          

        
        ];
        izinkantor::create($izinkantor);
        return redirect()->to('/print')->with('success', 'Suratmu Berhasil Tercetak');
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
