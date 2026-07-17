@extends('dashboard')

@section('content')

<a href="{{route('jurusan.create')}}"> 
    <input type="button" value="Create">
</a>
<table border="1">
    <thead>
        <th>No</th>
        <th>Kode Jurusan</th>
        <th>Nama Jurusan</th>
        <th>Aksi</th>
    </thead>
    @foreach ($jurusan as $j)
    <tr>
        <td>{{$j->id}}</td>
        <td>{{$j->Kode_Jurusan}}</td>
        <td>{{$j->Nama_Jurusan}}</td>
        <td>
            <a href="{{route('jurusan.edit', $j->id)}}"> 
                <input type="button" value="Edit">
            </a>
            <form action="{{route('jurusan.delete', $j->id)}}" method="post" style="display:inline;">
            @csrf
            @method('DELETE') 
            <input type="submit" value="Delete" onclick="return confirm('Are you sure?')">
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection