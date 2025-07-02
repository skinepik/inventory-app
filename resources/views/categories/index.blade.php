@extends('layouts.app')

@section('content')
    <h2>Daftar Kategori</h2>

    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">+ Tambah Kategori</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <ul class="list-group">
        @foreach($categories as $category)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $category->name }}
                <div>
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>    
@endsection
