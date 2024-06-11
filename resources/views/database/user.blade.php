@extends('layout.app')

@section('content')
<div class="card-body">

    <a href="/user" class="btn btn-primary">Tabel Siswa</a>
    <a href="/matpel" class="btn btn-primary">Tabel Mata Pelajaran</a>
    <a href="/peserta" class="btn btn-primary">Tabel Peserta</a>
    <a href="/ujian" class="btn btn-primary">Tabel Ujian</a>

    <h2 class="mt-3">Tabel Siswa</h2>
    <a href="/create" class="btn btn-info">Tambah Siswa</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">nis</th>
            <th scope="col">nama</th>
            <th scope="col">alamat</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($user as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>
                      <a href="edit" class="btn btn-secondary">Edit</a>
                      <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                    </td>
                </tr>
            @endforeach
        
        </tbody>
      </table>
</div>

@endsection