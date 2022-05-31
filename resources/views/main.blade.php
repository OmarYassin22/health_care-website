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


            </div>
        </div>
    </header>
    <!-- header section starts  -->
    <!-- home section starts  -->
    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left ">
                    <h3>Your health is our consideration</h3>
                    <p>Healthcare is an international, scientific, peer-reviewed, open access journal on health care systems, industry, technology, policy, and regulation, and is published monthly online by MDPI.</p>
                    <a href="#contact" class="link-btn">make appointment</a>
                </div>
            </div>
        </div>
    </section>

    <!-- home section ends -->

    <!-- about section starts -->
    <section class="about" id="about">

        <div class="row align-items-center">

            <div class="col-md-6 content ">
                <span>about us</span>
                <p>A pioneer in scholarly, open access publishing, MDPI has supported academic communities since 1996. Based in Basel, Switzerland, MDPI has the mission to foster open scientific exchange in all forms, across all disciplines.
                    Our 391 diverse, peer-reviewed, open access journals are supported by more than 115,000 academic experts who support our mission, values, and commitment to providing high-quality service for our authors. We serve scholars from around the world to ensure the latest research is freely available and all content is distributed under a Creative Commons Attribution License (CC BY).
                    MDPI publishes over 85 journals that are ranked as high impact within their fields. To view the current impact factors for MDPI journals (according to the Journal Citation Reports), please visit our yearly announcement page here
                    With additional offices in Beijing, Wuhan, Tianjin and Nanjing (China), Barcelona (Spain), Belgrade and Novi Sad (Serbia), Manchester (UK), Tokyo (Japan), Cluj and Bucharest (Romania), Toronto (Canada), Kraków (Poland), Singapore (Singapore) and Bangkok (Thailand), MDPI has published the research of more than 330,000 individual authors and our journals receive more than 25 million monthly webpage views</p>
            </div>
            <div class="col-md-6 image">
                <img src='/img/image2.jpg' class="w-100 mb-4 md-md-0" alt="">
            </div>

        </div>
        </div>
    </section>
    <!--about section end -->

    <!--Specialties section start-->

    <section class="Specialties" id="Specialties">
        <div class="container glass">
            <h1 style="color:white;font-size:4rem;">Our Departments</h1>
            <div class="box glass">
                <img class="box-img" src="/img/dentical.jpg">
                <div class="content">
                    <h3>dentist Specialist</h3>
                    <p>Dental Specialists (including Orthodontists) diagnose and treat diseases, injuries, irregularities and malformations of teeth and associated structures in the mouth and jaw using surgery and other specialist techniques.</p>
                </div>
            </div>
            <div class="box glass">
                <img class="box-img" src="/img/Specialist Children.jpg">
                <div class="content">
                    <h3>Specialist Children</h3>
                    <p>Child life specialists are health care professionals who help children and families navigate the process of illness, injury, disability, trauma, or hospitalization.</p>
                </div>


            </div>
            <div class="box glass">
                <img class="box-img" src="/img/surgary2.jpg">
                <div class="content">
                    <h3>surgery specialist</h3>
                    <p>A general surgeon is a medical specialist who performs surgery for a wide range of illnesses. They are educated and trained in the diagnosis, preoperative, operative, and postoperative management of patient care.</p>
                </div>
            </div>
            <div class="box glass">
                <img class="box-img" src="/img/Cosmetologist.jpg">
                <div class="content">
                    <h3>Cosmetologist</h3>
                    <p>cosmetologist is an expert in applying cosmetic procedures, therapies, and treatments to beautify one's outer appearance., and implementing cosmetic treatments to people's hair, skin, and nails.</p>
                </div>
            </div>

        </div>
    </section>

    <!--Specialties section end -->


    <!--contact section start -->
    <div class="contact" id="contact">
        <h1 class="contentse" style="color:white;font-size:3.8rem;">make appointment</h1>
        <form class="glass" action="main" method="post">
            @csrf
            @if(session('success_message' ))
            <p>{{session('success_message')}}</p>
            @endif
            <span>Your Name :</span>
            <input type="text" name="name" id="name" placeholder="enter your name" class="box" value="{{ old('name')}}" required>
            <span style="color:red">@error('name'){{$message}} @enderror</span>

            <span>Your E-mail :</span>
            <input type="email " name="email" id="email" placeholder="enter your email " class="box" value="{{ old('email')}}" required>
            <span style="color:red">@error('email'){{$message}} @enderror</span>

            <span>Your phone :</span>
            <input type="nummber" name="phone" id="phone" placeholder="enter your phone" class="box" value="{{ old('phone')}}" required>
            <span style="color:red">@error('phone'){{$message}} @enderror</span>

            <span> specialty:</span>
            <input type="text" name="specialty" id="specialty" placeholder="enter your Specialization" class="box" value="{{ old('specialty')}}" required>
            <span style="color:red">@error('specialty'){{$message}} @enderror</span><br>

            <span>Doctor:</span>
            <input type="text" name="Doctor" id="Doctor" placeholder="enter doctor's name" class="box" value="{{ old('Doctor')}}" required>
            <span style="color:red">@error('doctor'){{$message}} @enderror</span><br>

            <span>Appointment date :</span>
            <input type="datetime-local" name="date" id="date" class="box" required>
            <span style="color:red">@error('Appointment date'){{$message}} @enderror</span>






            <input type="submit" value="make appointment" name="submit" class="link-btn" required>
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
</body>

</html>