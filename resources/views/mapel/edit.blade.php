@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Mapel</div>

                <div class="card-body">
                   <form action="{{route('mapel.update',$mapel->id)}}" method="post">
                   @csrf
                   @method('PATCH')
                   <div class="form-group">
                   <label>mapel</label>
                   <input type="text" name="nama" value="{{$mapel->nama}}" class="form-control" required>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
