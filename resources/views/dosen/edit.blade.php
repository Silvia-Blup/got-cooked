@extends('dashboard')

@section('content')

{{$dosen}}
<form action="{{ route('dosen.update', $dosen->id) }}" method="post">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{$dosen->id}}">
    <input type="hidden" name="_method" value="PUT">
    <table>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="Fullname" value="{{$dosen->Fullname}}"></td>
        </tr>
        <tr>
            <td>Nomor Induk Pengajar</td>
            <td>:</td>
            <td><input type="text" name="NIP" value="{{$dosen->NIP}}"></td>
        </tr>
        <tr>
            <td>Nomor Induk DN apa nih</td>
            <td>:</td>
            <td><input type="text" name="NIDN" value="{{$dosen->NIDN}}"></td>
        </tr>
        <tr>
            <td>Pendidikan Terakhir</td>
            <td>:</td>
            <td><input type="text" name="Pendidikan_Terakhir" value="{{$dosen->Pendidikan_Terakhir}}"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="text" name="Tanggal_Lahir" value="{{$dosen->Tanggal_Lahir}}"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="Alamat">{{$dosen->Alamat}}</textarea></td>
        </tr>
        <tr>
            <td colspan="3">
                <input type="submit" value="Update">
                <input type="reset" value="Clear">
            </td>
        </tr>
    </table>
</form>
@endsection