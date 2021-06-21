@extends('layouts.app')
@include('layouts.navbarUser')
@section('content') 
<br><br><br>
    <h1>Payment Summary</h1>
    <div class="card container">
        <div class="card-body">
        <h2>Informasi User</h2><br>
        <h5>Nama : {{ $booking->user->name }}</h5><br>
        <h5>Email : {{ $booking->user->email }}</h5><br>
        <hr>
        <h2>Informasi Tiket</h2><br>
        <h5>Judul : {{ $booking->movie->nama_film }}</h5><br>
        <h5>Product Price : {{ $booking->movie->harga }}</h5><br>
        <h5>Jumlah Tiket : {{ $booking->jumlah_tiket }}</h5><br>
        <h3>Total Price : {{ $booking->total_harga }}</h3> <br> 
            <form action="{{ route('home') }}" method="GET">
            @csrf                                        
                <div class="mb-3">
                       
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>    
    </div>   
@endsection        