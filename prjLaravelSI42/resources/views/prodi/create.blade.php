<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row pt-4">
            <div class="col">
                <h2>Form Program Studi</h2>
                @if (session()->has('info'))
                    <div class="alert alert-success">
                        {{ session()->get('info')}}
                    </div>
                @endif
                <form action="{{url('prodi/store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama')}}">
                        @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                </form>    
            </div>
        </div>
    </div>
</body>
</html>