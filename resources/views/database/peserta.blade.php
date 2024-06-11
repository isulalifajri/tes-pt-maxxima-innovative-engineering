@extends('layout.app')

@section('content')
<div class="card-body">

    <a href="/user" class="btn btn-primary">Tabel Siswa</a>
    <a href="/matpel" class="btn btn-primary">Tabel Mata Pelajaran</a>
    <a href="/peserta" class="btn btn-primary">Tabel Peserta</a>
    <a href="/ujian" class="btn btn-primary">Tabel Ujian</a>

    <h2 class="mt-3">Tabel Peserta</h2>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">ujian</th>
            <th scope="col">nis</th>
            <th scope="col">nilai</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($user as $item)
                
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->ujian_id}}</td>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->nilai }}</td>
                    {{-- field ini di buat karena value status yg ada dalam database tidak sinkron karena prosesnya create nya menggunakan factory --}}
                    <td>
                      @if ($item->nilai < 60)
                        <span>Tidak Lulus</span>
                      @else
                        <span>Lulus</span>
                      @endif
                  </td>
                </tr>
            @empty
                <h1>Data ujian kosong di tanggal ini</h1>
            @endforelse
        
        </tbody>
      </table>
</div>

@endsection