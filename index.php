<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="Ressources/style.css">
    <title>MyCinema</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-medium">
            <a class="navbar-brand">
                <?php
                    include_once "Ressources/function1.php";
                    $date = date("l  F  Y");
                    echo $date;
                ?>
            </a>
            <button class="navbar-toggler btn btn-outline-secondary btn-lg colorbutton" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#FindOut">Find<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#carouselExampleControls">Our Place</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#Contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div>
        <div id="carouselExampleControls" class="carousel slide carousel-fade shadowSlide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="Ressources/devanture.jpg" alt="Devanture de cinéma">

                </div>
                <div class="carousel-item ">
                    <img class="d-block w-100" src="Ressources/hall_cinema" alt="Hall de cinéma">
                </div>

                <div class="carousel-item ">
                    <img class="d-block w-100" src="Ressources/salle_cinema" alt="Salle de cinéma">
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
    </div>
    <div id="FindOut">

            <div class="row">
                <div class="col col-lg-offset-2 col-lg-4 ">
                    <button class="btn btn-default btn-block" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Film</button>
                </div>
                <div class="col col-lg-offset-6 col-lg-4 ">
                    <button class="btn btn-default btn-block" role="button" data-toggle="collapse" href="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Member</button>
                </div>
            </div>

        <div class="row">
            <div class="col col-md-5">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <div class="card card-body">
                    This section allows you to search in relation to films presented in cinema taking into account several filters. Click on the button to start.
                    <input class="btn btn-default" href="searchfilm.php" value="Find" onclick="RedirectionFilm()" type="button">
                    </div>
                </div>
            </div>
            <div class="col col-md-5">
                <div class="collapse multi-collapse" id="multiCollapseExample2">
                    <div class="card card-body">
                    This section allows you to search members and customers of this cinema. Click on the button to start.
                    <button class="btn btn-default" href="searchmember.php" onclick="RedirectionMembre()">Find out </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<footer>
    <div class="card border-light mb-3 container Contact" style="max-width: 18rem;" id="Contact">
        <div class="card-header">Contact</div>
            <div class="card-body">
                <p class="card-text">Mail: paul.paillard@epitech.eu<br>Phone: 123 546 789</p>
            </div>
        </div>

</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="Ressources/function1.js"></script>
</body>
</html>