{{$d}}
<form action="{{ route('dosen.update', $d->id) }}" method="post">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{$d->id}}">
    <input type="hidden" name="_method" value="PUT">
    <table>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="Fullname" value="{{$d->Fullname}}"></td>
        </tr>
        <tr>
            <td>Nomor Induk Pengajar</td>
            <td>:</td>
            <td><input type="text" name="NIP" value="{{$d->NIP}}"></td>
        </tr>
        <tr>
            <td>Nomor Induk DN apa nih</td>
            <td>:</td>
            <td><input type="text" name="NIDN" value="{{$d->NIDN}}"></td>
        </tr>
        <tr>
            <td>Pendidikan Terakhir</td>
            <td>:</td>
            <td><input type="text" name="Pendidikan_Terakhir" value="{{$d->Pendidikan_Terakhir}}"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="text" name="Tanggal_Lahir" value="{{$m->Tanggal_Lahir}}"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="Alamat">{{$m->Alamat}}</textarea></td>
        </tr>
        <tr>
            <td colspan="3">
                <input type="submit" value="Update">
                <input type="reset" value="Clear">
            </td>
        </tr>
    </table>
</form>