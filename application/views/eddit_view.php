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



<h2> I komentaru:</h2>

<?php form_open('blog/update_comment');?>
<?php form_hidden('entry_id', $this->uri->segment(3));?>
<div class="container">
<form method="post" action="http://localhost/fifa/index.php/welcome/articles" align="center">
<div >
    <label for="nos" class="autors">Autors:</label>
    <input type="nos" class="form-control" id="email" name= "title" align="center" placeholder="Ierakstiet savu vardu" required> </br>
</div>
<div  >
    <label for="comment" class="autors">Kommentars:</label> </br>
    <textarea class="form-control" rows="7" id="comment" name= "text" align="center" required></textarea> </br>

</div>
<hr>
    <button type="submit" class="btn btn-success">Saglabat izmainas</button>
</form>

</div>




</body>
</html>