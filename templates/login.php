<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Anna's Recipe Collection</title>

    <meta name="description" content="A selection of savoury pastry recipes">
    <meta name="author" content="Anna Brereton">

    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="shortcut icon" href="https://res.cloudinary.com/dkweuv1ms/image/upload/v1680519387/logo_b4wygb.png">
    <link rel="apple-touch-icon" href="https://res.cloudinary.com/dkweuv1ms/image/upload/v1680519387/apple-touch-icon_ysqk2d.png">
    <link rel="android-chrome-192x192-icon" href="https://res.cloudinary.com/dkweuv1ms/image/upload/v1680519387/android-chrome-192x192_rsaepq.png">

    <!-- <script defer src="js/index.js"></script> -->

</head>
<body>
    <h1>Collection App</h1>
    <p class="tagline">Don't have an account? Sign up <a class="signup-link" href="/signup" >here!</a></p>

    <section class="form-container">
        <h4>LOGIN</h4>
        <div class="index-login">
            <form action="/login" method="post" class="form">
                <div class="input-container">
                    <label class="input-label">Username: </label>
                    <input type="text" name="uid" placeholder="Username" class="input">
                </div>
                <div class="input-container">
                    <label class="input-label">Password: </label>
                    <input type="password" name="pwd" placeholder="Password">
                </div>
                <button type="submit" name="submit" class="submit">LOGIN</button>
            </form>
        </div>
    </section>

    <nav class="footer-nav-bar">
        <a class="home" href="/home">
            <i class="fa-solid fa-house"></i>
        </a>
        <div class="login-link-btn">
            <a class="login-link" href="/login">Login</a>
        </div>
    </nav>

</body>
</html>
