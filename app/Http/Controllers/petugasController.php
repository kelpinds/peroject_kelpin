<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\siswa;
use Illuminate\Http\Request;

class petugasController extends Controller
{
    public function dass(){
        return view("Admin.dashboard");
    }
    public function kelas(){
        $cek = new kelas;
        return view("kelas.kelas",['data'=>$cek->all()]);
    }
    public function tambah(){
        return view("kelas.tambahkelas");
    }
    public function tambahkelas(Request $request){
        $k =new kelas;
        $k->create([
            'nama_kelas'=>$request->input('nama_kelas'),
            'kopetensi_keahlian'=>$request->input('kopetensi_keahlian')
            
        ]);
        return back()->with('pesan','data berhasil ditambahkan');
        
    }
    public function edit($id){
        $e = kelas::select('*')->where('id_petugas',$id)->get();
            return view('kelas.editkelas',['data'=>$e]);
        
    }
    public function editkelas(Request $request){
        $e = kelas::where('id_kelas',$request->id_kelas)->update([
            'nama_kelas'=>$request->nama_kelas,
            'kopetensi_keahlian'=>$request->inputkopetensi_keahlian
            
        ]);
        return back()->with('pesan','data berhasil ditambahkan');
    }
}