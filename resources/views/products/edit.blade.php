@extends('layouts.app')

@section('content')
    <h2>Edit Produk</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
        </div>

        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stock" class="form-control" value="{{ $product->stock }}" required>
        </div>

        <div class="mb-3">
            <label>Kategori</label>
            <select name="category_id" class="form-control" required>
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}" {{ $product->category_id == $cat->id ? 'selected' : '' }}>
                        {{ $cat->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
