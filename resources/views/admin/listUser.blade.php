@extends('layouts.app')
@section('content')
        
@include('layouts.navbarAdmin')
    <br><br><br><br>
        <div class="container">
            <h5>List User</h5>            
                <table class="table table-striped">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>Email</td>
                        <td>Role</td>
                        <td>Action</td>
                    </tr>
                    @foreach($user as $users )
                    <tr>
                        <td>{{ $users->name}}</td>    
                        <td>{{ $users->email}}</td>    
                        <td>{{ $users->role}}</td>    
                        <td>
                        <form action="{{ route('users.destroy',['user'=>$users->id]) }}" method="POST">
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