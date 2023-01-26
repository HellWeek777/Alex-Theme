<?php
/*
Template Name: O nas
*/


 get_header();
 ?> 

        <section id="slider" class="hero p-0 odd featured">
            <div class="swiper-container no-slider slider-h-50">
                <div class="swiper-wrapper">

  
                    <div class="swiper-slide slide-center">
                        
                        <div class="slide-content row text-center">
                            <div class="col-12 mx-auto inner">
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">O nas</h1>
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                   
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="content" class="section-1 single" style="padding: 130px 0;">
            <div class="container">
                <div class="row">

                    <main class="col-12 col-lg-12 p-0">
                        <div class="row">
                            <div class="col-12 align-self-center">
                                <h2 class="featured mt-0 ml-0">Poznaj zespół </h2>
                                


                            </div>
                        </div>        
                    </main>

                    
                </div>
            </div>
        </section>

     
        <section id="about" class="section-1 highlights image-right">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 align-self-center text-center text-md-left">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <h2 class="featured alt"></h2>
                                <p></p>
                                <ul>
                                    <li style="color: #2F323A;"></li>
                                    
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="gallery col-12 col-md-6">
                        <a href="<?php echo get_template_directory_uri()."/assets/images/about-z.jpg"?>">
                            <img src="<?php echo get_template_directory_uri()."/assets/images/about-z.jpg"?>" class="fit-image" alt="O nas">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features -->
        <section id="features" class="section-2 odd offers" style="background-color: #000; padding: 70px 0;">
            <div class="container">
                <div class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card no-hover">
                            <i class="icon icon-people"></i>
                            <h4>Zespół ekspertów </h4>
                            <p>Pracujemy z pasją – wyróżniamy się wiedzą i wieloletnim doświadczeniem.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card no-hover">
                            <i class="icon icon-eye"></i>
                            <h4></h4>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card no-hover">
                            <i class="icon icon-bulb"></i>
                            <h4> </h4>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="video" class="section-3 highlights image-center">
            <div class="container smaller">
                <div class="row text-center intro">
                    <div class="col-12">
    

                        <h2 style="text-align: left;">Jak przebiega współpraca z ?</h2>
                        <p></p>
                        

<a href="/kontakt" class="btn mx-auto ml-md-auto primary-button">Skontaktuj się z nami i ustalmy szczegóły naszej współpracy!</a>
</p>
                    </div>
                </div>
                <div class="row text-center hidevideo">
                    <div class="col-12 gallery">
                        <a href="" class="square-image d-flex justify-content-center align-items-center">
                            <i class="icon bigger icon-control-play"></i>
                            <img src="<?php echo get_template_directory_uri()."/assets/images/news-4.jpg"?>" class="fit-image" alt="Fit Image">
                        </a>
                    </div>
                </div>
            </div>
        </section>




 <?php 
 get_footer(); 
 ?>