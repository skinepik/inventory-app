@extends('layouts.app')

@section('content')
    <h2>Tambah Produk</h2>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kategori</label>
            <select name="category_id" class="form-control" required>
                <option value="" disabled selected>-- Pilih Kategori --</option>
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select> 
        </div>
        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stock" class="form-control">
        </div>
        <div class="mb-3">
            <label>Gambar (opsional)</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
