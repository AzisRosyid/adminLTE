@extends('adminlte::page')

@section('content')
    <h3>Data Supplier</h3>

    <br />
    <br />

    <form action="{{ url('/supplier/simpan_data') }}" method="post">
        {{ csrf_field() }}
        <table>
            <tr>
                <td>Nomor Supplier</td>
                <td>:</td>
                <td><input type="text" name="s_no" required="required"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" required="required"></td>
            </tr>
            <tr>
                <td>Kota</td>
                <td>:</td>
                <td><input type="text" name="kota" required="required"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Simpan Data"></td>
            </tr>
        </table>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
