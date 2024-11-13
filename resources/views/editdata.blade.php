@extends('adminlte::page')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Edit Data</title>
    </head>

    <body>

        <h3>Edit Data Supplier</h3>

        <a href="{{ url('/supplier/tampil_data') }}"> Kembali</a>

        <br />
        <br />

        @foreach ($supplier as $s)
            <form action="{{ url('/supplier/update_data') }}" method="post">
                {{ csrf_field() }}
                <input type="text" required="required" name="s_no" value="{{ $s->s_no }}" hidden>
                <table>
                    <tr>
                        <td>Nomor Supplier </td>
                        <td>:</td>
                        <td>{{ $s->s_no }}</td>
                    </tr>
                    <tr>
                        <td>Nama </td>
                        <td>:</td>
                        <td><input type="text" required="required" name="nama" value="{{ $s->nama }}"></td>
                    </tr>
                    <tr>
                        <td>Kota</td>
                        <td>:</td>
                        <td><input type="text" required="required" name="kota" value="{{ $s->kota }}"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" value="Simpan Data"></td>
                    </tr>
                </table>

            </form>
        @endforeach
    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    @section('js')
        <script>
            console.log('Hi!');
        </script>
    @stop

</body>

</html>
