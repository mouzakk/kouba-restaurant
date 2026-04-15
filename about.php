<?php
$pageTitle   = 'About Us - KOUBA';
$currentPage = 'about';

require 'components/head.php';
require 'components/header.php';
?>

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>About Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end-->

    <!-- about part start-->
    <section class="about_part about_bg">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-4 col-lg-5 offset-lg-1">
                    <div class="about_img">
                        <img src="img/kouba_images/2026-01-20.jpg" alt="KOUBA Restaurant">
                    </div>
                </div>
                <div class="col-sm-8 col-lg-4">
                    <div class="about_text">
                        <h5>Our Story</h5>
                        <h2>Where Lebanese Tradition Meets Modern Dining</h2>
                        <h4>Bringing the warmth of Lebanon to your table</h4>
                        <p>KOUBA was born from a passion for authentic Lebanese cuisine. Every recipe has been
                            passed down through generations, crafted with the finest ingredients sourced from
                            trusted suppliers. We are dedicated to sharing the rich culinary heritage of
                            Lebanon — from vibrant mezze spreads to slow-cooked stews and charcoal-grilled meats.</p>
                        <p>Our name, KOUBA, honours the iconic Lebanese dish that represents the soul of our
                            kitchen: simple, honest, deeply flavourful.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about part end-->

    <!-- kouba manifesto start -->
    <section class="kouba_manifesto section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 text-center">
                    <div class="kouba_quote_wrap">
                        <span class="kouba_quote_mark">&ldquo;</span>
                        <p class="kouba_quote_text">
                            From our home to yours, Kouba is a celebration of Lebanese food, cooked with respect
                            for tradition and a focus on quality. Our kitchen is led by charcoal and fire, using
                            time-honoured techniques to bring out the best in each dish. Rooted in Lebanon and
                            shaped by a journey in Manchester, Kouba is about honest food, warm hospitality and
                            flavours that feel familiar, comforting and real.
                        </p>
                        <span class="kouba_quote_attribution">— KOUBA</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .kouba_manifesto {
            background: #1a1a1a;
        }
        .kouba_quote_wrap {
            position: relative;
            padding: 20px 10px;
        }
        .kouba_quote_mark {
            display: block;
            font-family: 'Georgia', 'Times New Roman', serif;
            font-size: 7rem;
            line-height: 0.6;
            color: #c8a96e;
            margin-bottom: 10px;
            opacity: 0.8;
        }
        .kouba_quote_text {
            font-family: 'Georgia', 'Times New Roman', serif;
            font-size: 1.25rem;
            line-height: 2;
            color: #e8dcc8;
            font-style: italic;
            letter-spacing: 0.02em;
            margin-bottom: 28px;
        }
        .kouba_quote_attribution {
            display: block;
            font-family: 'Georgia', 'Times New Roman', serif;
            font-size: 0.95rem;
            letter-spacing: 0.18em;
            color: #c8a96e;
            text-transform: uppercase;
        }
    </style>
    <!-- kouba manifesto end -->

    <!--::review_part start::-->
    <section class="review_part gray_bg section_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="section_tittle">
                        <p>Testimonials</p>
                        <h2>What Our Guests Say</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-11">
                    <div class="client_review_part owl-carousel">
                        <div class="client_review_single media">
                            <div class="client_img align-self-center">
                                <img src="img/client/client_1.png" alt="">
                            </div>
                            <div class="client_review_text media-body">
                                <p>The mezze platter at KOUBA is absolutely incredible. The flavours transport you
                                    straight to Beirut. Best Lebanese restaurant I've visited outside of Lebanon!</p>
                                <h4>Sarah Mitchell, <span>Food Blogger</span></h4>
                            </div>
                        </div>
                        <div class="client_review_single media">
                            <div class="client_img align-self-center">
                                <img src="img/client/client_1.png" alt="">
                            </div>
                            <div class="client_review_text media-body">
                                <p>The kafta meshwi is perfectly seasoned and the charcoal flavour is authentic.
                                    KOUBA brings real Lebanese hospitality to every visit.</p>
                                <h4>James Thornton, <span>Regular Customer</span></h4>
                            </div>
                        </div>
                        <div class="client_review_single media">
                            <div class="client_img align-self-center">
                                <img src="img/client/client_1.png" alt="">
                            </div>
                            <div class="client_review_text media-body">
                                <p>From the warm welcome to the baklava dessert, every detail at KOUBA is
                                    thoughtfully crafted. Truly the Lebanese way!</p>
                                <h4>Leila Hassan, <span>Restaurant Critic</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::review_part end::-->

    <!--::chefs_part start::-->
    <section class="chefs_part blog_item_section section_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="section_tittle">
                        <p>Team Member</p>
                        <h2>Our Experienced Chefs</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/team/chefs_1.png" alt="Chef">
                        </div>
                        <div class="single_blog_text text-center">
                            <h3>Adam Billiard</h3>
                            <p>Head Chef</p>
                            <div class="social_icon">
                                <a href="#"><i class="ti-facebook"></i></a>
                                <a href="#"><i class="ti-twitter-alt"></i></a>
                                <a href="#"><i class="ti-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/team/chefs_2.png" alt="Chef">
                        </div>
                        <div class="single_blog_text text-center">
                            <h3>Fred Macyard</h3>
                            <p>Grill Master</p>
                            <div class="social_icon">
                                <a href="#"><i class="ti-facebook"></i></a>
                                <a href="#"><i class="ti-twitter-alt"></i></a>
                                <a href="#"><i class="ti-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/team/chefs_3.png" alt="Chef">
                        </div>
                        <div class="single_blog_text text-center">
                            <h3>Justin Stuard</h3>
                            <p>Pastry Chef</p>
                            <div class="social_icon">
                                <a href="#"><i class="ti-facebook"></i></a>
                                <a href="#"><i class="ti-twitter-alt"></i></a>
                                <a href="#"><i class="ti-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::chefs_part end::-->

<?php require 'components/footer.php'; ?>
<?php require 'components/scripts.php'; ?>
