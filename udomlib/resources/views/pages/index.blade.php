@extends ('layouts.header')
@section('juu')
        <!-- Header -->
<header class="masthead">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in kichwa">Welcome To Our Library!</div>
            <div class="intro-heading">
                <center>
                    {!! Form::open() !!}
                    <div class="col-lg-8">
                        <div class="input-group sachi">
                            {!! Form::text('sachi', 'Search for a book' , ['class' =>'form-control' ]) !!}
                            {!! Form::submit('Search', ['class' => 'btn btn-outline-primary sachi-btn']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                    <form action="" method="POST">

                </center>

            </div>
        </div>
</header>

<!-- Portfolio Grid -->
<section class="bg-light" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Categories</h2>
                <h3 class="section-subheading text-muted">Discover new knowledge with us.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link langi" data-toggle="modal" href="#portfolioModal6">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/programming-books.png" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Programing</h4>
                    <!--<p class="text-muted">Illustration</p>-->
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/netorkingbook.png" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Networking</h4>
                    <!--<p class="text-muted">Illustration</p>-->
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/graphic.jpg" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Multimedia</h4>
                    <!--<p class="text-muted">Illustration</p>-->
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" href="/login">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/security.jpg" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Security</h4>
                    <!--<p class="text-muted">Illustration</p>-->
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link " data-toggle="modal" href="#portfolioModal6">
                    <div class="portfolio-hover ">
                        <div class="portfolio-hover-content ">
                            <i class="fa fa-plus fa-3x"></i>

                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/tell.jpg" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Telecommunications</h4>
                    <!--<p class="text-muted">Illustration</p>-->
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/hardware.jpg" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Hardwares</h4>
                    <!--<p class="text-muted">Illustration</p>-->
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Portfolio Modals -->

<!-- Modal 6 -->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Login</h2>
                            <p class="item-intro text-muted">Please Login to continue.</p>
                            <div class="col-lg-7 mx-auto login-form">
                                <form class="form-signin" method="post" action="">
                                    {{ csrf_field() }}

                                    <label for="inputID" class="sr-only">Library ID</label>
                                    <input type="email" id="inputID" class="form-control" placeholder="Library ID" required autofocus>
                                    <label for="inputPassword" class="sr-only">Password</label>
                                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="remember-me"> Remember me
                                        </label>
                                    </div>
                             <button class="btn btn-lg btn-primary btn-block"  name="btn-login">Sign in</button>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 @endsection
@section('footer')
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Cive Digital Library 2017</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <!-- <li class="list-inline-item">
                           <a href="#">
                             <i class="fa fa-twitter"></i>
                           </a>
                         </li>
                         <li class="list-inline-item">
                           <a href="#">
                             <i class="fa fa-facebook"></i>
                           </a>
                         </li>
                         <li class="list-inline-item">
                           <a href="#">
                             <i class="fa fa-linkedin"></i>
                           </a>
                         </li>-->
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item">
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

    </body>

    </html>

@endsection