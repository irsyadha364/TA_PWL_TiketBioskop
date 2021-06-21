@extends('layouts.app')
@section('content')
        
@include('layouts.navbarAdmin')

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Update Film</h3>
            </div>
            
			<div class="card-body">
				<form action="{{ route('movies.update', $movies->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class = "container">
                            
                        <label for="nama_film">Judul Film</label>
                        <input type="text" class="form-control" value="{{$movies->nama_film}}" name="nama_film" required>
                        
                        <label for="nama_film">Harga Tiket</label>
                        <input type="text" class="form-control" value="{{$movies->harga}}" name="harga" required>
                            
                        <label for="desk_film">Deskripsi Film</label>
                        <div class="input-group">
                            <textarea class="form-control" rows="3" name="desk_film" required>{{$movies->desk_film}}</textarea>    
                        </div>  

                        <label for="cover_film">Cover Film</label>
                        <input class="form-control" type="file" name="cover_film" value="{{ $movies->cover_film }}"><br>
                        
					    <input type="submit" value="Update" class="btn float-right login_btn">
                    
                    </div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection