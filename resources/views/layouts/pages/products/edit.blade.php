@extends('layouts.aplikasi')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1>edit product</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">beranda</a></li>
        <li class="breadcrumb-item active">produc</li>
      </ol>
    </div>
  </div>
@endsection

@section('content')
    <div class="row">
      <div class="col">
        {{-- @if ($errors->any())
          @dd($errors->all())
        @endif --}}
        <form action="/products/{{ $product->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card">
              <div class="card-body">
                <div class="form-group">
                  <label for="name" class="form-label">Nama Produk</label>
                  <input 
                    type="text" 
                    name="name" 
                    id="name" 
                    class="form-control" 
                    value="{{ old('name', $product->name) }}">
                </div>
                <div class="form-group">
                  <label for="description" class="form-label">Deskripsi</label>
                  <textarea 
                    name="description" 
                    id="description" 
                    cols="30" 
                    rows="10" 
                    class="form-control">{{ old('description', $product->description) }}</textarea>
                </div>
                <div class="form-group">
                  <label for="SKU" class="form-label">Kode Produk</label>
                  <input 
                    type="text" 
                    name="SKU" 
                    id="SKU" 
                    class="form-control" 
                    value="{{ old('SKU', $product->SKU) }}">
                </div>
                <div class="form-group">
                  <label for="price" class="form-label">Harga</label>
                  <input 
                    type="number" 
                    name="price" 
                    id="price" 
                    class="form-control" 
                    value="{{ old('price', $product->price) }}">
                </div>
                <div class="form-group">
                  <label for="Stock" class="form-label">Stock</label>
                  <input 
                    type="number" 
                    name="Stock" 
                    id="Stock" 
                    class="form-control" 
                    value="{{ old('Stock', $product->Stock) }}">
                </div>
                <div class="form-group">
                  <label for="category_id" class="form-label">Kategori</label>
                  <select name="category_id" id="category_id" class="form-control">
                    @foreach ($categories as $category)
                      <option 
                        value="{{ $category->id }}" 
                        {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                      </option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="card-footer">
                <div class="d-flex justify-content-end">
                  <a href="/products" class="btn btn-sm btn-outline-secondary mr-2">Batal</a>
                  <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                </div>
              </div>
            </div>
          </form>
          
      </div>
    </div>
@endsection