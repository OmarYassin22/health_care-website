<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>appointment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <!-- header section starts  -->
    <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <a href="#home" class="logo">Health<span>Care.</span></a>
                <nav class="nav">
                    <li> <a href="#home">home</a>
                    <li><a href="#about">about</a>
                    <li><a href="#Specialties">Departments</a>

                    <li><a href="#contact">contact</a></li>
                    <li><a href="doc"> Doctors</a></li>


            </div>
        </div>
    </header>
    <!-- header section starts  -->  <!--contact section start -->
    <div class="login" id="login">
        <h1 class="contentse" style="color:white;font-size:3.8rem;">make appointment</h1>


        <form class="glass" action="doctors" method="post">
            
      <h1>Login</h1>
      <form method="post">
      @csrf
        <div class="txt_field">
   
          <label>Username</label>
          <input type="text" required>
        
        </div>
        <div class="txt_field">
        <span></span>
          <label>Password</label>
          <input class="inputs" type="password" required>
      
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="#">Signup</a>
        </div>
      </form>
    </div>
    <!--contact section end -->
    <!--fotter section start -->
    <div class="footer">
        <div class="containers">
            <div class="rows">
                <div class="footer_col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#home">home</a>
                        <li><a href="#about">about</a>
                        <li><a href="#Specialties">Specialties</a>
                        <li><a href="#reviews">reviews</a>
                        <li><a href="#contact">contact</a></li>
                    </ul>
                </div>
                <div class="footer_col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">appointment</a>
                        <li><a href="#Specialties">Specialties</a>

                        <li><a href="#contact">contact</a></li>
                    </ul>
                </div>
                <div class="footer_col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer section end -->
    <script src='/js/app.js'></script>

</html>