@extends('adminlte::page')

@section('content')
    <html>

    <head>
        <title>Tampil Data Supplier</title>
    </head>

    <body>


        <h3>Data Supplier</h3>

        <br />
        <br />

        <table border="1">
            <tr>
                <th>Nomor Supplier</th>
                <th>Nama</th>
                <th>Kota</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
            @foreach ($suppliers as $s)
                <tr>
                    <td>{{ $s->s_no }}</td>
                    <td>{{ $s->nama }}</td>
                    <td>{{ $s->kota }}</td>
                    <td><a href="{{ url('/supplier/hapus_data/' . $s->s_no) }}">Hapus</a></td>
                    <td><a href="{{ url('/supplier/edit_data/' . $s->s_no) }}">Edit</a></td>
                </tr>
            @endforeach
        </table>
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
