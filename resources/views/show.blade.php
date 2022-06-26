@extends('layouts.default')
@section('content')
    <section>
        <div class="container mt-5">
            <h1>Edit Mahasiswa</h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ url('/update/' . $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Mahasiswa</label>
                            <input type="text" name="name" class="form-control" placeholder="ahmad roni" value="{{$data->name}}">
                        </div>
                        <div class="form-group">
                            <label for="nama">NIM</label>
                            <input type="number" name="nim" class="form-control" placeholder="12345" value="{{$data->nim}}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="indonesia">{{$data->alamat}}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update data</button>
                        </div>
                        <div class="form-group" mt-2>
                            <a href="{{ url('/') }}"><< kembali ke halaman utama </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection