@extends('dashboard')

@section('content')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
<body>
<a class="btn btn-primary" href="{{route('mahasiswa.add')}}" role="button">Create</a>
<table border="1">
    <thead>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>NIM</th>
        <th>NISN</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Tanggal Dibuat</th>
        <th>Aksi</th>
    </thead>
    @foreach ($mahasiswa as $m)
    <tr>
        <td>{{$m->id}}</td>
        <td>{{$m->Fullname}}</td>
        <td>{{$m->NIM}}</td>
        <td>{{$m->NIDN}}</td>
        <td>{{$m->Tempat_Lahir}}</td>
        <td>{{$m->Tanggal_Lahir}}</td>
        <td>{{$m->Alamat}}</td>
        <td>{{$m->created_at}}</td>
        <td>
        <a class="btn btn-primary" href="{{route('mahasiswa.edit', $m->id)}}" role="button">Edit</a>
            
            <form action="{{route('mahasiswa.delete', $m->id)}}" method="post" style="display:inline;">
            @csrf
            @method('DELETE') 
            <input type="submit" value="Delete" onclick="return confirm('Are you sure?')">
            </form>
        </td>
    </tr>
    @endforeach
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
@endsection