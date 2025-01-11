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
                <tr>
                <td>no</td>
                <td>Produk</td>
                <td>Description</td>
                <td>Kode Barang</td>
                <td>Harga</td>
                <td>Stok</td>
                <td>Katagori</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection