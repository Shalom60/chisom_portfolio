<!DOCTYPE html>
<html lang="en">
        <?php
        $title = "Chisom Kpala's: Digital Marketer and Content Writer";
        require 'header.php';
        ?>

         <!-- Banner One Start -->
        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1,
                    "loop": true,
                    "effect": "fade",
                     "pagination": {
                        "el": "#main-slider-pagination",
                        "type": "bullets",
                        "clickable": true
                      },
                    "navigation": {
                        "nextEl": "#main-slider__swiper-button-next",
                        "prevEl": "#main-slider__swiper-button-prev"
                    },
                    "autoplay": {
                        "delay": 5000
                    }}'>

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/bkg.jpg);">
                        </div>
                        <div class="image-layer-overlay"></div>
                        <div class="main-slider-shape-1"></div>
                        <div class="main-slider-shape-2"></div>
                        <div class="main-slider-shape-3"></div>
                        <div class="main-slider-shape-4"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-slider__content" style="text-align:center;">
                                        <h1 style="text-align:center;color:white;font-size:3em;"> Hello, I am</h1>
                                        <h1 style="text-align:center;color:white;font-size:3em;"> Okpala Chisom Sheryl</h1>
                                        <a href="mailto: Sommykpalas@gmail.com" class="thm-btn" style="font-size:2em;"><span>Free consultation</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/bkg2.jpg);">
                        </div>

                        <div class="image-layer-overlay"></div>
                        <div class="main-slider-shape-1"></div>
                        <div class="main-slider-shape-2"></div>
                        <div class="main-slider-shape-3"></div>
                        <div class="main-slider-shape-4"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-slider__content" style="text-align:center;">
                                      <h1 style="text-align:center;color:white;font-size:3em;"> I am a </h1>
                                      <h1 style="text-align:center;color:white;font-size:3em;"> Digital marketer and Content writer</h1>
                                      <a href="mailto: Sommykpalas@gmail.com" class="thm-btn" style="font-size:2em;"><span>Free consultation</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- If we need navigation buttons -->
                <div class="slider-bottom-box clearfix">

                    <div class="main-slider__nav">
                        <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i
                                class="icon-right-arrow icon-left-arrow"></i>
                        </div>
                        <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i
                                class="icon-right-arrow"></i>
                        </div>
                    </div>
                    <div class="swiper-pagination" id="main-slider-pagination"></div>
                </div>
            </div>
        </section>
        <!--Banner One End-->

        <!--Welcome One Start-->
        <section class="welcome-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="welcome-one__left wow fadeInLeft" data-wow-duration="1500ms">
                            <div class="welcome-one__img-box">
                                <div class="welcome-one__img">
                                    <img src="assets/images/resources/p.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="welcome-one__right">
                            <p class="welcome-one__right-text-1">Hi, I am okpala Chisom Sheryl. A digital marketer and content writer. I am a writer who uses her knowledge and experience in the digital world to help entrepreneurs navigate their businesses through digital channels. By doing this I help them achieve their desired business future. <a class="abt_me" style="font-weight: bolder;" href="about.html">(learn more about me)</a> </p>
                             <div class="welcome-one__solutions">
                                <a href="about.html" class="welcome-one__solutions-single abt_me3"  >
                                  <div class="welcome-one__solutions-icon">
                                      <span class="icon-tick"></span>
                                  </div>
                                  <div class="welcome-one__solutions-text-box" >
                                   About Me
                                  </div>
                                </a>
                            </div>
                        </div>
                    </div>
            </div>
        </section>

        <!--Services One Start-->
        <section class="services-one" id="services">
            <div class="services-one-bg" style="background-image: url(assets/images/backgrounds/services-one-bg.jpg)">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">My service list</span>
                    <h2 class="section-title__title">What I Offer</h2>
                </div>
                   <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <!--Services One Single-->
                        <div class="services-one__single wow fadeInUp" data-wow-delay="100ms">
                            <h3 class="services-one__title"><a href="email-marketing.html">Email Marketing</a></h3>
                            <p class="services-one__text">Connect more with your audience, strengthen your relationship with your customers and boost sales through Email marketing. </p>
                            <a href="email-marketing.html" class="service-one__arrow"><span  class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Services One Single-->
                        <div class="services-one__single wow fadeInUp" data-wow-delay="100ms">
                            <h3 class="services-one__title"><a href="brand-strategy-consulting.html">Brand Consultation</a></h3>
                            <p class="services-one__text">This is for you if you are looking for ways to monetise your ideas, boost sales and change your marketing strategy.</p>
                            <a href="brand-strategy-consulting.html" class="service-one__arrow">
                            <span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Services One Single-->
                        <div class="services-one__single wow fadeInUp" data-wow-delay="100ms">
                            <h3 class="services-one__title"><a href="content_strategy.html">Content Strategy/Calendars</a></h3>
                            <p class="services-one__text">Establish a connection with your audience, determine which digital channels are the best fit for you.</p>
                            <a href="content_strategy.html" class="service-one__arrow"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12">
                        <!--Services One Single-->
                        <div class="services-one__single wow fadeInUp" data-wow-delay="100ms">
                            <h3 class="services-one__title"><a href="seo-writing.html">SEO Writing</a></h3>
                            <p class="services-one__text">Become more visible and rank higher in search engines with the use of SEO. Attract your ideal customers and use keywords to your advantage to convert your readers into leads.</p>
                            <a href="seo-writing.html" class="service-one__arrow"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Services One End-->

          <!--We Change Start-->
        <section class="we-change">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="we-change__left-faqs">
                            <div class="section-title text-left" style="text-align: center;">
                                <span class="section-title__tagline"><h5 style="color:black">Frequently asked questions</h5></span>
                                <!-- <h2 class="section-title__title">Here are answers to some of your questions.</h2> -->
                                <h2><a class="abt_me" href="mailto: Sommykpalas@gmail.com">Contact me</a> for further enquires. </h2>
                            </div>
                            <div class="we-change__faqs">
                                <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                    <div class="accrodion active">
                                        <div class="accrodion-title">
                                            <h4>WHAT IS YOUR CONTENT PROCESS LIKE?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>Start stage:  in this stage, you fill and complete a content request form. </p><p> The pitch stage: send an email after a successful call.</p><p>Work stage: In this stage, I start research on your project.</p><p>End-stage: This is where you are satisfied with my delivery.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>HOW LONG DOES IT TAKE TO COMPLETE A SERVICE?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>It depends on the exact project I am working on, some might take 2-5 days while some 2-10 days. but the max I would take on a project is 14 days.</p>
                                             </div>
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>WHAT FACTORS CONTRIBUTE TO YOUR RATES?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>My service rates are dependent on the exact service I am working on. It is usually calculated by the time I spend researching and working on your project.</p>
                                             </div>
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>WHAT EDITING SOFTWARE DO YOU USE?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>I check content for plagiarism through plagiarism detector and I also proofread and edit for grammatical accuracy through Grammarly and Hemingway Editor.</p>
                                             </div>
                                        </div>
                                    </div>
                                    <div class="accrodion last-chiled">
                                        <div class="accrodion-title">
                                            <h4>DO YOU REQUEST PAYMENT UPFRONT?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>Yes, I do. I need a 50% payment upfront before I can move forward with your project.</p>
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
        <!--We Change End-->


        <!--Testimonial One Start-->
        <section class="testimonial-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="testimonial-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Clients feedback</span>
                                <h2 class="section-title__title">Read what my clients have to say</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="testimonial-one__slider">

                            <div class="swiper-container" id="testimonials-one__thumb">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-one__img-holder">
                                            <img src="assets/images/testimonial/team-1.jpg" alt="">
                                            <div class="testimonial-one__quote">

                                            </div>
                                        </div>
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-one__img-holder">
                                            <img src="assets/images/testimonial/reviewer.jpg" alt="">
                                            <div class="testimonial-one__quote">

                                            </div>
                                        </div>
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-one__img-holder">
                                            <img src="assets/images/testimonial/review2.jpg" alt="">
                                            <div class="testimonial-one__quote">

                                            </div>
                                        </div>
                                    </div><!-- /.swiper-slide -->
                                </div><!-- /.swiper-wrapper -->
                            </div><!-- /#testimonials-one__thumb.swiper-container -->

                            <div class="testimonials-one__main-content">
                                <div class="swiper-container" id="testimonials-one__carousel">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="testimonial-one__conent-box">
                                                <p class="testimonial-one__text">It has been quite an awesome experience working with her, she's excellent at what she does.</p>
                                                <div class="testimonial-one__client-details">
                                                    <h4 class="testimonial-one__client-name">Ebuka Arinze </h4>
                                                    <span class="testimonial-one__clinet-title">CEO Muzzlab
                                                        </span>
                                                </div>
                                            </div>
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <div class="testimonial-one__conent-box">
                                                <p class="testimonial-one__text">Chisom is a cheerful person to work with, a professional content creator with excellent project delivery. I'm always
                                                happy to work with her and I'll recommend her service anytime.
                                                </p>
                                                <div class="testimonial-one__client-details">
                                                    <h4 class="testimonial-one__client-name">Arthur Offiong </h4>
                                                    <span class="testimonial-one__clinet-title">CEO Acefarming
                                                        </span>
                                                </div>
                                            </div>
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <div class="testimonial-one__conent-box">
                                                <p class="testimonial-one__text">Working with sommy was a great experience. She is friendly & social and understands the problem at hand. I would
                                                recommend her because she is interested in providing a solution to your marketing problems.</p>
                                                <div class="testimonial-one__client-details">
                                                    <h4 class="testimonial-one__client-name">Egbegi Thelma </h4>
                                                    <span class="testimonial-one__clinet-title">CEO Hair Pamper by Tee
                                                       </span>
                                                </div>
                                            </div>
                                        </div><!-- /.swiper-slide -->
                                    </div><!-- /.swiper-wrapper -->
                                    <div id="testimonials-one__carousel-pagination"></div>
                                    <!-- /#testimonials-one__carousel-pagination -->
                                </div><!-- /#testimonials-one__thumb.swiper-container -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial One End-->

        <!--Counter One Start-->
        <section class="counters-one">
            <div class="container">

                <ul class="counters-one__box list-unstyled">
                  <div class="row brand brand_class">
                      <h3 class="brand_header">Some of the brands i have worked with</h3>
                    <div class="row">

                       <div class="column">
                         <img src="assets/images/resources/brand1.png" alt="" class="brand_img">
                       </div>

                       <div class="column">
                         <img src="assets/images/resources/brand7.png" alt="" class="brand_img">
                       </div>

                       <div class="column">
                         <img src="assets/images/resources/brand3.jpg" alt="" class="brand_img">
                       </div>

                       <div class="column">
                         <img src="assets/images/resources/brand5.png" alt="" class="brand_img">
                       </div>

                       <div class="column">
                         <img src="assets/images/resources/brand6.jpg" alt="" class="brand_img">
                       </div>

                       <div class="column">
                         <img src="assets/images/resources/brand2.png" alt="" class="brand_img">
                       </div>

                       <div class="column">
                         <img src="assets/images/resources/brand4.png" alt="" class="brand_img">
                       </div>
                     </div>
                 </div>

                    <div class="row">
                        <div class="col-xl-3"></div>
                    <li class="counter-one__single wow fadeInUp" data-wow-delay="100ms">
                        <h3>30+</h3>
                        <p class="counter-one__text">Satisfied clients</p>
                    </li>

                    <li class="counter-one__single wow fadeInUp" data-wow-delay="200ms">
                        <h3>200+</h3>
                        <p class="counter-one__text">Written works</p>
                    </li>
                      <div class="col-xl-3 "></div>
                    </div>
                    <li class="counter-one__shape wow fadeInUp" data-wow-delay="500ms"></li>
                </ul>
            </div>
        </section>
        <!--Counter One End-->

        <?php
        require 'footer.php';
        ?>


</html>
