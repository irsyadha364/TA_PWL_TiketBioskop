<div class="row">
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="{{route('home')}}"><img src="{{asset('assets/images/navbar-logo.png')}}" alt="" width="50%" heigth="25%"/></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive" style = "margin-left:30rem">
                    <ul class="navbar-nav text-uppercase ml-auto"> 
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('users.index')}}" style="color: grey;">List User</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('booking.index')}}" style="color: grey;">List Pesanan</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('movies.create')}}" style="color: grey;">Upload Film</a></li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" style="color:grey">
                            Log Out
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
        <br><br><br>