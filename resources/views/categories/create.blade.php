@extends('layouts.app')

@section('content')
    <h2>Tambah Kategori</h2>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Kategori</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
