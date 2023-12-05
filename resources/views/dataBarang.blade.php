@extends('utama')

@section('form_inputan')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Default form</h4>
              <p class="card-description">
                Basic form layout
              </p>
              <form class="forms-sample">
                <div class="form-group">
                  <label for="Kode_barang">Kode Barang</label>
                  <input type="text" class="form-control" id="exampleInputKodeBarang" placeholder="KodeBarang">
                </div>
                <div class="form-group">
                  <label for="exampleInputNamaBarang">Nama Barang</label>
                  <input type="text" class="form-control" id="exampleInputNamaBarang" placeholder="namaBarang">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jenis Varian</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="jenisVarian">
                </div>
                <div class="form-group">
                  <label for="exampleInputConfirmPassword1">QTY</label>
                  <input type="number" class="form-control" id="exampleInputConfirmPassword1" placeholder="QTY">
                </div>
                <div class="form-group">
                  <label for="exampleInputConfirmPassword1">Harga Barang</label>
                  <input type="number" class="form-control" id="exampleInputConfirmPassword1" placeholder="HargaBarang">
                </div>
                <div class="form-check form-check-flat form-check-primary">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Remember me
                  </label>
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
              </form>
            </div>
          </div>
        </div>
        
   <form action="/proses-barang" method="post">
        @csrf
        <label for="kode_barang">Kode Barang:</label>
        <input type="text" name="kode_barang" required><br>

        <label for="nama_barang">Nama Barang:</label>
        <input type="text" name="nama_barang" required><br>

        <label for="jenis_varian">Jenis Varian:</label>
        <input type="text" name="jenis_varian" required><br>

        <label for="qty">Qty:</label>
        <input type="number" name="qty" required><br>

        <label for="harga_jual">Harga Jual:</label>
        <input type="number" name="harga_jual" required><br>

        <button type="submit">Proses</button>
    </form>
    
    
      
@endsection

