@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow rounded-3">
                <div class="card-header text-center text-dark fw-bold py-3"
                     style="background-color:#f8f9fa; border-bottom:2px solid #1abc9c;">
                    <h4 class="m-0">Edit Mata Kuliah</h4>
                </div>

                <div class="card-body p-4">
                    <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Nama Mata Kuliah -->
                        <div class="mb-3">
                            <label for="nama_mk" class="form-label fw-semibold">Nama Mata Kuliah</label>
                            <input 
                                type="text" 
                                id="nama_mk" 
                                name="nama_mk" 
                                class="form-control border-2" 
                                placeholder="Masukkan nama mata kuliah" 
                                value="{{ $mk->nama_mk }}" 
                                required>
                        </div>

                        <!-- SKS -->
                        <div class="mb-4">
                            <label for="sks" class="form-label fw-semibold">Jumlah SKS</label>
                            <input 
                                type="number" 
                                id="sks" 
                                name="sks" 
                                class="form-control border-2" 
                                placeholder="Masukkan jumlah SKS" 
                                value="{{ $mk->sks }}" 
                                min="1" 
                                required>
                        </div>

                        <!-- Tombol Aksi -->
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('matakuliah.index') }}" 
                               class="btn btn-outline-secondary px-4 rounded-pill">
                                ← Kembali
                            </a>
                            <button type="submit" 
                                    class="btn btn-success px-4 rounded-pill">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
