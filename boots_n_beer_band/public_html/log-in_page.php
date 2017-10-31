<!-- Matt Rockhold --> 
<!DOCTYPE html> 
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Boots 'N Beer: Log-in Page</title>
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

<h1>Log-in Page</h1>

<form style = "margin-left:20px; width:25%;">
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" id="email" placeholder = "Email">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder = "Password">
    </div>
    <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Log-in</button>
</form>
<br>

<p>This log-in page is for your favorite Iowa home-town boys, the Boot 'N Beer Band. 
This page allows you to make an account with this website so you can keep up with the 
band, find out about important dates, see special brand advertisements, or just to get 
to know your favorite band members of the group!</p>

<p>Has all links for other pages about the band and their events, schedules, merchandising, 
and contact information.</p>

<br>
<?php
include '../resources/footer.php';
?>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>