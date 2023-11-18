<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\petugas;
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
        return redirect('kelas')->with('pesan','data berhasil ditambahkan');
        
    }
    public function edit($id){
        $e = kelas::select('*')->where('id_kelas',$id)->get();
            return view('kelas.editkelas',['data'=>$e]);
        
    }
    public function editkelas(Request $request ,$id){
        $e = kelas::where('id_kelas',$id)->update([
            'nama_kelas'=>$request->nama_kelas,
            'kopetensi_keahlian'=>$request->kopetensi_keahlian
            
        ]);
        return redirect('kelas')->with('pesan','data berhasil diedit');
    }
    public function hapuskelas($id){
        $e = kelas::where('id_kelas',$id)->delete();
        return back();
    }
    public function login(){
        return view("Login");
    }
    public function ceklogin(Request $request){
        $s = new petugas;
        $s= $s->where ('username',$request->input('username'))->where('password',$request->input('password'));

        if($s->exists()){
            session([
                'username'=>$request->input('username'),
                'password'=>$request->input('password')
            ]);
            return redirect('dass');
        }
    }   
}