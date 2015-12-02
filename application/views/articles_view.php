<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FIFA 16</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo" href="index.html">
                <img alt="Brand" src="/img/logo.jpg">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="index/welcome"><a href="#">Galvena</a></li>
                <li><a href="#about">Galereja</a></li>
                <li><a href="index/welcome/articles">Forums</a></li>
            </ul>
        </div>
    </div>
</nav>

<h2> Pievienot koment?ru:</h2>

<?php form_open('blog/comment_insert');?>
<?php form_hidden('entry_id', $this->uri->segment(3));?>

<form method="post" action="http://localhost/fifa/index.php/welcome/comment_insert" align="center">
<div class="form-group" align="center" style = "width: 1900px";>
    <label for="nos">Autors:</label>
    <input type="nos" class="form-control" id="email" name= "title" align="center" placeholder="Ierakstiet savu vardu" required> </br>
</div>
<div class="form-group" align="center" style = "width: 1900px";>
    <label for="comment">Kommentars:</label> </br>
    <textarea class="form-control" rows="7" id="comment" name= "text" align="center" required></textarea> </br>

</div>
    <button type="submit" class="btn btn-success">Pievienot komentaru</button>
</form>

<?php foreach ($articles as $item):?>
    <h3  align = "center">Autors: </h3>
<div class = Box1> <p align = center> <?= $item['title']; ?></p> </div>

    <h3 align = "center">Koment?rs: </h3>
<div class = Box2> <p align = center><p><?= $item['text'];  ?></p></div>
<form method="post" action="http://localhost/fifa/index.php/welcome/delete" align="center">
    <button type="submit" class="btn btn-danger">Dz?st komentaru</button>
    </form>
<?php endforeach;?>

<style>
    .form-group{
        left: 200px;
    }
    .Box1 {
        margin-top:350px;
        width:500px;
        height: 50px;
        background-color: #78FF63;
        position:relative;
        border: 2px solid #D4D4D4;
        border-radius: 10px;
        box-shadow: 0 0 15px #A9A9A9;
        padding:20px 40px;
        left: 700px;
        top: -335px;
    }

    .Box2 {
        margin-top:50px;
        width:500px;
        height: 400px;
        background-color: #FB7979;
        position:relative;
        border: 2px solid #D4D4D4;
        border-radius: 10px;
        box-shadow: 0 0 15px #A9A9A9;
        padding:20px 40px;
        left: 700px;
        top: -335px;
    }
    p{
        font-family: TimeNewRomans;
    }
    h3{
        font-family: TimeNewRomans;

    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>