<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="Ressources/style.css">
    <title>Find out members</title>
</head>
<body>
<?php
    include_once "Ressources/function1.php";
    include_once "Ressources/function2.php";
    ConnectDataBase();
?>
<div class="container-fluid search_nav">
    <h2>Find</h2>

</div>
<form  method="post" enctype="multipart/form-data">
    <label class="text-white">Name :</label>
    <input type="search" class="form-control" placeholder="Henri" name="prenom">

    <label class="text-white">Surname : </label>
    <input type="search" class="form-control" placeholder="DuJambon" name="nom">
    <input class="btn btn-dark btn-lg btn-block" type="submit" value="Go on">
    </form>
    <div class="table-responsive">
        <table class="table table-light table-bordered table-hover table-striped">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">ID</th>
                    <th scope="col">Subscription</th>
                    <th scope="col">New Subscribe</th>
                    <th scope="col">Delete</th>
                    <th scope="col">See History</th>
                </tr>
            </thead>

            <?php
                if(isset($_POST['nom']) && isset($_POST['prenom'])){
                    AfficherMembre1();
                }
                elseif(isset($_POST['nom'])){
                    AfficherMembre1();
                }
                elseif(isset($_POST['prenom'])){
                    AfficherMembre1();
                }
            ?>
        </table>
        </div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="Ressources/function1.js"></script>
</body>
</html>