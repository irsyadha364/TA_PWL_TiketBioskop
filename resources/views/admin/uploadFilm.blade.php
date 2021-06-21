@extends('layouts.app')
@section('content')
        
@include('layouts.navbarAdmin')
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Upload Film</h3>
            </div>
            
			<div class="card-body">
				<form action="{{ route('movies.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class = "container">
                        <label for="nama_film">Nama Film</label>
                        <input type="text" class="form-control" name="nama_film" required>

                        <label for="harga">Harga Tiket</label>
                        <input type="text" class="form-control" name="harga" required>
                            
                        <label for="desk_film">Deskripsi Film</label>      
                        <textarea class="form-control" name="desk_film"></textarea>

                        <label for="cover_film">Cover Film</label>     
                        <input class="form-control" type="file" name="cover_film">
            
						<input type="submit" value="Upload" class="btn float-right login_btn">
                    </div>
				</form>
			</div>
			
		</div>
	</div>
</div>
@endsection