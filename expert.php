<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Website-Full Responsive</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"> -->
    <link href="/your_path_to_version_6_files/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- header section starts  -->

    <header>

        <div id="menu-bar" class="fas fa-bars"></div>
        <a href="index.php" class="logo">
            pets and Farm animal
        </a>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="pet.php">pets</a>
            <a href="domesticAnimal.php">packages</a>
            <a href="vet.php">Veteran</a>
            <a href="blog.php">Our Blogs</a>
            <a href="food.php">review</a>
            <a href="expert.php">Expert</a>
        </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user-tie" id="login-btn"></i>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>

    </header>

    <!-- header section ends -->

    <!-- login form container  -->

    <div class="login-form-container">

        <i class="fas fa-times" id="form-close"></i>

        <form action="">
            <h3>login</h3>
            <input type="email" class="box" placeholder="enter your email">
            <input type="password" class="box" placeholder="enter your password">
            <input type="submit" value="login now" class="btn">
            <input type="checkbox" id="remember">
            <label for="remember">remember me</label>
            <p>forget password? <a href="#">click here</a></p>
            <p>don't have and account? <a href="registration.php">register now</a></p>
        </form>

    </div>


    <!-- services section starts  -->

    <section class="services" id="services">

        <div class="box-container">
            <div class="container">
                <div class="jumbotron">
                    <h1>Bootstrap Tutorial</h1>
                    <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
                        responsive, mobile-first projects on the web.</p>
                </div>
                <p>This is some text.</p>
                <p>This is another text.</p>
            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- gallery section starts  -->

    <section class="gallery" id="gallery">

        <h1 class="heading">
            <span>g</span>
            <span>a</span>
            <span>l</span>
            <span>l</span>
            <span>e</span>
            <span>r</span>
            <span>y</span>

        </h1>

        <div class="box-container">

            <H1>tHIS IS MY EXPERT SECTION</H1>

        </div>

    </section>

    <!-- gallery section ends -->

    <!-- contact section starts  -->




    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>about us</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quas magni pariatur est accusantium voluptas enim nemo facilis sit debitis.</p>
            </div>
            <div class="box">
                <h3>branch locations</h3>
                <a href="#">india</a>
                <a href="#">USA</a>
                <a href="#">japan</a>
                <a href="#">france</a>
            </div>
            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">book</a>
                <a href="#">packages</a>
                <a href="#">services</a>
                <a href="#">gallery</a>
                <a href="#">review</a>
                <a href="#">contact</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i herf="#" class="fa-brands fa-facebook-f"></i> facebook</a>
                <a href="#"><i class="fa-brands fa-instagram"></i> instagram</a>
                <a href="#"><i class="fa-brands fa-twitter"></i> twitter</a>
                <a href="#"><i class="fa-brands fa-linkedin"></i> linkedin</a>
            </div>

        </div>

        <h1 class="credit"> created by <span> Md.Mostafizur Rahman </span> | all rights reserved! </h1>

    </section>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="script.js"></script>

</body>

</html>