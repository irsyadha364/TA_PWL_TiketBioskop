@extends('layouts.app')
@section('content')
    
@include('layouts.navigationGeneral')      
    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="h1-large">PLAN<br> DESIGN<br> DEVELOP</h1>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="button-container">
                        <a class="btn-solid-lg page-scroll" href="#intro">Discover</a>
                        <a class="btn-outline-lg page-scroll" href="#contact">Contact</a>
                    </div> <!-- end of button-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->  

    <!-- Team -->
    <div class="cards-2 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Specialized team members</h2>
                    <p class="p-heading">It as announcing it me stimulated frequently continuing. Least their she you now above going stand forth. He set this new record pretty future afraid should genius spirit on</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="assets/images/team-member-1.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Irsyadha Alfyrdhousi R </h5>
                            <p class="card-text">Business Developer</p>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-linkedin-in fa-stack-1x"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="assets/images/team-member-2.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Fadhil Ahmad Yazid</h5>
                            <p class="card-text">Software Engineer</p>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-linkedin-in fa-stack-1x"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                    <!-- end of card -->
    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of team -->

<!-- Modal Login -->
<!-- Login page -->
<div id="login-modal" class="modal">
    <form class="modal-content animate" action="{{ route('login') }}" method="post">
        @csrf
        <div class="imgcontainer">
            <span onclick="document.getElementById('login-modal').style.display='none'" class="close"
                title="Close Modal">&times;</span>
            <img src="{{ asset('assets/images/navbar-logo.png') }}" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="email"><b>Email</b></label>                
            <input id="email" type="email" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror mb-4" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <label for="password"><b>Password</b></label>                
            <input id="password" type="password" placeholder="Enter Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <input type="checkbox" onclick="showPassword()" class="mr-2 my-1" style="height:20px;width:20px">Show Password <br>
            <button type="submit">Login</button><br>
            <span class="sign-up text-muted">Don't have an account? <a href="{{ route('sign-up') }}">Sign Up</a></span>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('login-modal').style.display='none'"
                class="cancelbtn mr-3">Cancel</button>
            <span class="password"><a href="{{ route('forgot-password') }}">Forgot password?</a></span>
        </div>
    </form>
</div>
<!-- End of modal -->
    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-col first">
                        <h6>About Irsyad & Fadhil</h6>
                        <p class="p-small">He oppose at thrown desire of no. Announcing impression unaffected day his are unreserved indulgence. Him hard find read are you</p>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col second">
                        <h6>Links</h6>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li>Important: <a href="terms.html">Terms & Conditions</a>, <a href="privacy.html">Privacy Policy</a></li>
                            <li>Useful: <a href="#">Colorpicker</a>, <a href="#">Icon Library</a>, <a href="#">Illustrations</a></li>
                            <li>Menu: <a class="page-scroll" href="#header">Home</a>, <a class="page-scroll" href="#projects">Projects</a>, <a class="page-scroll" href="#services">Services</a>, <a class="page-scroll" href="#contact">Contact</a></li>
                        </ul>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col third">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <p class="p-small">We would love to hear from you <a href="IrsyadhaFadhil@gmail.com"><strong>contact@site.com</strong></a></p>
                    </div> <!-- end of footer-col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © <a href="#your-link">Irsyad & Fadhil </a></p>
                </div> 
                
                <div class="col-lg-12">
                    <p class="p-small">Distributed by :<a href="https://IrFadh.com/">IrFadh</a></p>
                </div> <<!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
@endsection