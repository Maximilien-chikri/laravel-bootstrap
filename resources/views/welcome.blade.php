<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Bootstrap</title>
</head>
<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- footer -->
    <footer class="border-top">
        <div class="row">
        <!-- row 1 -->
            <div class="col-6 col-md">
                <h5>exemples</h5>
                <ul class="list-unstyled">
                    <li>blabla</li>
                    <li>blabla</li>
                    <li>blabla</li>
                    <li>blabla</li>
                </ul>
            </div>
        <!-- row 2 -->
            <div class="col-6 col-md">
                <h5>exemples</h5>
                <ul class="list-unstyled">
                    <li>blabla</li>
                    <li>blabla</li>
                    <li>blabla</li>
                    <li>blabla</li>
                </ul>

            </div>
        <!-- row 3 -->
            <div class="col-6 col-md">
                <h5>exemples</h5>
                <ul class="list-unstyled">
                    <li>blabla</li>
                    <li>blabla</li>
                    <li>blabla</li>
                    <li>blabla</li>
                </ul>
            </div>

        </div>
    
    </footer>


    <script src={{asset('js/app.js')}}></script>
</body>
</html>
