@extends('layout')

@section('content')
<!--==========================
  Intro Section
============================-->
<section id="intro" class="clearfix">
    <div class="container">

        <div class="intro-img">
            <img src="img/intro-img.svg" alt="" class="img-fluid">
        </div>

        <div class="intro-info">
            <h2>We provide<br><span>talented ENGINEERS</span><br>for your work!</h2>
            <div>
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
                <a href="#services" class="btn-services scrollto">Our Services</a>
            </div>
        </div>

    </div>
</section><!-- #intro -->

<main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3>About Us</h3>
                <p>Our community of expert freelancers gives you the power
                    to find the right person for any project in minutes.</p>
            </header>

            <div class="row about-container">

                <div class="col-lg-6 content order-lg-1 order-2">
                    <p>
                        When you've got a project in mind, post it. It's programmed to ask all the right questions to help you get your project ready for publishing.

                        Our best freelance will responds with their tailored proposal within minutes.
                    </p>

                    <div class="icon-box wow fadeInUp">
                        <div class="icon"><i class="fab fa-searchengin"></i></div>
                        <h4 class="title"><a>Quick Response</a></h4>
                        <p class="description">Let freelancers discover you Post projects quickly,
                            receive responses
                            even quicker.</p>
                    </div>

                    <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon"><i class="fas fa-dollar-sign"></i></div>
                        <h4 class="title"><a>Discover fixed price offers.</a></h4>
                        <p class="description">Explore fixed-price offers from a little price — Giving you the freedom to test ideas cost effectively. Once you're happy with the results, request a follow-on project.</p>
                    </div>

                    <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon"><i class="fas fa-tasks"></i></div>
                        <h4 class="title"><a>Collaborate with ease, and speed.</a></h4>
                        <p class="description">We give you a clearly marked inbox of tasks, structured threads for communication and simple, organised invoicing.</p>
                    </div>

                </div>

                <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                    <img src="img/about-img.svg" class="img-fluid" alt="">
                </div>
            </div>

        </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3>Services</h3>
                <p>We provide you two main services:</p>
            </header>

            <div>
                <div class="row about-extra">
                    <div class="col-lg-6 wow fadeInUp">
                        <img src="img/card2.png" class="img-fluid pb-5"  alt="">
                    </div>
                    <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-5 text-c">
                        <h4 class="text-center">Become a freelancer & get started on your next project</h4>
                        <ul>
                            <li>Get paid competitive rates on time</li>
                            <li>Manage your workflow around your lifestyle</li>
                            <li>Tap into a large pool of opportunities</li>
                        </ul>
                    </div>
                </div>

                <div class="row about-extra">
                    <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
                        <img src="img/card1.png" class="img-fluid pb-5" alt="">
                    </div>

                    <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-5 order-2 text-c order-lg-1">
                        <h4 class="text-center">Hire expert freelancers to bring your vision to life</h4>
                        <ul>
                            <li>Find expert talent in no time</li>
                            <li>Get high quality work at competitive rates</li>
                            <li>Boost your brand above the competition</li>
                        </ul>
                    </div>

                </div>
            </div>
    </section><!-- #services -->

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
        <div class="container">
            <header class="section-header">
                <h3>Why choose us?</h3>
                <p>Three reasons to work with Virtual Office</p>
            </header>

            <div class="row row-eq-height justify-content-center">

                <div class="col-lg-4 mb-4">
                    <div class="card wow bounceInUp">
                        <i class="far fa-clock"></i>
                        <div class="card-body">
                            <h5 class="card-title">Flexibility</h5>
                            <p class="card-text">Work remotely & control your working hours.</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card wow bounceInUp">
                        <i class="fas fa-globe-asia"></i>
                        <div class="card-body">
                            <h5 class="card-title">Access to Opportunity</h5>
                            <p class="card-text">Work with great companies around the world.</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card wow bounceInUp">
                        <i class="far fa-credit-card"></i>
                        <div class="card-body">
                            <h5 class="card-title">Seamless payments</h5>
                            <p class="card-text">Get paid securely & and avoid a hassle in collecting payments from clients.</p>

                        </div>
                    </div>
                </div>

            </div>

            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">274</span>
                    <p>Clients</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">421</span>
                    <p>Projects</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">1,364</span>
                    <p>Hours Of Support</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">61</span>
                    <p>Hard Workers</p>
                </div>

            </div>

        </div>
    </section>

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="clearfix">
        <div class="container">

            <header class="section-header">
                <h3 class="section-title">Our Portfolio</h3>
            </header>

            <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">Architecture</li>
                        <li data-filter=".filter-card">Civil</li>
                        <li data-filter=".filter-web">Landscaping</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/arch1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><a href="#">Architecture 1</a></h4>
                            <p>Architecture</p>
                            <div>
                                <a href="img/portfolio/arch1.jpg" data-lightbox="portfolio" data-title="Architecture 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/lan3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><a href="#">Landscape 3</a></h4>
                            <p>Landscape</p>
                            <div>
                                <a href="img/portfolio/lan3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Landscape 3" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/arch2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><a href="#">Architecture 2</a></h4>
                            <p>Architecture</p>
                            <div>
                                <a href="img/portfolio/arch2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Architecture 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/civ2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><a href="#">Civil 2</a></h4>
                            <p>Civil</p>
                            <div>
                                <a href="img/portfolio/civ2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Civil 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/lan2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><a href="#">Landscape 2</a></h4>
                            <p>Landscape</p>
                            <div>
                                <a href="img/portfolio/lan2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Landscape 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/arch3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><a href="#">Architecture 3</a></h4>
                            <p>Architecture</p>
                            <div>
                                <a href="img/portfolio/arch3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Architecture 3" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/civ1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><a href="#">Civil 1</a></h4>
                            <p>Civil</p>
                            <div>
                                <a href="img/portfolio/civ1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Civil 1" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/civ3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><a href="#">Civil 3</a></h4>
                            <p>Civil</p>
                            <div>
                                <a href="img/portfolio/civ3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Civil 3" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/lan1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><a href="#">Landscape 1</a></h4>
                            <p>Landscape</p>
                            <div>
                                <a href="img/portfolio/lan1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Landscape 1" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #portfolio -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg">
        <div class="container-fluid">

            <div class="section-header">
                <h3>Contact Us</h3>
            </div>

            <div class="row wow fadeInUp">

                <div class="col-lg-6">
                    <div class="map mb-4 mb-lg-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3384.6622549367594!2d35.90707371464266!3d31.970058231998408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca12ce1b9c62b%3A0x21b9b701f3f4ee86!2sOrange%20Coding%20Academy!5e0!3m2!1sen!2sjo!4v1580122404241!5m2!1sen!2sjo" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-5 info">
                            <i class="ion-ios-location-outline"></i>
                            <p>King hussein Street</p>
                        </div>
                        <div class="col-md-4 info">
                            <i class="ion-ios-email-outline"></i>
                            <p>info@example.com</p>
                        </div>
                        <div class="col-md-3 info">
                            <i class="ion-ios-telephone-outline"></i>
                            <p>+123456789</p>
                        </div>
                    </div>

                    <div class="form2">
                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #contact -->

</main>

    @endsection
