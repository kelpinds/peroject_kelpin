<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\petugas;
use App\Models\siswa;
use App\Models\spp;
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
    public function tambahk(){
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
    public function editk($id){
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
    public function siswa(){
        $cek = new siswa;
        return view("siswa.siswa",['data'=>$cek->all()]);
    }
    public function tambahs(){
        $k = new kelas();
        $s = new spp();
        return view("siswa.tambahsiswa",['datakelas'=>$k->all(),'dataspp'=>$s->all()]);
    }
    public function tambahsiswa(Request $request){
        $k =new siswa;
        $k->create([
            'nisn'=>$request->input('nisn'),
            'nis'=>$request->input('nis'),
            'nama'=>$request->input('nama'),
            'id_kelas'=>$request->input('id_kelas'),
            'alamat'=>$request->input('alamat'),
            'no_telp'=>$request->input('no_telp'),
            'id_spp'=>$request->input('id_spp')
            
        ]);
        return redirect('siswa')->with('pesan','data berhasil ditambahkan');
        
    }
    public function edits($id){
        $e = siswa::select('*')->where('nisn',$id)->get();
        $k = new kelas();
        $s = new spp();
            return view('siswa.editsiswa',['data'=>$e,'datakelas'=>$k->all(),'dataspp'=>$s->all()]);
            
    }
    public function editsiswa(Request $request ,$id){
        $e = siswa::where('nisn',$id)->update([
            'nisn'=>$request->nisn,
            'nis'=>$request->nis,
            'nama'=>$request->nama,
            'id_kelas'=>$request->id_kelas,
            'alamat'=>$request->alamat,
            'no_telp'=>$request->no_telp,
            'id_spp'=>$request->id_spp
            
        ]);
        return redirect('siswa')->with('pesan','data berhasil diedit');
    }
    public function hapussiswa($id){
        $e = siswa::where('nisn',$id)->delete();
        return back();
    }
    public function spp(){
        $cek = new spp;
        return view("spp.spp",['data'=>$cek->all()]);
    }
    public function tambahp(){
        return view("spp.tambahspp");
    }
    public function tambahspp(Request $request){
        $k =new spp;
        $k->create([
            'tahun'=>$request->input('tahun'),
            'nominal'=>$request->input('nominal')
            
        ]);
        return redirect('spp')->with('pesan','data berhasil ditambahkan');
        
    }
    public function editp($id){
        $e = spp::select('*')->where('tahun',$id)->get();
            return view('spp.editspp',['data'=>$e]);
        
    }
    public function editspp(Request $request ,$id){
        $e = spp::where('tahun',$id)->update([
            'tahun'=>$request->tahun,
            'nominal'=>$request->nominal
            
        ]);
        return redirect('spp')->with('pesan','data berhasil diedit');
    }
    public function hapusp($id){
        $e = spp::where('tahun',$id)->delete();
        return back();
    }
    public function petugas(){
        $cek = new petugas;
        return view("petugas.petugas",['data'=>$cek->all()]);
    }
    public function tambahpg(){
        return view("petugas.tambahpetugas");
    }
    public function tambahpetugas(Request $request){
        $k =new petugas;
        $k->create([
            'username'=>$request->input('username'),
            'password'=>$request->input('password'),
            'nama_petugas'=>$request->input('nama_petugas'),
            'level'=>$request->input('level')
            
        ]);
        return redirect('petugas')->with('pesan','data berhasil ditambahkan');
        
    }
    public function editpg($id){
        $e = petugas::select('*')->where('username',$id)->get();
            return view('petugas.editpetugas',['data'=>$e]);
        
    }
    public function editpetugas(Request $request ,$id){
        $e = petugas::where('petugas',$id)->update([
            'username'=>$request->usernam,
            'password'=>$request->password,
            'nama_petugas'=>$request->nama_petugas,
            'level'=>$request->level
            
        ]);
        return redirect('spp')->with('pesan','data berhasil diedit');
    }
    public function hapuspg($id){
        $e = petugas::where('username',$id)->delete();
        return back();
    }
}