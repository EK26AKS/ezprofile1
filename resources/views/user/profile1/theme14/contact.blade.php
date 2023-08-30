@extends('user.profile1.theme14.layout')   
<!--================Header Menu Area =================-->

<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>CONTACT US</h2>
                <div class="page_link">
                    <a href="index.html">Home</a>
                    <a href="contact.html">CONTACT</a>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Contact Area =================-->
<section class="contact_area p_120">
    <div class="margin footer-div" style="text-align: center;line-height:1">
        <h4>LET'S CONNECT: REACH OUT TO COLLABORATE ON YOUR NEXT PROJECT
        </h4>
        <p class="footer-head">Get in Touch to Discuss Your Web Development Needs and Start Turning Ideas into Reality</p>
        </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                        </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                        </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--================Contact Area =================-->

