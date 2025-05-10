 {{-- @include('layout.header',['kampus' => $kampus,'title' => "Halaman Fakultas"])   --}}

 @extends('layout.master')
 @section('title','Halaman Fakultas')
  
 @section('content')
 <ul>
    {{-- {{ var_dump($fakultas) }} --}}

    @if (count($fakultas)>0)
        @foreach ($fakultas as $item)
            <li>{{ $item }}</li>
        @endforeach
    @else
        <li>Belum ada data</li>
    @endif
</ul>
 @endsection
    
    
{{-- @include('layout.footer') --}}