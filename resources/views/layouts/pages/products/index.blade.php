@extends('layouts.aplikasi')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1>Dashboard</h1>
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
        <div class="card">
          <div class="card-header d-flex justify-content-end">
            <a href="/products/create" class="btn btn-sm btn-primary">
              Tambah barang
            </a>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>no</th>
                  <th>Produk</th>
                  <th>Description</th>
                  <th>Kode Barang</th>
                  <th>Harga</th>
                  <th>Stok</th>
                  <th>Katagori</th>
                </tr>
              </thead>
              <tbody>
               @foreach ($products as $product )
               <tr>
                <td>{{ $loop->iteration }}</td>  
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->SKU }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->Stok }}</td>
                <td>{{ $product->category->name }}</td>
              </tr>  
               @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection