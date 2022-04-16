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
        <a href="index2.php" class="logo">
            pets and Farm animal
        </a>

        <nav class="navbar">
            <a href="index2.php">Home</a>
            <a href="pets.php">pets</a>
            <a href="domesticAnimal.php">farm animals</a>
            <a href="vet.php">Veteran</a>
            <a href="blog.php">Our Blogs</a>
            <a href="food.php">foods</a>
            <a href="expert.php">services</a>
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

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>Pets & Domestic Animal</h3>
            <p>Humans Best Friend</p>
            <a href="#" class="btn">discover more</a>
        </div>

        <div class="controls">
            <span class="vid-btn active" data-src="images/video9.mp4"></span>
            <span class="vid-btn" data-src="images/video10.mp4"></span>
            <span class="vid-btn" data-src="images/video11.mp4"></span>
        </div>

        <div class="video-container">
            <video src="images/video9.mp4" id="video-slider" loop autoplay muted></video>
        </div>

    </section>

    <!-- home section ends -->


    <!-- gallery section starts  -->

    <section class="gallery" id="gallery">

        <h1 class="heading">
            <span>o</span>
            <span>u</span>
            <span>r</span>
            <span class="space"></span>
            <span>b</span>
            <span>l</span>
            <span>o</span>
            <span>g</span>
            <span>s</span>

        </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/img4.png" alt="">
                <div class="content">
                    <h3>Pets</h3>
                    <p>THere are different types of pets.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/groom.jpg" alt="">
                <div class="content">
                    <h3>Grooming</h3>
                    <p>We know how to groom your pets properly</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/farm.jpg" alt="">
                <div class="content">
                    <h3>farming</h3>
                    <p>know many things about farming</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/vet.jpg" alt="">
                <div class="content">
                    <h3>treatment</h3>
                    <p>we have treatment option for your animal.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/img0.jpg" alt="">
                <div class="content">
                    <h3>amazing animals</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <a href="blog.php" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/goat.jpg" alt="">
                <div class="content">
                    <h3>amazing animals</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <a href="blog.php" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/vera.jpg" alt="">
                <div class="content">
                    <h3>amazing animals</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <a href="blog.php" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/murgi.jpg" alt="">
                <div class="content">
                    <h3>amazing animals</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <a href="blog.php" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/all.jpg" alt="">
                <div class="content">
                    <h3>amazing animals</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <a href="images/all.jpg" class="btn">see more</a>
                </div>
            </div>

        </div>

    </section>

    <!-- gallery section ends -->

    <!-- book section starts  -->

    <section class="book" id="book">

        <h1 class="heading">
            <span>b</span>
            <span>o</span>
            <span>o</span>
            <span>k</span>
            <span class="space"></span>
            <span>a</span>
            <span>p</span>
            <span>p</span>
            <span>o</span>
            <span>i</span>
            <span>n</span>
            <span>t</span>
            <span>m</span>
            <span>e</span>
            <span>n</span>
            <span>t</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="images/vet.png" alt="">
            </div>

            <form action="">
                <div class="inputBox">
                    <h3>name</h3>
                    <input type="text" placeholder="place name">
                </div>
                <div class="inputBox">
                    <h3>how many animals</h3>
                    <input type="number" placeholder="number of animals">
                </div>
                <div class="inputBox">
                    <h3>Appointment</h3>
                    <input type="datetime-local">
                </div>
                <!-- <div class="inputBox">
                    <h3>leaving</h3>
                    <input type="date">
                </div> -->

                <a href="vet.php" type="submit" class="btn" value="book now">book now</a>
            </form>

        </div>

    </section>

    <!-- book section ends -->


    <!-- services section starts  -->

    <section class="services" id="services">

        <h1 class="heading">
            <span>s</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>i</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <a href="blog.php" class="btn-box">
                    <i class="fas fa-hotel"></i>
                    <h3>Hospital</h3>
                    <p>Hospital for pets and Domestic animals.</p>
                </a>
            </div>
            <div class="box">
                <a href="food.php" class="btn-box">
                    <i class="fas fa-utensils"></i>
                    <h3>food</h3>
                    <p>Foods for Your Pets and Domestic Animals</p>
                </a>
            </div>
            <div class="box">
            <a href="food.php" class="btn-box">
                <i class="fas fa"></i>
                <h3>safty guide</h3>
                <p>special treatment for your pets</p>
            </a>
            </div>
            <div class="box">
            <a href="food.php" class="btn-box">
                <i class="fas fa-people-roof"></i>
                <h3>around the world</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
</a>
            </div>
            <div class="box">
            <a href="food.php" class="btn-box">
                <i class="fas fa-plane"></i>
                <h3>fastest travel</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
            </a>
            </div>
            <div class="box">
            <a href="food.php" class="btn-box">
                <i class="fas fa-hiking"></i>
                <h3>adventures</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
            </a>
            </div>

        </div>

    </section>

    <!-- services section ends -->



    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading">
            <span>a</span>
            <span>s</span>
            <span>k</span>

            <span>e</span>
            <span>x</span>
            <span>p</span>
            <span>e</span>
            <span>r</span>
            <span>t</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="images/contact.webp" alt="">
            </div>

            <form action="">
                <div class="inputBox">
                    <input type="text" placeholder="name">
                    <input type="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <input type="string" placeholder="number">
                    <input type="text" placeholder="subject">
                </div>
                <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
                <input type="submit" class="btn" value="send message">
            </form>

        </div>

    </section>

    <!-- contact section ends -->



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