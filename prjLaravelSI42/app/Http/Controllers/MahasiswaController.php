<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    //
    public function insert(){       
        
        $result=DB::insert("insert into mahasiswas(npm,nama_mahasiswa,tempat_lahir,
        tanggal_lahir,alamat,created_at) values (?, ?, ?, ?, ?, ?)",['2327240001','Jonson',
        'Palembang','2003-05-17','Palembang', now()]);
        dump($result);
    }

    public function select(){
        $kampus="Universitas Multi Data Palembang";
        $result= DB::select('Select * from mahasiswas');
        // dump($result);

        return view('mahasiswa/index',["allmahasiswa" => $result,"kampus"=> $kampus]);
    }

    public function insertElq(){
        $mahasiswa = new Mahasiswa();
        $mahasiswa->npm="2327240003";
        $mahasiswa->nama_mahasiswa="Marvin";
        $mahasiswa->tempat_lahir="Palembang";
        $mahasiswa->tanggal_lahir="2006-05-26";
        $mahasiswa->alamat="Jl. Rajawali";
        $mahasiswa->created_at=now();
        $mahasiswa->save();
        dump($mahasiswa);

    }

    public function allJoinFacade(){

        
    }
}
