@extends('layouts.app')
@section('content')
        
@include('layouts.navbarUser')
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Pesan Tiket</h3>	
            </div>
            
			<div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
				<form action="{{ route('booking.store') }}" method="POST">
                    @csrf
                    <div class = "container">    
                        <label for="id_film">Id Film</label>
                        <input type="number" class="form-control" value="{{$movies->id}}" name="t_id" hidden>
                        
                        <label for="nama_film">Judul Film</label>
                        <input type="text" class="form-control" value="{{$movies->nama_film}}" name="nama_film" disabled>
                            
                        <label for="jumlah_tiket">Jumlah Kursi</label>
                        <div class="input-group">
                            <input type="number" class="form-control" name="jumlah_tiket" required>
                        </div>  

                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" >
                            
                        <label for="jam">Jam</label>
                        <div class="input-group">
                            <select class="form-control" name="jam">
                                <option selected disabled hidden>Pilih Jam</option>
                                <option value="10:30">10:30</option>
                                <option value="12:50">12:50</option>
                                <option value="14:30">14:30</option>
                                <option value="16:50">16:50</option>
                                <option value="18:30">18:30</option>
                                <option value="20:50">20:50</option>
                            </select>
                        </div>

                        <input type="submit" value="Pesan" class="btn float-right login_btn">
                            
                    </div>
				</form>
			</div>	
		</div>
	</div>
</div>
@include('layouts.footer')
@endsection