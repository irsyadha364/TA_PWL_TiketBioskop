@extends('layouts.app')
@section('content')
        
@include('layouts.navbarAdmin')
        <div class="container">
            <br><br><br>
            <br>
            <h5>List Booking</h5><br>
            <table class='table table-striped'>
                <tr>
                    <th> Name Pemesan</th>
                    <th> Judul Film</th>
                    <th> Jumlah Kursi</th>
                    <th> Tanggal</th>
                    <th> Jam</th>
                    <th> Total harga</th>
                    <th> Action </th>
                </tr>
            @foreach($booking as $book)
			<tr>
                <td>{{ $book->user->name}}</td>
                <td>{{ $book->movie->nama_film}}</td>
                <td>{{ $book->jumlah_tiket}}</td>
                <td>{{ $book->tanggal}}</td>
                <td>{{ $book->jam}}</td>
                <td>{{ $book->total_harga}}</td>
				<td>
                    <form action="{{ route('booking.destroy',['id'=>$book->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
				</td>
            </tr>
           @endforeach
           </table>
        </div>
        <div class="container">
            @include('layouts.footer')
        </div>
@endsection