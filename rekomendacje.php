<?php
/*
Template Name: Rekomendacje
*/


 get_header();
 ?> 
   
        <section id="slider" class="hero p-0 odd featured">
            <div class="swiper-container no-slider slider-h-50">
                <div class="swiper-wrapper">

            
                    <div class="swiper-slide slide-center">
                        
                        <div class="slide-content row text-center">
                            <div class="col-12 mx-auto inner">
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Rekomendacje
                   
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="partner" class="">

                <div class="container full-grid">
                    
                    <div class="row items filter-items">

                       <div class="gallery gallery row justify-content-center items">
                                                    <?php
if( have_rows('rekomendacje') ):
                    while( have_rows('rekomendacje') ) : the_row(); ?>
<a href="<?php the_sub_field('rekomendacje1'); ?>" class="item col-12 col-sm-6 col-md-6 col-lg-6" >
<img src="<?php the_sub_field('rekomendacje1'); ?>" alt="" class="" style="float:right;" >
</a>
<a href="<?php the_sub_field('rekomendacje2'); ?>" class="item col-12 col-sm-6 col-md-6 col-lg-6">
<img src="<?php the_sub_field('rekomendacje2'); ?>" alt="" class="">
</a>

<?php 
                    endwhile;
                else :
                endif; ?>


</div>

                </div>
            </div>
        </section>

        <section id="partnermobile" class="">

                <div class="container full-grid">
                    
                    <div class="row items filter-items">

                       <div class="row justify-content-center items">
                                                    <?php
if( have_rows('rekomendacje') ):
                    while( have_rows('rekomendacje') ) : the_row(); ?>
<a href="<?php the_sub_field('rekomendacje1'); ?>" class="item col-12 col-sm-6 col-md-6 col-lg-6" >
<img src="<?php the_sub_field('rekomendacje1'); ?>" style="padding-bottom: 20px;" alt="" class="" >
</a>
<a href="<?php the_sub_field('rekomendacje2'); ?>" class="item col-12 col-sm-6 col-md-6 col-lg-6">
<img src="<?php the_sub_field('rekomendacje2'); ?>" style="padding-bottom: 20px;" alt="" class="">
</a>

<?php 
                    endwhile;
                else :
                endif; ?>


</div>

                </div>
            </div>
        </section>


        <section id="funfacts" class="section-3 odd counter funfacts featured" style="padding: 40px 0px;">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h2>Nasze liczby</h2>
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

   
 <?php 
 get_footer(); 
 ?>