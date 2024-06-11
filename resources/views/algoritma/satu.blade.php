@extends('layout.app')

@section('content')
<div class="card-body">
    <h3>Nomer 1</h3>
    <div class="mb-3">
        <form action="{{ route('satu') }}" method="POST">
            @csrf
            <label for="exampleFormControlInput1" class="form-label">Masukkan Kalimat</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="satu">

            <button type="submit" class="btn btn-primary mt-2">Cek</button>
        </form>
      </div>

    <h3 class="mt-3">Nomer 2</h3>
    <div class="mb-3">
        <form action="{{ route('dua') }}" method="POST">
            @csrf
            <label for="exampleFormControlInput1" class="form-label">Masukkan angka</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="dua">

            <button type="submit" class="btn btn-primary mt-2">Cek</button>
        </form>
    </div>


    <h3 class="mt-3">Nomer 3</h3>
    <div class="mb-3">
       <a href="/hasiltiga" class="btn btn-primary">nomer 3</a>
    </div>

    <h3 class="mt-3">Nomer 4</h3>
    <div class="mb-3">
        <form action="{{ route('empat') }}" method="POST">
            @csrf
            <label for="exampleFormControlInput1" class="form-label">Masukkan tanggal</label>
            <input type="date" class="form-control" id="exampleFormControlInput1" name="empat">

            <button type="submit" class="btn btn-primary mt-2">Cek</button>
        </form>
    </div>
</div>

@endsection