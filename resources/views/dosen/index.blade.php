<a href="{{route('dosen.create')}}"> 
    <input type="button" value="Create">
</a>
<table border="1">
    <thead>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>NIP</th>
        <th>NIDN</th>
        <th>Pendidikan Terakhir</th>
        <th>Jurusan</th>
        <th>Tempat Lahir</th>
        <th>Tanggal lahir</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </thead>
    @foreach ($dosen as $d)
    <tr>
        <td>{{$d->id}}</td>
        <td>{{$d->Fullname}}</td>
        <td>{{$d->NIP}}</td>
        <td>{{$d->Pendidikan_Terakhir}}</td>
        <td>{{$d->Jurusan_id}}</td>
        <td>{{$d->Tempat_Lahir}}</td>
        <td>{{$d->Alamat}}</td>
        <td>{{$d->created_at}}</td>
        <td>
            <a href="{{route('dosen.edit', $d->id)}}"> 
                <input type="button" value="Edit">
            </a>
            <form action="{{route('dosen.delete', $d->id)}}" method="post" style="display:inline;">
            @csrf
             @method('DELETE') 
            <input type="submit" value="Delete" onclick="return confirm('Are you sure?')">
            </form>
        </td>
    </tr>
    @endforeach
</table>