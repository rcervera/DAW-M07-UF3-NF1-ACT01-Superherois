<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>Supers!</title>
  </head>
  
  <body>


 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 <a class="navbar-brand" href="#">BD Superherois</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <?php if (isset($_SESSION['username'])) { ?>
      <li class="nav-item">
        <a class="nav-link" href="index.php?control=ControlSuperheroes">Superherois</a>
      </li>
      <li class="nav-item">
             <a class="nav-link" href="index.php?control=ControlLogin&operacio=logout">Logout</a>
      </li>
      <?php } 
      else { ?>
      <li class="nav-item">
        <a class="nav-link" href="index.php?control=ControlLogin">Login</a>
      </li>
      <?php } ?>
      
      
    </ul>
    
  </div>
</nav>


