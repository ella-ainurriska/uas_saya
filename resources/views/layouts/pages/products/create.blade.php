@extends('layouts.aplikasi')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1>tambah product</h1>
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
        <form action="/products/store" method="POST">
          @csrf
          @method('POST')
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label for="name" class="form-label">nama produk</label>
                <input type="text" name="name" id="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="description" class="form-label">deskripsi</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <label for="name" class="form-label">kode produk</label>
                <input type="text" name="SKU" id="SKU" class="form-control">
              </div>
              <div class="form-group">
                <label for="name" class="form-label">harga</label>
                <input type="number" inputmode="numeric" name="price" id="price" class="form-control">
              </div>
              <div class="form-group">
                <label for="Stock" class="form-label">Stock</label>
                <input type="number" inputmode="numeric" name="Stock" id="Stock" class="form-control">
              </div>
              <div class="form-group">
                <label for="category_id" class="form-label">kategori</label>
               <select name="category_id" id="category_id" class="form-control">
                @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
               </select>
              </div>
            </div>
            <div class="card-footer">
              <div class="d-flex justify-content-end">
                <a href="/products" class="btn btn-sm btn-outline-secondary mr-2">batal</a>
                <button type="submit" class="btn btn-sm btn-primary">simpan</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
@endsection