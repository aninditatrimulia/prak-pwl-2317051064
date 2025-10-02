@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow rounded-3">
                <div class="card-header text-center fw-bold text-dark py-3" 
                     style="background-color:#f8f9fa; border-bottom:2px solid #1abc9c;">
                    <h4 class="m-0">Buat Pengguna Baru</h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="nama" class="form-label fw-semibold">Nama</label>
                            <input type="text" id="nama" name="nama" 
                                   class="form-control rounded-3 border border-1" 
                                   placeholder="Masukkan nama lengkap" required>
                        </div>

                        <div class="mb-3">
                            <label for="npm" class="form-label fw-semibold">NPM</label>
                            <input type="text" id="npm" name="npm" 
                                   class="form-control rounded-3 border border-1" 
                                   placeholder="Masukkan NPM" required>
                        </div>

                        <div class="mb-3">
                            <label for="kelas_id" class="form-label fw-semibold">Kelas</label>
                            <select name="kelas_id" id="kelas_id" 
                                    class="form-select rounded-3 border border-1" required>
                                <option value="" disabled selected>-- Pilih Kelas --</option>
                                @foreach ($kelas as $kelasItem)
                                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-grid mt-4">
                            <button type="submit" 
                                    class="btn btn-success btn-lg fw-bold rounded-3">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
