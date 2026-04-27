<a href="{{route('mata_kuliah.add')}}"> 
    <input type="button" value="Create">
</a>
<table border="1">
    <thead>
        <th>No</th>
        <th>Jurusan</th>
        <th>Kode Mata Kuliah</th>
        <th>Nama Mata Kuliah</th>
        <th>SKS</th>
        <th>Dosen</th>
        <th>Tanggal Dibuat</th>
        <th>Aksi</th>
    </thead>
    @foreach ($mata_kuliah as $mk)
    <tr>
        <td>{{$mk->id}}</td>
        <td>{{$mk->Jurusan_Id}}</td>
        <td>{{$mk->Kode_Mata_Kuliah}}</td>
        <td>{{$mk->Nama_Mata_Kuliah}}</td>
        <td>{{$mk->SKS}}</td>
        <td>{{$mk->Dosen_Id}}</td>
        <td>{{$mk->created_at}}</td>
        <td>
            <a href="{{route('mata_kuliah.edit', $mk->id)}}"> 
                <input type="button" value="Edit">
            </a>
            <form action="{{route('mata_kuliah.delete', $mk->id)}}" method="post" style="display:inline;">
            @csrf
             @method('DELETE') 
            <input type="submit" value="Delete" onclick="return confirm('Are you sure?')">
            </form>
        </td>
    </tr>
    @endforeach
</table>