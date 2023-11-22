@extends('utama')

@section('hasil_inputan')
<table class="table">
    <thead>
      <tr>
        <th scope="col">barang_id</th>
        <th scope="col">kode_barang</th>
        <th scope="col">nama_barang</th>
        <th scope="col">jenis_varian</th>
        <th scope="col">Qty</th>
        <th scope="col">harga_jual</th>
        <th scope="col">Total_Harga</th>
        <th scope="col">Diskon</th>
        <th scope="col">harga_setelah_diskon</th>
      </tr>
    </thead>
    <tbody>
      
        @foreach($data_inventory as $inventory)
      <tr>
        <th scope="row">{{$inventory -> barang_id}}</th>
        <td>{{$inventory -> kode_barang}}</td>
        <td>{{$inventory -> nama_barang}}</td>
        <td>{{$inventory -> jenis_varian}}</td>
        <td>{{$inventory -> qty}}</td>
        <td>{{$inventory -> harga_jual}}</td>
        <td>{{$inventory -> total_harga}}</td>
        <td>{{$inventory -> diskon}}</td>
        <td>{{$inventory -> harga_setelah_diskon}}</td>
        @endforeach
      </tr>
     
    </tbody>
  </table>
@endsection