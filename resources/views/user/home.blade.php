@extends('layouts.app')
@section('content')
        
@include('layouts.navbarUser')
    <!-- carousel -->
    <br><br><br><br>
        <div class = "row">
            <div class="col-lg-2" style="margin-left:1rem">
                <h5>Recommended</h5>
                  
                    <table class="table table-striped">
                    @foreach($movies as $mvs)
                        <tr>
                            <td>{{$mvs->nama_film}}</td>
                        </tr>
                        @endforeach
                    </table>
                    
                </div>
                <div class="col-lg-9">
                        <h1>Selamat Datang, {{Auth::user()->name}} !</h1>
                        <h2>New Releases!</h2>
                        <div class="container">
                            <div id="myCarousel" class="carousel slide my-4" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                <img class="d-block img-fluid" src="{{asset('assets/images/slider-jumbotron-1.jpg')}}" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block img-fluid" src="{{asset('assets/images/slider-jumbotron-2.jpg')}}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block img-fluid" src="{{asset('assets/images/slider-jumbotron-3.jpg')}}" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            </div>
                            <!-- /.carousel -->
                        </div>

                        <div class="container">
                        
                        <table class="table table-striped">
                            
                        @foreach($movies as $mvs)
                            <tr>
                                <td><img src="{{ asset('storage/'.$mvs->cover_film) }}" width='150px' height='250px'></td>
                            
                                <td>{{$mvs->nama_film}}</td>
                            
                                <td>{{$mvs->desk_film}}</td>
          
                                <td>
                                <form action="{{ route('booking.create', $mvs->id) }}" method="GET">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Booking</button>
                                </form>  
                                </td>
                            </tr>
                            @endforeach
                        </table>
                       
                        </div>
                     </div>
                </div>
        <br><br>
        <!-- footer -->
        @include('layouts.footer')
@endsection