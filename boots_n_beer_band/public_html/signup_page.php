<!DOCTYPE html>
<!-- Will Roberts -->
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Boots 'N Beer: Sign-up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/sandstone/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/css_karson_richardson.css">
</head>
<body>

<?php
include '../resources/navigation.php';
?>

<div class = "below_menu_container">
<img src="img/bootsnbeer_logo2.png" alt="Band Logo" />

<h1>Sign Up Page</h1>

<p>By creating an account, you will be able to keep a shopping cart of merchandise you 
intend on purchasing if you leave the website. You will also be notified whenever information 
on any of the pages have been updated.</p>

<form style = "margin-left:20px; width:25%;">
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" id="email" placeholder = "Email">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder = "Password">
    </div>
    <div class="form-group">
        <label for="pwd">Retype Password:</label>
        <input type="password" class="form-control" id="pwdretype" placeholder = "Password">
    </div>
    <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
    </div>
    <div class="checkbox">
        <label><input type="checkbox"> Receive News and Updates</label>
    </div>
    <button type="submit" class="btn btn-default">Sign Up</button>
</form>
<br>

<?php
include '../resources/footer.php';
?>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>