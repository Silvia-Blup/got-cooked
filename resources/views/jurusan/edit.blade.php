{{$m}}
<form action="{{ route('mahasiswa.update', $m->id) }}" method="post">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{$m->id}}">
    <input type="hidden" name="_method" value="PUT">
    <table>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="Fullname" value="{{$m->Fullname}}"></td>
        </tr>
        <tr>
            <td>Nomor Induk Mahasiswa</td>
            <td>:</td>
            <td><input type="text" name="NIM" value="{{$m->NIM}}"></td>
        </tr>
        <tr>
            <td>Nomor Induk Siswa Nasional</td>
            <td>:</td>
            <td><input type="text" name="NIDN" value="{{$m->NIDN}}"></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="Tempat_Lahir" value="{{$m->Tempat_Lahir}}"></td>
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