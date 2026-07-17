@extends('dashboard')

@section('content')

<form action="{{ route('jurusan.update', $jurusan->id) }}" method="post">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{$jurusan->id}}">
    <input type="hidden" name="_method" value="PUT">
    <table>
        <tr>
            <td>Kode Jurusan</td>
            <td>:</td>
            <td><input type="text" name="Kode_Jurusan" value="{{$jurusan->Kode_Jurusan}}"></td>
        </tr>
        <tr>
            <td>Nama Jurusan</td>
            <td>:</td>
            <td><input type="text" name="Nama_Jurusan" value="{{$jurusan->Nama_Jurusan}}"></td>
        </tr>
            <td colspan="3">
                <input type="submit" value="Update">
                <input type="reset" value="Clear">
            </td>
        </tr>
    </table>
</form>
@endsection