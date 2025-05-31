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
        $prodis= Prodi::all();

       // return view('prodi.index')->with('prodis',$prodis);
        return view('prodi.index', compact('kampus', 'prodis'));
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
            'foto' => 'required|file|image|max:5000',
        ]);

        $ext = $request->foto->getClientOriginalExtension();
        $nama_file = 'foto-'. time().".".$ext;
        $path = $request->foto->storeAs('public', $nama_file);

        $prodi = new Prodi();
        $prodi->nama = $validateData['nama'];
        $prodi->foto= $nama_file;
        $prodi->save();

        $request->session()->flash('info', "Prodi disimpan");
        return redirect()->route('prodi.create');

    }

    public function show(Prodi $prodi){
        $kampus="Universitas Multi Data Palembang";
        return view('prodi.show',['prodi' => $prodi , 'kampus' => $kampus]);
    }

    public function edit(Prodi $prodi){
        $kampus="Universitas Multi Data Palembang";
        return view('prodi.edit',['prodi' => $prodi , 'kampus' => $kampus]);
    }

     public function update(Request $request, Prodi $prodi){
          $validateData = $request->validate([
            'nama' => 'required|min:5|max:20',
          ]);

          Prodi::where('id',$prodi->id)->update($validateData);

          $request->session()->flash('info','Data berhasil disimpan');
          return redirect()->route('prodi.index');

    }

    public function destroy(Prodi $prodi){
       //dump($prodi);
      $prodi->delete();
      return redirect()->route('prodi.index')->with('info', 'Prodi dihapus');

    }
}
