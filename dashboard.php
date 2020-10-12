<?php

include_once 'source/session.php';

?>

<!DOCTYPE html>
<html>
<title>Homepage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
h1,h2{
    display: inline-block;
    padding: 10px;
}

h2{
   float: right;
}
.bgimg {
  background-image: url('112097.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
</style>
<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
<?php echo "<h1> Welkom ". $_SESSION['username']." op mijn pagina </h1>" ?>
<h2><a href="logout.php">Uitloggen</a> </h2>
<?php if(!isset($_SESSION['username'])): header("location: logout.php");?>

<?php else: ?>

<?php endif ?>  
  <div class="w3-display-middle">
    <h1 class="w3-jumbo w3-animate-top">COMING SOON</h1>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <p class="w3-large w3-center">XX days left</p>
  </div>
</div>

</body>
</html>


