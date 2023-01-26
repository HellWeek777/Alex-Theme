
        <section id="contact" class="section-8 form">
            <div class="container">





                    <div class="row">
                        <div class="col-12 col-md-6 align-self-start text-center text-md-left">

                       
                            <div class="row">
                                <div class="col-12 p-0">
                                    <div class="step-title" style="padding-right: 20px;padding-top: 20px;">
                                        <h2 class="featured alt">Skontaktuj się z nami!</h2>
                                        <p>Nie czekaj do jutra, napisz do nas!</p>
                                        <?php echo apply_shortcodes( '[contact-form-7 id="718" title="Formularz 1"]' ); ?>
                                    </div>
                                   

                                </div>
                            </div>

                            
                        </div>

                        <div class="col-12 col-md-6" style="background-image: url(<?php echo get_template_directory_uri()."/assets/images/about-z.jpg"?>); background-size: cover; background-repeat: no-repeat;">

                            

                        </div>
                    </div>
     
            </div>
        </section>

       

        <footer class="odd">

            <section id="footer" class="footer">
                <div class="container">
                    <div class="row items footer-widget">
                        <div class="col-12 col-lg-5 p-3">
                            <div class="row">
                                <div class="branding col-12 p-3 text-center text-lg-left item">
                                    <div class="brand">
                                        <a href="<?php echo get_option("siteurl"); ?>" class="logo">
                                            <img src="<?php echo get_template_directory_uri()."/"?>" style="height:100px;">                           
 
                                    </div>
                             
                                    
                 
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 p-3">                            
                            <div class="row">
                                <div class="col-12 col-lg-6 p-3 text-center text-lg-left item">
                                    <h4 class="title">Bądź w kontakcie</h4>
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a href="" class="nav-link">
                                                <i class="icon-phone mr-2"></i>
                                          
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="mailto:" class="nav-link">
                                                <i class="icon-envelope mr-2"></i>
                                      
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="icon-location-pin mr-2"></i>

                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#contact" class="mt-4 mr-auto ml-auto ml-lg-0 btn dark-button smooth-anchor"><i class="icon-speech"></i>WYŚLIJ WIADOMOŚĆ</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-6 p-3 text-center text-lg-left item">
                                    <h4 class="title">Menu</h4>
                          <?php 
        wp_nav_menu(array(
            'theme_location' => 'main_menu',
            'menu_class' => '',
            'container' => '',
        )); ?>
                                </div>
          
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="copyright" class="p-3 copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 p-3 text-center text-lg-left">
                            <p></p>
        
                        </div>
                        <div class="col-12 col-md-6 p-3 text-center text-lg-right">
                            <p>© 2022 Project by <a href="" target="_blank">WebSail.pl</a></p>
                        </div>
                    </div>
                </div>
            </section>

        </footer>

     

        <div id="menu" class="p-0 modal fade" role="dialog" aria-labelledby="menu" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        Menu <i class="icon-close"></i>
                    </div>
                    <div class="menu modal-body">
                        <div class="row w-100">
                            <div class="items p-0 col-12 text-center">
                        
                            </div>
                            <div class="contacts p-0 col-12 text-center">
                      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
        <div id="scroll-to-top" class="scroll-to-top">
            <a href="#header" class="smooth-anchor">
                <i class="icon-arrow-up"></i>
            </a>
        </div>        
<?php wp_footer() ?>

    </body>
</html>