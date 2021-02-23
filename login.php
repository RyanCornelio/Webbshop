<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Retro</title>
    <link rel="stylesheet" href="./style/mainStyle.css">
    <link rel="stylesheet" href="./style/loginStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <link rel="stylesheet" href="css/startpage.css">
    
    <script defer type="module" src="loginHandler.js"></script>
</head>

<body>
<header>
    <div class="headTitle">
        <a href="index.php"><h1 class="textTitle">Retro</h1></a>
    </div>
</header>

<main>
    <nav> 
        <div class="loginCartWrap">
        <div class="loginText">
            <a href="login.php">Inloggning</a>
        </div>
        <div class="myPageText">
            <a href="myPage.php">Mina sidor</a>
        </div>
        <div class="cartField">
        <div id="numberOfItemsInCart"></div>
            <a href="cart.php"><img src="./img/CartIcon.png" style="width:20px;height:auto;text-align:right;"></a>
        </div>
        </div>
    </nav>

    <div id="loginDiv">
        <h1>Username</h1>
        <input type="text" id="usernameInput">
        <h1>Password</h1>
        <input type="password" id="passwordInput">
        <button id="login_btn">Login</button>
    </div>

    <div id="logoutDiv">
        <p>Tryck på knappen för att logga ut</p>
        <button id="logout_btn">Logga ut</button>
    </div>
</main>
   
    
    
<footer>
    <div class="container">
        <div class="row align-items-end">
            <div class="col-md-4 col-12">
                <h3>Get our newsletter</h3>
                <form class="newsletterField" id ="newsletter-form">
                    <label for="firstname"></label>
                    <input type="text" name="firstname" id="firstname" placeholder="Förnamn">
                    <label for="lastname"></label>
                    <input type="text" name="lastname" id="lastname" placeholder="Efternamn">
                    <label for="email"></label>
                    <input type="text" name="email" id="email" placeholder="E-post">
                    <button type="submit" class="btn btn-outline-success" id="newsLetterBtn">Sign up</button>
                </form>
            </div>
        <div class="col-md-4 col-12"> <a href="http://www.google.com"> Länkar</a></div>
        <div class="col-md-4 col-12"><a href="http://www.googlemaps.com">Adress</a></div>
        </div>
        </div>
    </div>
</footer>

</body>
</html>