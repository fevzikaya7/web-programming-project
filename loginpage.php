<!DOCTYPE html>
<html lang="en">
<head>
        <title>Online Sapling Sales</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="Ağaç,Fidan,Online ağaç,Ağaç türleri,oksijen,toprak,online fidan bağış">
        <meta name="description" content="Ağaç Türlerimiz ve Online Satış">
        <meta name="author" content="Fevzi Kaya">
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="loginpage.css">
        <script src="script.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
        <link rel="icon" href="foto/tree_icon.png">

        
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark gezinti">
        <div class="container">
            <a class="navbar-brand logo" href="https://web.itu.edu.tr/kayafe18/php/index.php">
                <b>FutureIsOurs</b>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                
                <ul class="navbar-nav mx-auto">
                    
                    <li class="nav-item me-5">
                    <a class="nav-link" style="color: white;" aria-current="page" href="https://web.itu.edu.tr/kayafe18/php/index.php">HOME</a>
                    </li>
                    <li class="nav-item me-5">
                    <a class="nav-link" style="color: white;" href="https://web.itu.edu.tr/kayafe18/php/order.php">ORDER</a>
                    </li>
                    
                    
                    <li class="nav-item me-5 dropdown">
                    <a class="nav-link dropdown-toggle" style="color: white;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        COMMUNICATION
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="https://www.instagram.com/misterkayaa" target="_blank"><i class="bi bi-instagram"></i> Instagram</a></li>
                        <li><a class="dropdown-item" href="https://www.linkedin.com/in/fevzi-kaya-344a92211" target="_blank"><i class="bi bi-linkedin"></i> LinkedIn</a></li>
                        
                        
                    </ul>
                    </li>
                    
                </ul>
                    
                <div class="d-flex" style="justify-content:flex-end !important">
                    <form action="loginpage.php">
                        <button class="btn btn-warning" type="submit">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="row content">
            <div class="col-md-6">
                <img src="foto/loginpage.jpg" class="img-fluid" alt="image">
            </div>
            <div class="col-md-6">
                <h3 class="signin-text mx-auto">Welcome</h3>
                <form method="POST" action="login.php">
                    <div class="form-group">
                        <input type="text" name="username" placeholder="Username" class="form-control">
                        <br>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" class="form-control">
                        <br>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" name="checkbox" class="form-check-input" id="checkbox">
                        <label class="form-check-label" for="checkbox">Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-success form-control">Login</button>
                
                </form>
            </div>
        </div>
    </div>
    
    <script src="bootstrap.js"></script>
    
</body>
</html>