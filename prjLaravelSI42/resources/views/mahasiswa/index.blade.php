 @extends('layout.master')
 @section('title','Halaman Mahasiswa')
  
 @section('content')
    {{-- <h2>{{ $kampus }}</h2> --}}
    <table>
        <tr>
            <th>NPM</th>
            <th>Nama</th>
        </tr>

        @foreach ($allmahasiswa as $item)
             <tr>
                <td>{{ $item->npm }}</td>
                <td>{{ $item->nama_mahasiswa }}</td>
            </tr>
        @endforeach
       
    </table>    
 @endsection