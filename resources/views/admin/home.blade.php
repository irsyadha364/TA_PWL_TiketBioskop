@extends('layouts.app')
@section('content')
        
@include('layouts.navbarAdmin')
    <!-- carousel -->
    <br><br><br><br>
        <div class="container">
            <h1>Selamat Datang, {{Auth::user()->name}} !</h1>
                <br>
            <h5>List Film</h5>
            <table class="table table-striped">
                <tr>
                    <th>Cover Film</th>
                    <th>Nama Film</th>
                    <th>Deskripsi Film</th>
                    <th width="20%">Action</th>
                </tr>
                @foreach($movies as $mvs)
                <tr>
                    <td><img src="{{ asset('storage/'.$mvs->cover_film) }}" width='150px' height='250px'></td>
                        
                    <td>{{ $mvs->nama_film}}</td>
                            
                    <td>{{ $mvs->desk_film}}</td>
        
                    <td>
                    <form action="{{ route('movies.destroy', $mvs->id) }}" method="POST">
                        <a href="{{ route('movies.edit', $mvs->id) }}"><button type="button" class="btn btn-info">Update</button></a>  ||
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </table>
                        
        </div>
    <br><br>
    @include('layouts.footer')
    @endsection