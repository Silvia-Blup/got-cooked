@extends('dashboard')

@section('content')

<form action="{{ route('mata_kuliah.save') }}" method="post">
@csrf
<table>
    <tr>
        <td>Kode Jurusan</td>
        <td>:</td>
        <td><input type="text" name="Jurusan_Id"></td>
    </tr>
    <tr>
        <td>Kode Mata Kuliah</td>
        <td>:</td>
        <td><input type="text" name="Kode_Mata_Kuliah"></td>
    </tr>
    <tr>
        <td>Nama Mata Kuliah</td>
        <td>:</td>
        <td><input type="text" name="Nama_Mata_Kuliah"></td>
    </tr>
    <tr>
        <td>SKS</td>
        <td>:</td>
        <td><input type="text" name="SKS"></td>
    </tr>
    <tr>
        <td>ID Dosen</td>
        <td>:</td>
        <td><input type="text" name="Dosen_Id"></td>   
    </tr>
</table>

<button type="Submit"> Add </button>
<button type="reset"> Clear </button>
</form>
@endsection