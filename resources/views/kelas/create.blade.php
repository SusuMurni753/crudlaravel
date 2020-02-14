@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Kelas</div>

                <div class="card-body">
                   <form action="{{route('kelas.store')}}" method="post">
                   <input type="hidden" name="_token"
                   value="{{csrf_token()}}">
                   @csrf
                   <div class="form-group">
                   <label>kelas</label>
                   <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
