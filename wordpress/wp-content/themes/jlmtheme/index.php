<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Jesus Love Ministry</title>

        <!-- Bootstrap Core CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="wp-content/themes/jlmtheme/css/main.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="wp-content/themes/jlmtheme/js/map.js"></script>

    </head>

    <body>
        <!-- Navigation -->
        <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
                <li class="sidebar-brand">
                    <a href="#top" onclick=$("#menu-close").click();>JESUS LOVE MINISTRY</a>
                </li>
                <li>
                    <a href="#top" onclick=$("#menu-close").click();>Home</a>
                </li>
                <li>
                    <a href="#about" onclick=$("#menu-close").click();>About</a>
                </li>
                <li>
                    <a href="#services" onclick=$("#menu-close").click();>Connect</a>
                </li>
                <li>
                    <a href="#list" onclick=$("#menu-close").click();>Events</a>
                </li>
                <li>
                    <a href="#contact" onclick=$("#menu-close").click();>Contact</a>
                </li>
            </ul>
        </nav>

        <!-- Header -->
        <header id="top" class="header">
            <div class="text-vertical-center">
                <h1>Jesus Love Ministry</h1>
                <h3><?php echo get_theme_mod('jlm-home-callout-headline'); ?></h3><p>
                    <br>
                    <a href="#about" class="btn btn-dark btn-lg">Find Out More</a>
            </div>
        </header>

        <!-- About -->
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Who We Are?</h2>
                        <hr class="small">
                        <p><?php echo get_theme_mod('jlm-about-callout-headline'); ?></p>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>

        <!-- Services -->
        <section id="services" class="services bg-primary">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-10 col-lg-offset-1">
                        <h2>GROUPS</h2>
                        <hr class="small">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-users fa-stack-1x text-primary"></i>

                                    </span>
                                    <h4>
                                        <strong>Group: 1,  1-8 ages</strong>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle fa-stack-2x"></i>

                                        <i class="fa fa-users fa-stack-1x text-primary"></i>

                                    </span>
                                    <h4>
                                        <strong>Group: 2,  9-13 ages</strong>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-users fa-stack-1x text-primary"></i>

                                    </span>
                                    <h4>
                                        <strong>Group: 3, 10-21 ages</strong>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-users fa-stack-1x text-primary"></i>
                                    </span>
                                    <h4>
                                        <strong>Group: 4, Elders 22+ ages</strong>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <!-- Photo Gallery -->
        <section id="list" class="list">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 text-center">
                        <h2>PHOTO GALLERY</h2>
                        <hr class="small">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="list-item">
                                    <img class="img-list img-responsive" src="wp-content/themes/jlmtheme/img/1.jpg">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="list-item">
                                    <img class="img-list img-responsive" src="wp-content/themes/jlmtheme/img/2.jpg">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="list-item">
                                    <img class="img-list img-responsive" src="wp-content/themes/jlmtheme/img/3.jpg">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="list-item">
                                    <img class="img-list img-responsive" src="wp-content/themes/jlmtheme/img/4.jpg">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="list-item">
                                    <img class="img-list img-responsive" src="wp-content/themes/jlmtheme/img/5.jpg">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="list-item">
                                    <img class="img-list img-responsive" src="wp-content/themes/jlmtheme/img/6.jpg">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Callout -->
        <aside class="callout">
            <div class="text-vertical-center">
                <h1>Word of today | Ephesians 4:2</h1>
                <h3><?php echo get_theme_mod('jlm-word-callout-headline'); ?></p></h3>
            </div>
        </aside>

        <!-- Events -->
        <section id="list" class="list">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 text-center">

                        <h2>EVENTS</h2>
                        <hr class="small">
                        <?php
                        $args = array('post_type' => 'event', 'posts_per_page' => 3);
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) : $loop->the_post();
                            echo '<h2></h2>';
                            the_title();
                            echo '<div class="entry-content">';
                            the_content();
                            ?>
                            <img class="img-list img-responsive" src="<?php the_post_thumbnail(); ?>">
                            <?php
                            echo '</div>';
                        endwhile;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <h2>PLEASE ENTER DETAILS</h2>
                    <hr class="small">
                    <div class="row">

                        <p>Want to get in touch with us? We will try to get back to you within 24 hours!</p>
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Phone Number</label>
                                    <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Message</label>
                                    <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-default">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <hr>

            <!-- Map -->
            <div id="map" style="height:400px;width:100%;"></div>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCT350_4yJ4q46pKjcf9FR8ZLKE2mmIE_g&callback=initMap"></script>
        </div>

    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Jesus Love Ministry</strong>
                    </h4>
                    <p>4321 Ministry Street
                        <br>Christchurch, NZ</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (123) 456-7890</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:jesusloveministry@yahoo.com">jesusloveministry@yahoo.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-plus fa-fw fa-3x"></i></a>
                        </li> 
                    </ul>
                    <p class="text-muted"> &copy; 2017 Jesus Love Ministry. All rights reserved. Designed by Jemarve Endrina</p>

                </div>
            </div>
        </div>
        <hr class="small">
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>

    <!-- jQuery -->
    <script src="wp-content/themes/jlmtheme/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="wp-content/themes/jlmtheme/js/jlm.js"></script>
    <script type="text/javascript" src="wp-content/themes/jlmtheme/js/contact_me.js"></script>
    <script type="text/javascript" src="wp-content/themes/jlmtheme/js/jqBootstrapValidation.js"></script>
</body>

</html>