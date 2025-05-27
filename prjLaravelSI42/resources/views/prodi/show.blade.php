
 @extends('layout.master')
 @section('title','Halaman Prodi')
  
 @section('content')
    <h2>Program Studi</h2>
    <div class="column">
        <h2>Profil Prodi {{ $prodi-> nama}}</h2>
        <table class="table table-striped">
        <tr>
            <th>Kode Prodi</th>  
            <td>{{ $prodi->id }}</th>         
        </tr>
        <tr>
            <th>Nama Prodi</th>  
            <td>{{ $prodi->nama}}</th>         
        </tr>
    </table>
    </div>
 @endsection
    
    
