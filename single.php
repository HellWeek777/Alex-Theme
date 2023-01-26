<?php

get_header();
?>
<?php while( have_posts() ): ?>
    <?php the_post(); ?>

        <section id="slider" class="hero p-0 odd featured">
            <div class="swiper-container no-slider slider-h-50">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide-center">
                        
                        <div class="slide-content row text-center">
                            <div class="col-12 mx-auto inner">
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text"><?php the_title() ?>
                   
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


<div class="gallery row justify-content-center items">

<?php 
$images = get_field('galeria');
$size = 'full'; 
if( $images ): ?>
    <?php foreach( $images as $image ): ?>

<a href="<?php echo esc_url($image['url']); ?>" class="item col-12 col-sm-6 col-md-6 col-lg-4">
<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
</a>

<?php endforeach; ?>
<?php endif; ?>


</div>


        

                </div>
            </div>
        </section>
       
        <section id="partnermobile" class="">

                <div class="container full-grid">
                    
                    <div class="row items filter-items">


<div class="row justify-content-center items">

<?php 
$images = get_field('galeria');
$size = 'full';
if( $images ): ?>
    <?php foreach( $images as $image ): ?>

<div class="item col-12 col-sm-6 col-md-6 col-lg-4">
<img src="<?php echo esc_url($image['url']); ?>" style="padding-bottom: 20px;" alt="<?php echo esc_attr($image['alt']); ?>" />
</div>

<?php endforeach; ?>
<?php endif; ?>


</div>


        

                </div>
            </div>
        </section>
<?php endwhile; ?> 
<?php get_footer(); ?>