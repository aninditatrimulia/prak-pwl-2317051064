@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-header text-white text-center py-3 rounded-top-4"
            style="background-color:#28a745; font-size:1.2rem; font-weight:600;">
            Edit Data User
        </div>
        <div class="card-body px-5 py-4">
            <form action="{{ route('user.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama" class="form-label fw-semibold">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control rounded-pill"
                        value="{{ $user->nama }}" required>
                </div>

                <div class="mb-3">
                    <label for="npm" class="form-label fw-semibold">NPM</label>
                    <input type="text" name="npm" id="npm" class="form-control rounded-pill"
                        value="{{ $user->nim }}" required>
                </div>

                <div class="mb-3">
                    <label for="kelas_id" class="form-label fw-semibold">Kelas</label>
                    <select name="kelas_id" id="kelas_id" class="form-select rounded-pill" required>
                        @foreach ($kelas as $k)
                            <option value="{{ $k->id }}" {{ $user->kelas_id == $k->id ? 'selected' : '' }}>
                                {{ $k->nama_kelas }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" 
                        class="btn btn-success px-4 rounded-pill" 
                        style="background-color:#28a745; border:none;">
                        Simpan
                    </button>
                    <a href="{{ route('user.index') }}" 
                        class="btn btn-secondary px-4 rounded-pill ms-2">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
