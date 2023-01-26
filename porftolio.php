<?php
/*
Template Name: Portfolio
*/


 get_header();
 ?> 

   
        <section id="slider" class="hero p-0 odd featured">
            <div class="swiper-container no-slider slider-h-50">
                <div class="swiper-wrapper">

         
                    <div class="swiper-slide slide-center">
                        
                        <div class="slide-content row text-center">
                            <div class="col-12 mx-auto inner">
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Portfolio</h1>
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                   
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
             <!-- Czołówka -->
        <section id="portfolio" class="section-4 offers secondary">
            <div class="container">
                <div class="row intro">
                    <div class="col-12 col-md-12 align-self-center text-center text-md-left">
                        <h2 class="featured">Obraz to więcej niż słowa!</h2>
                        
                    </div>

                </div>
               
            </div>
        </section>

        <section id="portfolio-grid" class="section-2 odd showcase portfolio blog-grid filter-section featured" style="padding: 10px 0px 0px 20px;">
            <div class="overflow-holder">
                <div class="container full-grid">
                    <div class="row text-center intro">
                        <div class="col-12">
                            <h2 class="mb-0 super effect-static-text">Nasze realizacje</h2>
                        </div>
                    </div>
                    <div class="row justify-content-center text-center">
                        <div class="col-12">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn active">
                                    <input type="radio" value="all" checked class="btn-filter-item">
                                    <span onClick="window.location.reload();">Wszystkie</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" value="eventy" class="btn-filter-item">
                                    <span>Eventy</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" value="backstage" class="btn-filter-item">
                                    <span>Backstage</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" value="konferencje" class="btn-filter-item">
                                    <span>Konferencje i szkolenia</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" value="scenografia" class="btn-filter-item">
                                    <span>Scenografia eventowa</span>
                                </label>

                            </div>
                        </div>
                    </div>
                    <div class="row items filter-items">
                             <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 20,
                    'offset' => 0,
                    'order' => 'DESC',
                    'category_name' => '',
                );
                $the_query = new WP_Query( $args );
                while ( $the_query->have_posts() ) { ?>
                    <?php $the_query->the_post(); ?>
                    
                    
                        <?php    
$categories = get_the_category(get_the_ID());
        foreach ($categories as $category){ 
            $slug = $category->slug;
?>
                        <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["<?php echo $slug; ?>"]'>
                            <?php
        }
?>
                            <a href="<?php the_permalink(); ?>">
                              <div class="row card p-0 text-center">
                                <div class="">
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php the_field('zdjecie_pionowe'); ?>" alt="">
                            </a>

                                </div>
                            <a href="<?php the_permalink(); ?>">
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <h4 class="m-0"><?php the_title(); ?></h4>
                                    </div>
                                    <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                        <p></p>
                                    </div>
                                </div>
                              </div> 
                            </a>
                        </div>
                                                         <?php } ?>
                <?php wp_reset_postdata(); ?>


                        <div class="col-1 filter-sizer"></div>
                    </div>

                </div>
            </div>
        </section>

 <?php 
 get_footer(); 
 ?>