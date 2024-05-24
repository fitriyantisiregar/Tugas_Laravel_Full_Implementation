<!-- resources/views/products/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Tambah Produk') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="nama">Nama Produk:</label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="harga">Harga:</label>
                                <input type="number" name="harga" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="total">Total:</label>
                                <input type="number" name="total" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="kondisi">Kondisi:</label>
                                <select name="kondisi" class="form-control" required>
                                    <option value="baru">Baru</option>
                                    <option value="bekas">Bekas</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="berat">Berat:</label>
                                <input type="number" name="berat" class="form-control" step="0.01" required>
                            </div>

                            <div class="form-group">
                                <label for="gambar">Gambar:</label>
                                <input type="file" name="gambar" class="form-control-file" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Tambah Produk</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection