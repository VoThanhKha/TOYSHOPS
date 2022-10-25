<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TOY SHOPS</title>

    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    

  <script src="script.js"></script>

  <style>
        body {
            color:orangered;
        }
        h1 {
            color:coral;
        }
        p {
            color: rgb(0,0,255)
        }
</style>
    </head>
 
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php"> <h1> TOY SHOPS </h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="cart.php">CART</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                MANAGEMENT 
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="./account/index.php">Search Product</a></li>
                <li><a class="dropdown-item" href="./orders/index.php">Store Branches</a></li>
                <li><a class="dropdown-item" href="./product/index.php">Product Management</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">ABOUT US</a>
            </li>
           <!-- <li class="nav-item">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" >
                    <button class="btn btn-outline-success" type="submit">SEARCH</button>
        
                </form>
            </li> -->
        </ul>
        
        <div class="navbar-nav ms-auto">
                    <a href="login.php" class="nav-item nav-link" >Login</a>
                    <a href="register.php" class="nav-item nav-link">Register</a>
        </div>
        </div>
    </div>
    </nav>