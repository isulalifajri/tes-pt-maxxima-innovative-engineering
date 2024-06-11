@extends('layout.app')

@section('content')
<div class="card-body">
    <h3 class="mt-3">Tambah siswa</h3>
    <div class="mb-3">
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <label for="exampleFormControlInput1" class="form-label">Masukkan nis</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="nis" required>
            <label for="exampleFormControlInput1" class="form-label">Masukkan nama</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" required>
            <label for="exampleFormControlInput1" class="form-label">Masukkan alamat</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="alamat" required>

            <button type="submit" class="btn btn-primary mt-2">save</button>
        </form>
    </div>
</div>

@endsection