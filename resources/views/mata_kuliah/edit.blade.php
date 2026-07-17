@extends('dashboard')

@section('content')

<form action="{{ route('mata_kuliah.update', $mk->id) }}" method="post">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{$mk->id}}">
    <input type="hidden" name="_method" value="PUT">
    <table>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><input type="text" name="Jurusan_Id" value="{{$mk->Jurusan_Id}}"></td>
        </tr>
        <tr>
            <td>Kode Mata Kuliah</td>
            <td>:</td>
            <td><input type="text" name="Kode_Mata_Kuliah" value="{{$mk->Kode_Mata_Kuliah}}"></td>
        </tr>
        <tr>
            <td>Nama Mata Kuliah</td>
            <td>:</td>
            <td><input type="text" name="Nama_Mata_Kuliah" value="{{$mk->Nama_Mata_Kuliah}}"></td>
        </tr>
        <tr>
            <td>SKS</td>
            <td>:</td>
            <td><input type="text" name="SKS" value="{{$mk->SKS}}"></td>
        </tr>
        <tr>
            <td>Dosen</td>
            <td>:</td>
            <td><input type="text" name="Dosen_Id" value="{{$mk->Dosen_Id}}"></td>
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