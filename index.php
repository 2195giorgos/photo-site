<!DOCTYPE html>
<html lang="en">
<head>
<title>Photo galery</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <line rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">PHOTOS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#nature">Nature</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#arcitecture">Arcitecture</a>
                <div class="dropdown-divider"></div> 
                <a class="dropdown-item" href="#travel">Travel</a>
                </div>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            </ul>
        </div>
    </nav>
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/nature_1.jpg" alt="Nature">
                <div class="carousel-caption d-none d-md-block">
                     <h3>Nature<h3>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/arcitecture_1.jpg" alt="Arcitecture">
                <div class="carousel-caption d-none d-md-block">
                     <h3>Arcitecture<h3>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/travel_1.jpg" alt="Travel">
                <div class="carousel-caption d-none d-md-block">
                     <h3>Travel<h3>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <a id="nature">
        <section class="my-4">
            <div class="py-4">
                <h2 class="text-center">Nature</h2>
            </div>

            <div class=container-fluid>
            <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/nature_2.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/nature_3.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/nature_4.jpg" class="img-fluid pb-3">
                    </div>
                </div>
            </div>
        </section>
    </a>

    <a id="arcitecture">
        <section class="my-4">
            <div class="py-4">
                <h2 class="text-center">Arcitecture</h2>
            </div>

            <div class=container-fluid>
            <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/arcitecture_2.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/arcitecture_3.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/arcitecture_4.jpg" class="img-fluid pb-3">
                    </div>
                </div>
            </div>
        </section>
    </a>
    <a id="travel">
        <section class="my-4">
            <div class="py-4">
                <h2 class="text-center">Travel</h2>
            </div>

            <div class=container-fluid>
            <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/travel_2.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/travel_3.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/travel_4.jpg" class="img-fluid pb-3">
                    </div>
                </div>
            </div>
        </section>
    </a>

    <a id="contact">
        <section class="my-4">
            <div class="py-4">
                <h2 class="text-center">Contact Us</h2>
            </div>
            <div class="w-50 m-auto"> <!-- width(w) margin(m) -->
                <form action="about.php" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Number</label>
                        <input type="text" name="number" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </section>
    </a>

    <a id="about">
        <section class="my-4">
            <div class="py-4">
                <h2 class="text-center">About Us</h2>
            </div>
            <div class=container-fluid>
                <h3 class="text-center">George</h3> 
                <p class="text-center"> <b> Είμαι ο Γιώργος και μου αρέσει η φωτογραφία στην φύση, όπως και τα ταξίδια</b>
                </p>
            </div>
        </section>
    </a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 

</body>
</html>