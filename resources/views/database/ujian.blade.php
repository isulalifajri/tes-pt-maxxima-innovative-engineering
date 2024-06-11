@extends('layout.app')

@section('content')
<div class="card-body">

    <a href="/user" class="btn btn-primary">Tabel Siswa</a>
    <a href="/matpel" class="btn btn-primary">Tabel Mata Pelajaran</a>
    <a href="/peserta" class="btn btn-primary">Tabel Peserta</a>
    <a href="/ujian" class="btn btn-primary">Tabel Ujian</a>

    <h2 class="mt-3">Tabel Ujian</h2>

    <form action="{{ route('tampil') }}" method="POST">
        @csrf
        <label for="exampleFormControlInput1" class="form-label">Masukkan tanggal</label>
        <input type="date" class="form-control" id="exampleFormControlInput1" name="tanggal">

        <button type="submit" class="btn btn-primary mt-2">Tampilkan</button>
    </form>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">nama ujian</th>
            <th scope="col">matpel</th>
            <th scope="col">tanggal</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($user as $item)
                
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->nama_ujian}}</td>
                    <td>{{ $item->mata_pelajaran_id }}</td>
                    <td>{{ $item->tanggal }}</td>
                </tr>
            @empty
                <h1>Data ujian kosong di tanggal ini</h1>
            @endforelse
        
        </tbody>
      </table>
</div>

@endsection