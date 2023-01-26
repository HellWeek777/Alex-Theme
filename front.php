<?php
/*
Template Name: Front
*/


 get_header();
 ?> 

        <section id="slider" class="hero p-0 odd">
            <div class="swiper-container full-slider featured animation slider-h-100" style="position: relative;">
                <div class="swiper-wrapper">

                    <div class="swiper-slide slide-center" style="background-position: center; background-size: cover; background-repeat: no-repeat; background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.7)), url('<?php the_field('slider_1'); ?>');">
                        
                        <div class="slide-content row" data-mask-768="50">
                            <div class="col-12 d-flex inner">
                                <div class="left align-self-center text-center text-md-left">
                                    <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text"><?php the_field('tytul_slider_1') ?></h1>
                                    <p style="color: #ffffff;" data-aos="zoom-out-up" data-aos-delay="800" class="description"><?php the_field('opis_slider_1') ?></p>
                                    <a href="#contact" data-aos="zoom-out-up" data-aos-delay="1200" class="smooth-anchor ml-auto mr-auto ml-md-0 mt-4 btn dark-button"><i class="icon-cup"></i>POROZMAWIAJ Z NAMI</a>
                                </div>
                            </div>
                        </div>
                    </div>
                       
                    <div class="swiper-slide slide-center" style="background-position: center; background-size: cover; background-repeat: no-repeat; background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.7)), url('<?php the_field('slider_2'); ?>');">
                        
                        <div class="slide-content row" data-mask-768="50">
                            <div class="col-12 d-flex inner">
                                <div class="left align-self-center text-center text-md-left">
                                    <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text"><?php the_field('tytul_slider_2') ?></h1>
                                    <p style="color: #ffffff;" data-aos="zoom-out-up" data-aos-delay="800" class="description"><?php the_field('opis_slider_2') ?></p>
                                    <a href="#contact" data-aos="zoom-out-up" data-aos-delay="1200" class="smooth-anchor ml-auto mr-auto ml-md-0 mt-4 btn dark-button"><i class="icon-cup"></i>POROZMAWIAJ Z NAMI</a>
                                </div>
                            </div>
                        </div>
                    </div>

               
                    <div class="swiper-slide slide-center" style="background-position: center; background-size: cover; background-repeat: no-repeat; background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.7)), url('<?php the_field('slider_3'); ?>');">
                        
                        <div class="slide-content row" data-mask-768="50">
                            <div class="col-12 d-flex inner">
                                <div class="left align-self-center text-center text-md-left">
                                    <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text"><?php the_field('tytul_slider_3') ?></h1>
                                    <p style="color: #ffffff;" data-aos="zoom-out-up" data-aos-delay="800" class="description"><?php the_field('opis_slider_3') ?></p>
                                    <a href="#contact" data-aos="zoom-out-up" data-aos-delay="1200" class="smooth-anchor ml-auto mr-auto ml-md-0 mt-4 btn dark-button"><i class="icon-cup"></i>POROZMAWIAJ Z NAMI</a>
                                </div>
                            </div>
                        </div>
                    </div>           
                    <div class="swiper-slide slide-center" style="background-position: center; background-size: cover; background-repeat: no-repeat; background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.7)), url('<?php the_field('slider_4'); ?>');">
                        
                        <div class="slide-content row" data-mask-768="50">
                            <div class="col-12 d-flex inner">
                                <div class="left align-self-center text-center text-md-left">
                                    <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text"><?php the_field('tytul_slider_4') ?></h1>
                                    <p style="color: #ffffff;" data-aos="zoom-out-up" data-aos-delay="800" class="description"><?php the_field('opis_slider_4') ?></p>
                                    <a href="#contact" data-aos="zoom-out-up" data-aos-delay="1200" class="smooth-anchor ml-auto mr-auto ml-md-0 mt-4 btn dark-button"><i class="icon-cup"></i>POROZMAWIAJ Z NAMI</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-scrollbar"></div>

            </div>
        </section>

     <!-- Czołówka -->
        <section id="portfolio" class="section-4 offers secondary" style="padding: 110px 0px 50px 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 align-self-center text-center text-md-left">
                        <h2 class="featured" style="text-align: left;"><?php the_field('tytul_wstepu') ?></h2>
                        <p style="color: #2F323A;text-align: left;"><?php the_field('akapit_1') ?></p>
                        <p style="color: #2F323A;text-align: left;"><?php the_field('akapit_2') ?></p>
                    </div>

                </div>
               
            </div>
        </section>
          
          <!-- Realizacje -->
        <section id="news" class="section-5 odd carousel showcase news" style="padding: 50px 0px 90px 0px;">
            <div class="overflow-holder">
                <div class="container">
                    <div class="row intro">
                        <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                            <h2 class="featured" style="color: #191919;">Nasze realizacje</h2>
                            <p></p>
                        </div>
                        <div class="col-12 col-md-3 align-self-end">
                            <a href="/portfolio" class="btn mx-auto mr-md-0 ml-md-auto primary-button"><i class="icon-grid"></i>ZOBACZ WSZYSTKIE</a>
                        </div>
                    </div>
                    <div class="swiper-container mid-slider items">
                    <div class="swiper-wrapper">
                             <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 9,
                    'offset' => 0,
                    'order' => 'DESC',
                    'category_name' => '',
                );
                $the_query = new WP_Query( $args );
                while ( $the_query->have_posts() ) { ?>
                    <?php $the_query->the_post(); ?>




                            <div class="swiper-slide slide-center item">

                                <div class="row card p-0 text-center">
                                    <a href="<?php the_permalink(); ?>">
                                    <div class="image-over">
                                        <img src="<?php the_field('zdjecie_pionowe'); ?>" alt="">
                                    </div>
                                    </a>
                                    <div class="card-caption col-12 p-0">
                                        <div class="card-body">
                                            <a href="<?php the_permalink(); ?>">
                                                <h4 class="m-0"><?php the_title(); ?></h4>
                                            </a>
                                        </div>
                                        <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                                     <?php } ?>
                <?php wp_reset_postdata(); ?>

                        <div class="swiper-pagination"></div>
                            
                        </div>

                    </div>
                </div>

            </div>
        </section>

      

 
        <section id="funfacts" class="section-3 odd counter funfacts featured" style="padding: 40px 0px;">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h2 style="margin: 0rem !important;">Nasze liczby</h2>
                                            </div>
                </div>
                <div data-aos-id="counter" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div data-percent="485" class="radial">
                            <span></span>
                        </div>
                        <h4>Eventów</h4>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div data-percent="11" class="radial">
                            <span></span>
                        </div>
                        <h4>Lat doświadczenia</h4>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div data-percent="115347" class="radial">
                            <span></span>
                        </div>
                        <h4>Zdjęć</h4>
                    </div>
                </div>
            </div>
        </section>

 
        <section id="partnermobile" class="section-5 odd carousel showcase news" style="padding: 70px 0px 0px 0px;">
            <div class="overflow-holder">
                <div class="container">
                    <div class="row justify-content-center">
                      <div class="row text-center">
                        <div class="col-12">
                            <h2 style="color: #000;padding-bottom: 30px;">Pracowaliśmy z</h2>
                            <p class="text-max-800"></p>
                        </div>
                    </div>

                    </div>
                    <div class="swiper-container mid-slider items">
                        <div class="swiper-wrapper">
<?php
if( have_rows('loga') ):
                    while( have_rows('loga') ) : the_row(); ?>
                            
                            <div class="swiper-slide slide-center item">
                                <img src="<?php the_sub_field('zdjecie_1'); ?>" class="fit-image w-60" alt="Logo Partnerzy">
                            </div>
                            <div class="swiper-slide slide-center item">
                                <img src="<?php the_sub_field('zdjecie_2'); ?>" class="fit-image w-60" alt="Logo Partnerzy">
                            </div>
                            <div class="swiper-slide slide-center item">
                                <img src="<?php the_sub_field('zdjecie_3'); ?>" class="fit-image w-60" alt="Logo Partnerzy">
                            </div>
                            
<?php 
                    endwhile;
                else :
                endif; ?>
                            
                        </div>

                    </div>
                </div>
            </div>
        </section>
  


        <section id="partner" class="section-5 logos featuredd right" style="padding-top: 100px;padding-bottom: 100px;">
            <div class="overflow-holder">
                <div class="container">
                     <div class="row text-center intro">
                        <div class="col-12">
                            <h2>Pracowaliśmy z</h2>
                            <p class="text-max-800"></p>
                        </div>
                    </div>

                    <div class="swiper-container min-slider">
                        <div class="swiper-wrapper">
                            <?php
if( have_rows('loga') ):
                    while( have_rows('loga') ) : the_row(); ?>
                            
                            <div class="swiper-slide slide-center item">
                                <img src="<?php the_sub_field('zdjecie_1'); ?>" class="fit-image w-60" alt="Logo Partnerzy">
                            </div>
                            <div class="swiper-slide slide-center item">
                                <img src="<?php the_sub_field('zdjecie_2'); ?>" class="fit-image w-60" alt="Logo Partnerzy">
                            </div>
                            <div class="swiper-slide slide-center item">
                                <img src="<?php the_sub_field('zdjecie_3'); ?>" class="fit-image w-60" alt="Logo Partnerzy">
                            </div>
                            
<?php 
                    endwhile;
                else :
                endif; ?>
 
                        </div>
                        <div class="swiper-pagination" style="padding-top: 25px;"></div>
                    </div>
                   
                </div>
            </div>

        </section>

       <!-- Oferta -->
        <section id="portfolio" class="section-4 offers secondary" style="padding: 50px 0px 50px 0px;">
            <div class="container">
                <div class="row intro">
                    <div class="col-12 col-md-12 align-self-center text-center text-md-left">
                        <h2 class="featured">Wykonamy dla Ciebie zdjęcia z dowolnego wydarzenia</h2>
                        <p style="color: #2F323A;"></p>
                    </div>

                </div>
                <div class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-6 item">
                        <div class="card featured">
                            <h4 style="text-align: left;">Zdjęcia z imprez firmowych</h4>
                            <p style="text-align: left;">Uchwycimy wszystkie ważne momenty: przemowę prezesa, reakcje pracowników oraz dodatkowe atrakcje! <b>Fotograf eventowy</b> odda na zdjęciach powagę części oficjalnej, a także luz i dobre samopoczucie zespołu podczas dalszej zabawy. <b>Pierwsze materiały otrzymasz już 24 godziny po wydarzeniu!</b></p>

                            <a href="https://aleksanderas.pl/upc-play/" class="btn mx-auto ml-md-auto primary-button">Sprawdź jak bawili się nasi Klienci!</a>

                        </div>
                    </div>

                                        <div class="col-12 col-md-6 col-lg-6 item">
                        <div class="card featured">
                            <h4 style="text-align: left;">Utrwalenie przebiegu konferencji</h4>
                            <p style="text-align: left;">Dla nas nie ma znaczenia, czy jest to wydarzenie tylko dla Twoich pracowników, czy też ogromny event zrzeszający tłumy. Dzięki naszemu doświadczeniu wesprzemy Cię podczas każdej konferencji. Obiecujemy nie zawracać przy tym głowy organizatorom! Wiemy przecież, że będą mieli ręce pełne roboty.</p>

                            <a href="https://aleksanderas.pl/abc/" class="btn mx-auto ml-md-auto primary-button">Zobacz nasze realizacje!</a>

                        </div>
                    </div>
                                        <div class="col-12 col-md-6 col-lg-6 item">
                        <div class="card featured">
                            <h4 style="text-align: left;">Zdjęcia z imprez integracyjnych</h4>
                            <p style="text-align: left;"><b>Fotograf eventowy</b> z AleksanderAs uchwyci wszystko, co warto zapamiętać! Otrzymasz zdjęcia z części oficjalnej, zajęć integracyjnych oraz atrakcji, które przygotowałeś dla pracowników. Jeśli zechcesz, nasz fotograf dyskretnie będzie towarzyszył Twojej firmie również wieczorem podczas after party. Zdjęcia z tej części imprezy idealnie sprawdzą się na social mediach, aby budować wizerunek Twojej firmy nie tylko jako organizacji profesjonalnej, lecz także takiej, która skupia fajnych, życzliwych sobie ludzi. Brzmi interesująco?</p>

                            <a href="https://aleksanderas.pl/portfolio/" class="btn mx-auto ml-md-auto primary-button">Zerknij do naszego portfolio!</a>

                        </div>
                    </div>
                                        <div class="col-12 col-md-6 col-lg-6 item">
                        <div class="card featured">
                            <h4 style="text-align: left;">Zdjęcia z backstage`u</h4>
                            <p style="text-align: left;">Być może zechcesz na swoich social mediach pokazać przygotowaną do wydarzenia scenografię, dekorację sali albo scenę, na której za kilka minut wystąpią znamienici goście. A może zależy Ci na uchwyceniu wchodzących na salę uczestników albo emocji prelegentów przed wystąpieniem? Nasza <b>fotografia eventowa</b> obejmuje również takie działanie. Zróbmy to razem! Pracujemy rzetelnie, dokładnie spełnimy Twoje oczekiwania, a przy tym nie marnujemy Twojego cennego czasu!</p>

                            <a href="https://aleksanderas.pl/backstage/" class="btn mx-auto ml-md-auto primary-button">Zobacz, jak to dokładnie wygląda</a>

                        </div>
                    </div>
                </div>
            </div>
        </section>

 <?php 
 get_footer(); 
 ?>