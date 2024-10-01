<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Tabel Mahasiswa</h3>
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if(Session::has('alert-success'))
                            <div class="alert alert-success">
                                {{ Session::get('alert-success') }}
                            </div>
                        @endif
                        <a href="{{route('mhs.create')}}" class="btn btn-info pull-right">Tambah Data</a><br><br>
                        <table class="table table-striped">
                            <tr>
                                <th>NO</th>
                                <th>NRP</th>
                                <th>Nama</th>
                                <th>Jurusan</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                            <?php $no=1; ?>
                            @foreach($mhs as $m)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$m->nrp}}</td>
                                <td>{{$m->nama}}</td>
                                <td>{{$m->jurusan}}</td>
                                <td>{{$m->email}}</td>
                                <td>{{$m->alamat}}</td>
                                <td>
                                    <form method="POST" action="{{ route('mhs.destroy', $m->id) }}" accept-charset="UTF-8">
                                        <input name="_method" type="hidden" value="DELETE">
                                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                        <a href="{{route('mhs.edit', $m->id)}}" class="btn btn-primary">Edit</a>
                                        <input type="submit" class="btn btn-danger" 
                                        onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete">
                                    </form>
                                </td></tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

</body>
</html>