<a href="{{route('mahasiswa.add')}}"> 
    <input type="button" value="Create">
</a>
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
            <a href="{{route('mahasiswa.edit', $m->id)}}"> 
                <input type="button" value="Edit">
            </a>
            <form action="{{route('mahasiswa.delete', $m->id)}}" method="post" style="display:inline;">
            @csrf
             @method('DELETE') 
            <input type="submit" value="Delete" onclick="return confirm('Are you sure?')">
            </form>
        </td>
    </tr>
    @endforeach
</table>