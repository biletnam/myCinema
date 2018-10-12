<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="Ressources/style.css">
    <title>Find out films</title>
</head>
<body>
<?php
    include_once "Ressources/function1.php";
    ConnectDataBase();
?>
<div class="container-fluid search_nav">
    <h2>Find</h2>
</div>
<form  method="post" enctype="multipart/form-data">
        <select class="custom-select kindoffilm" name="genre">
            <option selected value="all">Kind of film</option>
            <option value="0">Detective</option>
            <option value="1">Dramatic comedy</option>
            <option value="2">Science fiction</option>
            <option value="3">Drama</option>
            <option value="4">Documentary</option>
            <option value="5">Animation</option>
            <option value="6">Comedy</option>
            <option value="7">Fantasy</option>
            <option value="8">Action</option>
            <option value="9">Thriller</option>
            <option value="10">Adventure</option>
            <option value="11">Various</option>
            <option value="12">Historical</option>
            <option value="13">Western</option>
            <option value="14">Romance</option>
            <option value="15">Music</option>
            <option value="16">Musical</option>
            <option value="17">Horror</option>
            <option value="18">War</option>
            <option value="19">Unknown</option>
            <option value="20">Spying</option>
            <option value="21">Historical Epic</option>
            <option value="22">Biography</option>
            <option value="23">Experimental</option>
            <option value="24">Short film</option>
        </select>
        <select class="custom-select filmdistributor" name="distributor">
            <option selected value="all">Film Distributor</option>
            <option value="0">gimages</option>
            <option value="1">les films du losange</option>
            <option value="2">mk2 diffusion</option>
            <option value="3">rezo films</option>
            <option value="4">studio images 5</option>
            <option value="5">eiffel productions</option>
            <option value="6">cerito films</option>
            <option value="7">france 3 cinéma</option>
            <option value="8">tartan films</option>
            <option value="9">monarchy enterprises b.v.</option>
            <option value="10">advanced</option>
            <option value="11">the vista organisation group</option>
            <option value="12">les films balenciaga</option>
            <option value="13">art-light productions</option>
            <option value="14">telinor</option>
            <option value="15">bandidos films</option>
            <option value="16">parco co, ltd</option>
            <option value="17">transfilm</option>
            <option value="18">dmvb films</option>
            <option value="19">davis-panzer productions</option>
            <option value="20">idea productions</option>
            <option value="21">vision international</option>
            <option value="22">films a2</option>
            <option value="23">dog eat dog productions</option>
            <option value="24">the carousel pictures company</option>
            <option value="25">interlight</option>
            <option value="26">deluxe productions</option>
            <option value="27">lolistar</option>
            <option value="28">united international pictures (uip)</option>
            <option value="29">verve pictures</option>
            <option value="30">entertainment film distributors ltd</option>
            <option value="31">eros film ltf.</option>
            <option value="32">dogwoof pictures</option>
            <option value="33">guerilla films ltd.</option>
            <option value="34">ica films</option>
            <option value="35">sony pictures</option>
            <option value="36">20th century fox</option>
            <option value="37">contender entertainment</option>
            <option value="38">momentum pictures</option>
            <option value="39">adlabs films</option>
            <option value="40">artificial eye</option>
            <option value="41">the works</option>
            <option value="42">peccadillo pictures</option>
            <option value="43">metrodome films</option>
            <option value="44">icon film distribution uk</option>
            <option value="45">bfi distribution</option>
            <option value="46">optimum releasing</option>
            <option value="47">miracle comms</option>
            <option value="48">revolver entertainment</option>
            <option value="49">soda pictures</option>
            <option value="50">national film theater</option>
            <option value="51">revelation films</option>
            <option value="52">ace films</option>
            <option value="53">pathé</option>
            <option value="54">vértigo films</option>
            <option value="55">park circus</option>
            <option value="56">buena vista international</option>
            <option value="57">yeah yeah yheah ltd.</option>
            <option value="58">swipe films</option>
            <option value="59">universal</option>
            <option value="60">paramount pictures</option>
            <option value="61">warner bros u.k.</option>
            <option value="62">showbox media group</option>
            <option value="63">united pictures international uk</option>
            <option value="64">paramount pictures uk</option>
            <option value="65">buena vista international uk</option>
            <option value="66">universal international pictures</option>
            <option value="67">punk distribution</option>
            <option value="68">axiom films</option>
            <option value="69">eros international ltd.</option>
            <option value="70">sony pictures uk</option>
            <option value="71">lions gate films home entertainment</option>
            <option value="72">studio 18</option>
            <option value="73">british pathé</option>
            <option value="74">maiden voyage pictures</option>
            <option value="75">warner music entertainment</option>
            <option value="76">utv motion pictures</option>
            <option value="77">lionsgate uk</option>
            <option value="78">yume pictures</option>
            <option value="79">delanic films</option>
            <option value="80">vertigo films</option>
            <option value="81">pathé distribution</option>
            <option value="82">spark pictures</option>
            <option value="83">slingshot</option>
            <option value="84">diffusion pictures</option>
            <option value="85">transmedia pictures</option>
            <option value="86">cinefilm</option>
            <option value="87">odeon sky filmworks</option>
            <option value="88">liberation entertainment</option>
            <option value="89">lagoon entertainment</option>
            <option value="90">halcyon pictures</option>
        </select>

    <div class="container offset-lg-2 col-lg-8 form-group">
        <label class="text-white">Film's name :</label>
        <input type="search" class="form-control" placeholder="ex: Prince of Persia, ..." name="film">
        <small class="form-text text-white">“Art depicts life and life depicts art.”   -Bert McCoy
        </small>
    </div>
    <input class="btn btn-dark btn-lg btn-block" type="submit" value="Go on">
    <div class="table-responsive">
        <table class="table table-light table-bordered table-hover table-striped">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Distributor</th>
                    <th scope="col">Kind</th>
                    <th scope="col">Lenght(per min)</th>
                    <th scope="col">Year of distribution</th>
                </tr>
            </thead>
            <?php
                if(isset($_POST['genre']) && isset($_POST['distributor'])
                && $_POST['genre']== "all" && $_POST['distributor']=="all"){
                    AfficherFilm1();
                }
                elseif(isset($_POST['genre']) && $_POST['genre']== "all"){
                    AfficherFilm2();
                }
                elseif(isset($_POST['distributor']) && $_POST['distributor']== "all"){
                    AfficherFilm3();
                }
                elseif(isset($_POST['distributor']) && isset($_POST['genre']) && isset($_POST['film'])
                && $_POST['distributor']!= "all" && $_POST['genre']!= "all"){
                    AfficherFilm4();
                }
             ?>
        </table>
    </div>
</form>

<table>

</table>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="Ressources/function1.js"></script>
</body>
</html>