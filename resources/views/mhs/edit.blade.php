<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <div class="container">	
        <div class="row">
            <div class="col-md-12">
                <h3>Tabel Mahasiswa Edit</h3>
                <div class="panel panel-default"><div class="panel-body">
                    <form action="{{route('mhs.update', $mhs->id)}}" method="post">
                        <input name="_method" type="hidden" value="PATCH">
                            {{csrf_field()}}
                            <div class="form-group{{ $errors->has('nrp') ? ' has-error' : '' }}" style="margin-bottom: 15px;">
                                <input type="text" name="nrp" class="form-control" placeholder="Nrp" value="{{$mhs->nrp}}">
                                {!! $errors->first('nrp', '<p class="help-block text-danger">:message</p>') !!}
                            </div>
                            <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}" style="margin-bottom: 15px;">
                                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{$mhs->nama}}">
                                {!! $errors->first('nama', '<p class="help-block text-danger">:message</p>') !!}
                            </div>
                            <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}" style="margin-bottom: 15px;">
                                <input type="text" name="email" class="form-control" placeholder="Email" value="{{$mhs->email}}">
                                {!! $errors->first('email', '<p class="help-block text-danger">:message</p>') !!}
                            </div>
                            <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}" style="margin-bottom: 15px;">
                                <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{$mhs->alamat}}">
                                {!! $errors->first('alamat', '<p class="help-block text-danger">:message</p>') !!}
                            </div>
                            <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Simpan"></div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

</body>
</html>