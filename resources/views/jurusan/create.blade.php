<form action="{{ route('jurusan.save') }}" method="post">
@csrf
<table>
    <tr>
        <td> Kode Jurusan</td>
        <td>:</td>
        <td><input type="text" name="Kode_Jurusan"></td>
    </tr>
    <tr>
        <td>Nama Jurusan</td>
        <td>:</td>
        <td><input type="text" name="Nama_Jurusan"></td>
    </tr>
</table>

<button type="Submit"> Add </button>
<button type="reset"> Clear </button>
</form>

