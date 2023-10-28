<?php
require_once dirname(__DIR__) . '/head/head.php';
if (!empty($_SESSION['user'])) {
    header("Location:./view/dashboard/dashboard.php");
}
?>
<link href="./assets/css/home.css" rel="stylesheet">


    <!-- Home Section Start -->
    <section class="home" id="home">
        <div class="main-text">
            <h3>Travel The World
                <br> & Explore The New Destination
            </h3>
        
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro molestias nemo, harum debitis error itaque?</p>
        <a href="#packages"><button id="home-btn">PACKAGES <i class="fa-solid fa-arrow-down"></i><button id="home-btn2"><i class="fa-sharp fa-solid fa-circle-play"></i></button></button></a>
    </div>
    </section>
    <!-- Home Section End -->


    <!-- Services Section Start -->
    <section class="services" id="services">
        <div class="heading">
            <h3>Services</h3>
        </div>
            <div class="card-content">

                <div class="row">
                    <i class="fas fa-globe-asia"></i>
                    <div class="card-body">
                        <h3>Around The World</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vero suscipit eos quam explicabo quas.</p>
                    </div>
                </div>
                <div class="row">
                    <i class="fas fa-plane"></i>
                    <div class="card-body">
                        <h3>Fastet Travel</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vero suscipit eos quam explicabo quas.</p>

                    </div>
                </div>
                <div class="row">
                    <i class="fas fa-hotel"></i>
                    <div class="card-body">
                        <h3>Affordable Hotels</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vero suscipit eos quam explicabo quas.</p>

                    </div>
                </div>
                <div class="row">
                    <i class="fas fa-bullhorn"></i>
                    <div class="card-body">
                        <h3>Safty Guide</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vero suscipit eos quam explicabo quas.</p>

                    </div>
                </div>

            </div>

       
    </section>
    <!-- Services Section End -->



    <!-- About Section Start -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="./assets/img/home/about-img.png" alt="">
        </div>
        <div class="about-info">
            <h6>About us</h6>
            <h3>How Work This Travel Agency</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione odio vitae tempora nesciunt quibusdam? Delectus voluptatibus neque quod, id cumque blanditiis, suscipit temporibus ipsam aspernatur sunt voluptatem repellat corrupti amet at velit, minus reprehenderit voluptate nobis asperiores maxime deleniti quibusdam. Numquam sequi iusto consequatur obcaecati, incidunt quia accusantium perspiciatis expedita.</p>

            <button class="about-btn">Read More...</button>
        </div>
    </section>
    <!-- About Section End -->




    <!-- Gallary Section Start -->
    <section class="gallary" id="gallary">
        <div class="heading">
            <h3>OUR GALLARY <i class="fa-solid fa-arrow-down"></i></h3>
        </div>

        <div class="gallary-card">
            <div class="row">
                <img src="./assets/img/home/p1.jpg" alt="">
            </div>
            <div class="row">
                <img src="./assets/img/home/p2.png" alt="">
            </div>
            <div class="row">
                <img src="./assets/img/home/p3.png" alt="">
            </div>
            <div class="row">
                <img src="./assets/img/home/p4.png" alt="">
            </div>
            <div class="row">
                <img src="./assets/img/home/p5.png" alt="">
            </div>
           

        </div>
    </section>
    <!-- Gallary Section End -->





    <!-- Packages Section Start -->
    <section class="packages" id="packages">
        <div class="main-txt">
            <h3>Packages</h3>
        </div>

        <div class="card-content">
            <div class="row">
                <img src="./assets/img/home/united state.png" alt="">
                <div class="card-body">
                    <h3>United States</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div class="rating">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <h5>Price $999</h5>
                    <button>Book Now</button>
                </div>
            </div>
            <div class="row">
                <img src="./assets/img/home/jordan.png" alt="">
                <div class="card-body">
                    <h3>Jordan</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div class="rating">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <h5>Price $999</h5>
                    <button>Book Now</button>
                </div>
            </div>
            <div class="row">
                <img src="./assets/img/home/china.png" alt="">
                <div class="card-body">
                    <h3>China</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div class="rating">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <h5>Price $999</h5>
                    <button>Book Now</button>
                </div>
            </div>
            <div class="row">
                <img src="./assets/img/home/Mexico.png" alt="">
                <div class="card-body">
                    <h3>Mexico</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div class="rating">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <h5>Price $999</h5>
                    <button>Book Now</button>
                </div>
            </div>
            <div class="row">
                <img src="./assets/img/home/france.png" alt="">
                <div class="card-body">
                    <h3>France</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div class="rating">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <h5>Price $999</h5>
                    <button>Book Now</button>
                </div>
            </div>
            <div class="row">
                <img src="./assets/img/home/Greece.png" alt="">
                <div class="card-body">
                    <h3>Greece</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div class="rating">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <h5>Price $999</h5>
                    <button>Book Now</button>
                </div>
            </div>
            <div class="row">
                <img src="./assets/img/home/Spain.png" alt="">
                <div class="card-body">
                    <h3>Spain</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div class="rating">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <h5>Price $999</h5>
                    <button>Book Now</button>
                </div>
            </div>
            <div class="row">
                <img src="./assets/img/home/Turkey.png" alt="">
                <div class="card-body">
                    <h3>Turkey</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div class="rating">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <h5>Price $999</h5>
                    <button>Book Now</button>
                </div>
            </div>
        </div>

    </section>
    <!-- Packages Section End -->





    <!-- Book Section Start -->
    <section class="book" id="book">
        <div class="book-img">
            <img src="./assets/img/home/book-img.png" alt="">
        </div>
        <div class="book-form">
            <h5>BOOK YOUR DESTINATION</h5>
            <form action="#">
                <input type="text" placeholder="Where To" required>
                <input type="text" placeholder="How Many" required>
                <input type="date" placeholder="Arrivals" required>
                <input type="date" placeholder="Leaving" required>
                <textarea name="" id="" cols="5" rows="5" placeholder="Enter Your Name & Details"></textarea>
                <input type="submit" value="Book Now" class="submit" required>
            </form>
        </div>
    </section>
    <!-- Book Section End -->




    <!-- Section Reviews Start -->
    <section class="reviews" id="reviews">
        <div class="main-txt">
            <h3>What Custommers Say</h3>
        </div>
        <div class="card-content">
            <div class="row">
                <h5><img src="./assets/img/home/pic-1.png" alt="">Elon Musk</h5>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam a earum commodi exercitationem explicabo amet repudiandae nemo nesciunt beatae omnis.</p>

            </div>
            <div class="row">
                <h5><img src="./assets/img/home/pic-2.png" alt="">Elon Musk</h5>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam a earum commodi exercitationem explicabo amet repudiandae nemo nesciunt beatae omnis.</p>

            </div>
            <div class="row">
                <h5><img src="./assets/img/home/pic-3.png" alt="">Elon Musk</h5>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam a earum commodi exercitationem explicabo amet repudiandae nemo nesciunt beatae omnis.</p>

            </div>
        </div>
    </section>
    <!-- Section Reviews End -->




    <!-- Contact Section Start -->
    <section class="contact" id="contact">
        <div class="contact-text">
            <h2>Get In <span>Touch</span></h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe eius possimus nostrum in assumenda aliquam?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, accusantium.</p>
            <div class="list">
                <li><a href="#">+9200000000000000</a></li>
                <li><a href="#">example@gmail.com</a></li>
                <li><a href="#">Pakistan Sindh Karachi</a></li>
            </div>
        </div>

        <div class="contact-form">
            <form action="#">
                <input type="text" placeholder="Name" required>
                <input type="number" placeholder="Phone" required>
                <input type="email" placeholder="Email" required>
                <textarea name="" id="" cols="35" rows="10" placeholder="Message" required></textarea>
                <input type="submit" value="Send" class="submit" required>
            </form>
        </div>

    </section>
    <!-- Contact Section End -->





    <footer id="footer">
        <div class="footer-content">
            <div class="row" id="row1">
                <a href="#" id="footer-logo">Travel Agency</a>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis ratione voluptatem asperiores minima quidem quibusdam tenetur eligendi eaque incidunt. Laudantium?</p>
                <div class="socail-links">
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-pinterest-p"></i>
                </div>
            </div>
            <div class="row" id="row2">
                <h3>UseFull Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Packages</a></li>
                    <li><a href="#">Book</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </div>
            <div class="row" id="row3">
                <h3>Other Links</h3>
                <ul>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">App Design</a></li>
                    <li><a href="#">Game Design</a></li>
                    <li><a href="#">Term & Condition</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="row" id="row4">
                <h3>Download App</h3>
                <img src="./assets/img/home/app.png" alt="">
            </div>
        </div>
    </footer>
