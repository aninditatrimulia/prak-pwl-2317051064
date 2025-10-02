@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card border-0 shadow rounded-3">
                <div class="card-header text-center text-dark fw-bold py-3"
                     style="background-color:#f8f9fa; border-bottom:2px solid #1abc9c;">
                    <h4 class="m-0">Daftar Pengguna</h4>
                </div>
                <div class="card-body p-4">
                    <table class="table table-bordered table-striped text-center align-middle">
                        <thead style="background-color:#1abc9c; color:white;">
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>NPM</th>
                                <th>Kelas</th>
                                <th>Aksi</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td class="fw-semibold text-dark">{{ $user->nama }}</td>
                                <td>{{ $user->nim }}</td>
                                <td>
                                    <span class="badge bg-success px-3 py-2">
                                        {{ $user->nama_kelas }}
                                    </span>
                                </td>
                                <td>
                                    <form action="{{ route('user.destroy', $user->id) }}" 
                                          method="POST" 
                                          onsubmit="return confirm('Yakin ingin menghapus pengguna ini?')" 
                                          style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm rounded-pill">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-muted fst-italic">⚠️ Belum ada data pengguna</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
