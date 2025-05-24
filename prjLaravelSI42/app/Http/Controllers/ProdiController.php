<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProdiController extends Controller
{
    //
    public function index(){
        $kampus="Universitas Multi Data Palembang";
        return view('prodi.index')->with('kampus',$kampus);

    }

    public function allJoinFacade(){
         $kampus="Universitas Multi Data Palembang";
         $result = DB::select('select mahasiswas.*,prodis.nama from prodis, mahasiswas 
         where prodis.id= mahasiswas.prodi_id');

         return view('prodi.index',["allmahasiswaprodi" => $result,"kampus"=> $kampus]);
    }

    public function create(){
        return view('prodi.create');
    }

    public function store(Request $request){
        // dump($request);
        $validateData= $request->validate([
            'nama' => 'required|min:5|max:20',
        ]);

        $prodi = new Prodi();
        $prodi->nama = $validateData['nama'];
        $prodi->save();

        $request->session()->flash('info', "Prodi disimpan");
        //return redirect()

    }
}
