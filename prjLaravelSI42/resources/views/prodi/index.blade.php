
 @extends('layout.master')
 @section('title','Halaman Prodi')
  
 @section('content')
    {{-- <h2>Prodi</h2>
   <table class="table table-striped">
      <tr>
         <th>NPM</th>
         <th>Nama</th>
         <th>Nama Prodi</th>
      </tr>

      @foreach ($allmahasiswaprodi as $item)
          <tr>
            <td>{{ $item->npm }}</td>
            <td>{{ $item->nama_mahasiswa }}</td>
            <td>{{ $item->nama }}</td>
          </tr>
      @endforeach
   </table> --}}

    <h2>Prodi</h2>
   <table class="table table-striped">
      <tr>
         <th>Logo/th>  
         <th>Nama</th>  
         <th>Aksi</th>         
      </tr>

      @foreach ($prodis as $item)
          <tr>
            <td>
               <img src= "{{ asset('storage/'.$item->foto) }}"></img>
            </td>
            <td>{{ $item->nama }}</td>
            <td>
              
                <form action="{{ route('prodi.destroy', ['prodi' => $item->id]) }}" method="POST">
                   @method('delete')
                   @csrf
                    <a href="{{ url('/prodi/'. $item->id)}}" class="btn btn-warning">Detail</a>
                    <a href="{{ url('/prodi/'. $item->id."/edit" ) }}" class="btn btn-info">Ubah</a>
            
                   <button type="submit" class="btn btn-danger">Hapus</button>
               </form> 
            </td>           
          
         </tr>
      @endforeach
   </table>
 @endsection
    
    
