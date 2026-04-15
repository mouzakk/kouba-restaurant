<?php
$pageTitle   = 'KOUBA - The Lebanese Way';
$currentPage = 'home';

require 'components/head.php';
require 'components/header.php';
?>

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>The Lebanese Way</h5>
                            <h1>Authentic Lebanese Flavours, Straight From The Heart</h1>
                            <p>From smoky charcoal grills to vibrant mezze platters, every dish at KOUBA is a
                                celebration of Lebanon's rich culinary heritage.</p>
                            <div class="banner_btn">
                                <div class="banner_btn_iner">
                                    <a href="menu.php" class="btn_2">Explore Menu <img src="img/icon/left_1.svg" alt=""></a>
                                </div>
                                <a href="https://www.youtube.com/watch?v=pBFQdxA-apI"
                                    class="popup-youtube video_popup">
                                    <span><img src="img/icon/play.svg" alt=""></span> Watch our story
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part end-->

    <!--::exclusive_item_part start::-->
    <section class="exclusive_item_part blog_item_section">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="section_tittle">
                        <p>Popular Dishes</p>
                        <h2>Our Signature Items</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/kouba_images/3.jpg" alt="Mezze Platter">
                        </div>
                        <div class="single_blog_text">
                            <h3>Mezze Platter</h3>
                            <p>A generous spread of hummus, moutabal, baba ghanoush, vine leaves and fresh salads.</p>
                            <a href="menu.php" class="btn_3">View Menu <img src="img/icon/left_2.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/kouba_images/4.jpg" alt="Kafta Meshwi">
                        </div>
                        <div class="single_blog_text">
                            <h3>Kafta Meshwi</h3>
                            <p>Charcoal-grilled Lebanese kafta skewers seasoned with fresh herbs and spices.</p>
                            <a href="menu.php" class="btn_3">View Menu <img src="img/icon/left_2.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/kouba_images/5.jpg" alt="Baklava">
                        </div>
                        <div class="single_blog_text">
                            <h3>Baklava & Ice Cream</h3>
                            <p>Crispy layers of filo pastry filled with nuts and honey, served with ice cream.</p>
                            <a href="menu.php" class="btn_3">View Menu <img src="img/icon/left_2.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::exclusive_item_part end::-->

    <!-- about part start-->
    <section class="about_part">
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
                            passed down through generations, crafted with the finest ingredients and served with
                            genuine Lebanese hospitality.</p>
                        <a href="about.php" class="btn_3">Read More <img src="img/icon/left_2.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about part end-->

    <!-- intro_video_bg start-->
    <section class="intro_video_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro_video_iner text-center">
                        <h2>Taste The Lebanese Way</h2>
                        <div class="intro_video_icon">
                            <a id="play-video_1" class="video-play-button popup-youtube"
                                href="https://www.youtube.com/watch?v=pBFQdxA-apI">
                                <span class="ti-control-play"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- intro_video_bg end-->

    <!-- food_menu start-->
    <section class="food_menu gray_bg">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="section_tittle">
                        <p>Popular Menu</p>
                        <h2>Delicious Lebanese Menu</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="nav nav-tabs food_menu_nav" id="myTab" role="tablist">
                        <a class="active" id="Starters-tab" data-toggle="tab" href="#Starters" role="tab"
                            aria-controls="Starters" aria-selected="true">Starters <img src="img/icon/play.svg" alt=""></a>
                        <a id="Mezzes-tab" data-toggle="tab" href="#Mezzes" role="tab"
                            aria-controls="Mezzes" aria-selected="false">Mezzes <img src="img/icon/play.svg" alt=""></a>
                        <a id="Grills-tab" data-toggle="tab" href="#Grills" role="tab"
                            aria-controls="Grills" aria-selected="false">Grills <img src="img/icon/play.svg" alt=""></a>
                        <a id="Mains-tab" data-toggle="tab" href="#Mains" role="tab"
                            aria-controls="Mains" aria-selected="false">Mains <img src="img/icon/play.svg" alt=""></a>
                        <a id="Desserts-tab" data-toggle="tab" href="#Desserts" role="tab"
                            aria-controls="Desserts" aria-selected="false">Desserts <img src="img/icon/play.svg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="tab-content" id="myTabContent">

                        <!-- Starters -->
                        <div class="tab-pane fade show active single-member" id="Starters" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_1.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Lentil Soup</h3>
                                            <p>Traditional Lebanese lentil soup with lemon and cumin</p>
                                        </div>
                                    </div>
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_2.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Falafel</h3>
                                            <p>Crispy fried chickpea fritters with tahini dip</p>
                                        </div>
                                    </div>
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_3.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Batata Harra</h3>
                                            <p>Spicy fried potatoes with coriander and chilli</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_4.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Kibbeh</h3>
                                            <p>Fried bulgur wheat shells stuffed with spiced minced lamb</p>
                                        </div>
                                    </div>
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_5.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Chicken Wings</h3>
                                            <p>Marinated Lebanese-style grilled chicken wings</p>
                                        </div>
                                    </div>
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_6.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Merguez Sausages</h3>
                                            <p>Spiced lamb sausages grilled over charcoal</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mezzes -->
                        <div class="tab-pane fade single-member" id="Mezzes" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_1.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Hummus</h3>
                                            <p>Classic &amp; spicy — creamy blended chickpeas with tahini and lemon</p>
                                        </div>
                                    </div>
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_2.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Moutabal</h3>
                                            <p>Smoky roasted aubergine dip with tahini</p>
                                        </div>
                                    </div>
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_3.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Baba Ghanoush</h3>
                                            <p>Roasted aubergine with pomegranate and herbs</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_4.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Muhammara</h3>
                                            <p>Roasted red pepper and walnut dip</p>
                                        </div>
                                    </div>
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_5.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Fattoush</h3>
                                            <p>Fresh Lebanese salad with toasted pita croutons</p>
                                        </div>
                                    </div>
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_6.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Tabbouleh</h3>
                                            <p>Finely chopped parsley, mint, tomato and bulgur wheat</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Grills -->
                        <div class="tab-pane fade single-member" id="Grills" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_1.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Kafta Meshwi</h3>
                                            <p>Charcoal-grilled minced lamb skewers with herbs</p>
                                        </div>
                                    </div>
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_2.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Shish Tawook</h3>
                                            <p>Marinated chicken skewers, charcoal grilled</p>
                                        </div>
                                    </div>
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_3.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Lamb Chops</h3>
                                            <p>Tender lamb chops grilled over charcoal</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_4.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Mix Grill</h3>
                                            <p>A selection of our finest grilled meats</p>
                                        </div>
                                    </div>
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_5.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Chicken Shawarma</h3>
                                            <p>Marinated chicken wrapped in warm Lebanese bread</p>
                                        </div>
                                    </div>
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_6.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Lahem Meshwi</h3>
                                            <p>Succulent marinated lamb cubes, charcoal grilled</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mains -->
                        <div class="tab-pane fade single-member" id="Mains" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_1.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Makloubeh</h3>
                                            <p>Upside-down rice dish with aubergine and spiced lamb</p>
                                        </div>
                                    </div>
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_2.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Bamieh with Lamb</h3>
                                            <p>Slow-cooked okra and lamb stew in tomato sauce</p>
                                        </div>
                                    </div>
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_3.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Sea Bass Fillet</h3>
                                            <p>Grilled sea bass with Lebanese herbs and lemon</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_4.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Tiger Prawns</h3>
                                            <p>Grilled tiger prawns with garlic and chilli butter</p>
                                        </div>
                                    </div>
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_5.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Moussaka</h3>
                                            <p>Baked aubergine with spiced minced lamb and tomato</p>
                                        </div>
                                    </div>
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_6.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Salmon Fillet</h3>
                                            <p>Pan-seared salmon with Lebanese spice crust</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Desserts -->
                        <div class="tab-pane fade single-member" id="Desserts" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_1.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Baklava & Ice Cream</h3>
                                            <p>Honey-soaked filo pastry with mixed nut filling</p>
                                        </div>
                                    </div>
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_2.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Cheesecake</h3>
                                            <p>Classic creamy cheesecake with seasonal fruit</p>
                                        </div>
                                    </div>
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_3.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Matilda Cake</h3>
                                            <p>Rich chocolate fudge cake with warm chocolate sauce</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_4.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Deansgate Tart</h3>
                                            <p>Signature caramel and almond tart</p>
                                        </div>
                                    </div>
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_5.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Croissant & Ice Cream</h3>
                                            <p>Warm butter croissant served with vanilla ice cream</p>
                                        </div>
                                    </div>
                                    <div class="single_food_item media">
                                        <img src="img/food_menu/single_food_6.png" class="mr-3" alt="">
                                        <div class="media-body align-self-center">
                                            <h3>Cookies & Ice Cream</h3>
                                            <p>Freshly baked cookies served with ice cream</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- food_menu end-->

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

<?php require 'components/footer.php'; ?>
<?php require 'components/scripts.php'; ?>
