
<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/profile-style.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<nav>
    <div class="nav-wrapper">
        <a href="#!" class="brand-logo">{{$first}} {{ $last}}</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#"><i class="material-icons">search</i></a></li>
            <li><a href="#"><i class="material-icons">view_module</i></a></li>
            <li><a href="#"><i class="material-icons">refresh</i></a></li>
            <li><a href="#"><i class="material-icons dropdown-button" href="#!" data-activates="dropdown1">more_vert</i></a></li>
        </ul>
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">PHP</a></li>
            <li><a href="#!">JAVA</a></li>
            <li class="divider"></li>
            <li><a href="#!">HTML</a></li>
        </ul>
    </div>

</nav>
<br><br>
    <div class="container">
       <!-- <nav>

            <div class="nav-wrapper">
                <form>
                    <div class="backcolor input-field">
                        <input id="search" type="search" required>
                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                        <i class="material-icons">close</i>
                    </div>
                </form>
            </div>
        </nav>
-->
        <div class="row">
            <div class="col s12 m6">

                <div class="card horizontal">
                    <div class="card-image">
                        <img src="img/home-images/programing/java.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <h5 class="header">Horizontal Card</h5>
                            <p>I am a very simple card. I am good at containing small bits of information.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">View</a>
                            <a href="#">Download</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m6">

                <div class="card horizontal">
                    <div class="card-image">
                        <img src="img/home-images/programing/java.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <h5 class="header">Horizontal Card</h5>
                            <p>I am a very simple card. I am good at containing small bits of information.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">View</a>
                            <a href="#">Download</a>
                        </div>
                    </div>
                </div>
            </div><div class="col s12 m6">

                <div class="card horizontal">
                    <div class="card-image">
                        <img src="img/home-images/programing/java.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <h5 class="header">Horizontal Card</h5>
                            <p>I am a very simple card. I am good at containing small bits of information.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">View</a>
                            <a href="#">Download</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m6">

                <div class="card horizontal">
                    <div class="card-image">
                        <img src="img/home-images/programing/java.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <h5 class="header">Horizontal Card</h5>
                            <p>I am a very simple card. I am good at containing small bits of information.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">View</a>
                            <a href="#">Download</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
        </div>
<body>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
