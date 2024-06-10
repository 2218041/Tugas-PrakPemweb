<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <title>HubungiKu</title>
    <link rel="stylesheet" href="{{ asset('style/style.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>
<body>
    <section class="header">
        <nav>
            <a href="{{ url('/') }}"><img src="{{ asset('image/support.png') }}" alt="" /></a>
            <div class="nav-links" id="navLinks">
                <i class="bx bx-x" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="#services">Fitur Utama</a></li>
                    <li><a href="#about-us">Layanan yang Ditawarkan</a></li>
                    <li><a href="#about-us">Testimoni Pelanggan</a></li>
                    <li><a href="{{ url('login') }}">Login</a></li>
                    <li><a href="{{ url('register') }}">Register</a></li>
                </ul>
            </div>
            <i class="bx bx-menu" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1>HubungiKu - Pusat Hubungan Pelanggan</h1>
            <p>
                HubungiKu adalah pusat hubungan pelanggan yang menyediakan layanan
                yang ramah, responsif, dan efisien untuk memastikan kepuasan pelanggan
                Anda. Temukan solusi cepat dan mudah untuk pertanyaan Anda dan
                jadwalkan layanan yang diperlukan dengan mudah melalui platform kami.
            </p>
            <a href="" class="hero-btn">Untuk Info Lebih Lanjut</a>
        </div>
    </section>

    <!-- Our Services -->

    <section class="services" id="services">
        <h1>Fitur Utama</h1>
        <div class="row">
            <div class="course-col">
                <h3>Layanan 1</h3>
                <p>
                    Layanan dukungan 24/7. <br />
                    Layanan dukungan telepon <br />
                    Layanan email
                </p>
            </div>
            <div class="course-col">
                <h3>Layanan 2</h3>
                <p>
                    Chat langsung dengan agen. <br />
                    Chat langsung
                </p>
            </div>
            <div class="course-col">
                <h3>Layanan 3</h3>
                <p>
                    Sistem tiket untuk penanganan masalah. <br />
                    Formulir dukungan online
                </p>
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <!-- Testimonials -->

    <div class="hero">
        <h1>Testimonials</h1>
        <div class="container">
            <div class="testimonial">
                <div class="slide-row" id="slide">
                    <div class="slide-col">
                        <div class="user-text">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga,
                                dignissimos!
                            </p>
                            <h3>Anonim</h3>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <div class="user-img">
                            <img src="{{ asset('image/user1.png') }}" alt="" />
                        </div>
                    </div>
                    <!-- More testimonials... -->
                </div>
            </div>
            <div class="indicator">
                <span class="btn active"></span>
                <span class="btn"></span>
                <span class="btn"></span>
                <span class="btn"></span>
            </div>
        </div>
    </div>

    <!-- About Us + Contact -->

    <section class="about-us" id="about-us">
        <h1>About Us</h1>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi eligendi
            tempora deserunt. Vel tempora expedita maiores laudantium accusamus
            iusto, eum minus sunt! Aut magnam nemo accusamus earum impedit delectus
            quisquam?
        </p>
    </section>

    <!-- Pop Up Box -->
    <section class="new-section">
        <button class="show-modal">CONTACT US</button>
        <span class="overlay"></span>

        <div class="modal-box">
            <i class="fa-regular fa-circle-check"></i>
            <h2>Input Data</h2>
            <h3>Fill in the details below</h3>

            <form id="dataForm" action="{{ url('/submit-form') }}" method="POST">
                @csrf
                <label for="contactInfo">Contact Information:</label>
                <input type="text" id="contactInfo" name="contactInfo" required>

                <label for="customerInteraction">Customer Interaction:</label>
                <input type="text" id="customerInteraction" name="customerInteraction" required>

                <label for="satisfactionScore">Customer Satisfaction Score:</label>
                <input type="number" id="satisfactionScore" name="satisfactionScore" required>

                <label for="effortScore">Customer Effort Score:</label>
                <input type="number" id="effortScore" name="effortScore" required>

                <label for="trendAnalysis">Trend Analysis:</label>
                <input type="text" id="trendAnalysis" name="trendAnalysis" required>

                <div class="buttons">
                    <button type="button" class="close-btn">Close</button>
                    <button type="submit">Submit</button>
                </div>
            </form>
    </div>
</section>

<!-- Footer -->

<section class="footer">
    <h4>© 2024 HubungiKu. All rights reserved.</h4>
    <div class="icons">
        <i class="bx bxl-facebook"></i>
        <i class="bx bxl-instagram"></i>
        <i class="bx bxl-linkedin"></i>
    </div>
</section>

<!-- Javascript -->
<script src="{{ asset('javascript/script.js') }}"></script>
</body>
</html>
