@extends('user.profile1.theme12.layout.layout')

@section('content')

<section id="header">
<div class="header-left-box"></div>
<div class="header-right-box">

      <div class="logo-div">
      <img src="{{URL::asset( 'assets/images/Isolation_Mode (1).svg' )}}"  />
      </div>

      <div class="header-content">
        <p class="header-content-sub">Hi I'm<h3>
        <p class="header-content-name">Kanishka<h1>
        <p class="header-content-sub">I am Sr. Graphic Designer<h3>
          <button class="main-btn btn">HIRE ME </button>
      </div>


        <div class="header-image-box" > 
        </div>
      
        <img class="header-icon" src="{{URL::asset( 'assets/images/subway_menu.svg' )}}" alt="profile Pic" >
        <div class="header-image">
        <img src="{{URL::asset( 'assets/images/Rectangle 63.png' )}}"  />
        </div>

   


</div>
</section>
<section class="section-gap" id="about">
<div class="row" id="row">
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7" class="about-left-box-1" >
      <div class="about-content">
  <p class="about-content-sub">Lets Talk About Me</p>
  <p class="about-content-name">About Me</p>
  <p class="about-para">I am a graphic designer who is experienced with various packaging design, logo design, wedding invitations, websites and much more. I have a very broad range of style that can cater to any need or preference.<br/><br/> More than four years of experience in developing Graphic designs, UI designs and marketing creatives.<p>
      
</div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5" class="about-right-box-1" >
    <div class="about-right-box-11"><img src="{{URL::asset( 'assets/images/Rectangle 65.png' )}}"  />
      <div class="about-orange-box"></div>
      <div class="about-black-box"></div>
    </div>
  
  </div>
</div>



<div class="row" id="row" style="margin-top:180px">
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5" style="    padding-left: 0px;"><img src="{{URL::asset( 'assets/images/Rectangle 65.png' )}}"  /></div>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7" >
        <div class="about-content-2">
              <p class="about-content-sub">Skills</p>
              <p class="about-content-name">Skills</p>
              <p class="about-para">Logos, Invitations , Social Media , Graphics, Info-graphics and more<p>
                <div class="row" id="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bar-section" >
                  <p class="about-skills">illustrator</p>
                  </div>

                  
                        <div class="progress about-progress col-xs-6 col-sm-6 col-md-6 col-lg-6" >
                           <div class="progress-bar" role="progressbar" style="width: 90%; background-color:#F76976;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
           
                  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                   <p class="about-skills">&nbsp 90%</p>
                  </div>
                </div>
                <div class="row" id="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bar-section" >
                  <p class="about-skills">Figma</p>
                  </div>

                  
                        <div class="progress about-progress col-xs-6 col-sm-6 col-md-6 col-lg-6" >
                           <div class="progress-bar" role="progressbar" style="width: 100%; background-color:#F78D44;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
           
                  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                   <p class="about-skills">&nbsp 100%</p>
                  </div>
                </div>
                <div class="row" id="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bar-section" >
                  <p class="about-skills">Photoshop</p>
                  </div>

                  
                        <div class="progress about-progress col-xs-6 col-sm-6 col-md-6 col-lg-6" >
                           <div class="progress-bar" role="progressbar" style="width: 100%; background-color:#6578F7;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
           
                  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                   <p class="about-skills">&nbsp 100%</p>
                  </div>
                </div>
             
        </div>
          
  </div>
</div>
</section>

<section class="section-gap section-dark" id="services">
<div class="row" id="row" style="display:grid">
                <div class="col-sm-3 col-md-3 col-lg-3 services-row-1">
                <p class="para" style="color:#F26457">Services</p>
                    <p class="section-head" style="color:white">Services</p>
                </div>

 </div>

 <div class="grid-container">
    <div class="grid-item  ">
        <div class="service-image">
        <img src="{{URL::asset( 'assets/images/s1 2.png')}}" height= "230px" />
        </div>
       <div class="service-head"> 
        <p class="service-heading">Social Media Creatives</p>
       </div>
       <div class="service-head"> 
        <ul>
          <li class="service-li">social media creatives</li>
          <li class="service-li">social media creatives</li>
        </ul>
       </div>

       <div class="service-arrow">
       <img src="{{URL::asset( 'assets/images/Group 196.svg' )}}"  />
       </div>

    </div>

    <div class="grid-item  ">
        <div class="service-image">
        <img src="{{URL::asset( 'assets/images/s1 2.png')}}" height= "230px" />
        </div>
       <div class="service-head"> 
        <p class="service-heading">Social Media Creatives</p>
       </div>
       <div class="service-head"> 
        <ul>
          <li class="service-li">social media creatives</li>
          <li class="service-li">social media creatives</li>
        </ul>
       </div>

       <div class="service-arrow">
       <img src="{{URL::asset( 'assets/images/Group 196.svg' )}}"  />
       </div>

    </div>
    <div class="grid-item  ">
        <div class="service-image">
        <img src="{{URL::asset( 'assets/images/s1 2.png')}}" height= "230px" />
        </div>
       <div class="service-head"> 
        <p class="service-heading">Social Media Creatives</p>
       </div>
       <div class="service-head"> 
        <ul>
          <li class="service-li">social media creatives</li>
          <li class="service-li">social media creatives</li>
        </ul>
       </div>

       <div class="service-arrow">
       <img src="{{URL::asset( 'assets/images/Group 196.svg' )}}"  />
       </div>

    </div>
 </div>
</section>

<section class="section-light section-gap" id="experience">
    <div class="row" id="row" style="display:grid">
                    <div class="col-sm-3 col-md-3 col-lg-3 services-row-1">
                    <p class="para" > Experience</p>
                        <p class="section-head" >Experience</p>
                    </div>

    </div>
    <div class="grid-div-exp">
      <div class="grid-div-item">
        <div class="exp-head">
        <img src="{{URL::asset( 'assets/images/system-uicons_book-text.svg' )}}"  class="exp-image" />
        <p class="exp-para">Education</p>
        </div>
        <div class="exp-content">
          <div class="exp-sub-content">
            <p class="exp-sub-head">Bachelor of Arts</p>
            <p class="exp-sub-desc">description</p>
          </div>
          <div class="exp-sub-content">
            <p class="exp-sub-date" style="text-align:right">Jul 27, 2017 - Jun 27, 2020</p>
          </div>
        </div>
        <div class="exp-content">
          <div class="exp-sub-content">
            <p class="exp-sub-head">Bachelor of Arts</p>
            <p class="exp-sub-desc">description</p>
          </div>
          <div class="exp-sub-content">
            <p class="exp-sub-date" style="text-align:right">Jul 27, 2017 - Jun 27, 2020</p>
          </div>
        </div>
      </div>
      <div class="grid-div-item">
        <div class="exp-head">
        <img src="{{URL::asset( 'assets/images/ic_twotone-work-outline.svg' )}}"  class="exp-image" />
        <p class="exp-para">Job</p>
        </div>
        <div class="exp-content">
          <div class="exp-sub-content">
            <p class="exp-sub-head">Sr. Graphic designer <br>[Butterfly Creative Studio]</p>
            <p class="exp-sub-desc">description</p>
          </div>
          <div class="exp-sub-content">
            <p class="exp-sub-date" style="text-align:right">Jul 27, 2017 - Jun 27, 2020</p>
          </div>
        </div>
        <div class="exp-content">
          <div class="exp-sub-content">
          <p class="exp-sub-head">Sr. Graphic designer <br>[Butterfly Creative Studio]</p>
            <p class="exp-sub-desc">description</p>
          </div>
          <div class="exp-sub-content">
            <p class="exp-sub-date" style="text-align:right">Jul 27, 2017 - Jun 27, 2020</p>
          </div>
        </div>
        <div class="exp-content">
          <div class="exp-sub-content">
          <p class="exp-sub-head">Sr. Graphic designer <br>[Butterfly Creative Studio]</p>
            <p class="exp-sub-desc">description</p>
          </div>
          <div class="exp-sub-content">
            <p class="exp-sub-date" style="text-align:right">Jul 27, 2017 - Jun 27, 2020</p>
          </div>
        </div>
       



      </div>

     
    </div>

 
</section>


<section class="section-grey section-gap" id="count">
  <div class="count-grid">
    <div class="count-grid-item">
      <p class="count-head">1+</p>
      <p class="count-sub-head">
      Work on 3 projects simultaneously
      </p>
    </div>
    <div class="count-grid-item">
      <p class="count-head">1+</p>
      <p class="count-sub-head">
      Work on 3 projects simultaneously
      </p>
    </div>
    <div class="count-grid-item">
      <p class="count-head">1+</p>
      <p class="count-sub-head">
      Work on 3 projects simultaneously
      </p>
    </div>
    <div class="count-grid-item">
      <p class="count-head">1+</p>
      <p class="count-sub-head">
      Work on 3 projects simultaneously
      </p>
    </div>
  </div>
</section>

<section class="section-light section-gap" id="portfolio">
<div class="row" id="row" style="display:grid">
                    <div class="col-sm-3 col-md-3 col-lg-3 services-row-1">
                    <p class="para" > Work</p>
                        <p class="section-head" >Portfolio</p>
</div>

    </div>

    <div class="portfolio-grid">
      <div class="portfolio-grid-item">
        <div class="portfolio-tab-top">
          <p class="portfolio-tab-top-content">All</p>
        </div>
        <div class="portfolio-tab">
        <p class="portfolio-tab-top-content portfolio-tab-content">UI/UX Design</p>
        </div>
        <div class="portfolio-tab">
        <p class="portfolio-tab-top-content portfolio-tab-content">Graphic Design</p>
        </div>

      </div>
      <div class="portfolio-grid-item">
      <img src="{{URL::asset( 'assets/images/s3 1.png' )}}"  />
      </div>
      <div class="portfolio-grid-item">
      <img src="{{URL::asset( 'assets/images/s3 1.png' )}}"  />
      </div>
      <div class="portfolio-grid-item">
      <img src="{{URL::asset( 'assets/images/s3 1.png' )}}"  />
      </div>
    </div> 

<div class="row" id="row" style="display:grid">
                    <div class="col-sm-3 col-md-3 col-lg-3 services-row-1">
                    <p class="para" > testimonials</p>
                        <p class="section-head" >testimonials</p>
</div>

<div class="testimonial-grid">
  <div class="testimonial-grid-item">
    <p class="testimonial-coma">66</p>
    <p class="testimonial-para">It was a pleasure working with Margie. She did a awesome and creative graphics for digital campaign. She always exceeded our expectations, and I highly recommend her for any design project.</p>
    <div class="testimonial-grid-2">
      <div class="testimonial-grid-2-item"> <img src="{{URL::asset( 'assets/images/t1 1.png' )}}"  class="testimonial-image"/></div>
      <div class="testimonial-grid-2-item">
        <p class="testimonial-grid-2-name">Daren Hatcher </p>
        <p class="testimonial-grid-2-para">Founder</p>
      </div>
    
    </div>
  </div>
  <div class="testimonial-grid-item">
    <p class="testimonial-coma">66</p>
    <p class="testimonial-para">It was a pleasure working with Margie. She did a awesome and creative graphics for digital campaign. She always exceeded our expectations, and I highly recommend her for any design project.</p>
    
    <div class="testimonial-grid-2">
      <div class="testimonial-grid-2-item"> <img src="{{URL::asset( 'assets/images/t1 1.png' )}}"  class="testimonial-image"/></div>
      <div class="testimonial-grid-2-item">
        <p class="testimonial-grid-2-name">Daren Hatcher </p>
        <p class="testimonial-grid-2-para">Founder</p>
      </div>
    
    </div>
  </div>
  <div class="testimonial-grid-item">
    <p class="testimonial-coma">66</p>
    <p class="testimonial-para">It was a pleasure working with Margie. She did a awesome and creative graphics for digital campaign. She always exceeded our expectations, and I highly recommend her for any design project.</p>
    <div class="testimonial-grid-2">
      <div class="testimonial-grid-2-item"> <img src="{{URL::asset( 'assets/images/t1 1.png' )}}"  class="testimonial-image"/></div>
      <div class="testimonial-grid-2-item">
        <p class="testimonial-grid-2-name">Daren Hatcher </p>
        <p class="testimonial-grid-2-para">Founder</p>
      </div>
    
    </div>
  </div>
</div>

<div class="testimonial-arrow-grid">
  <div class="testimonial-arrow-grid-item">  <img src="{{URL::asset( 'assets/images/left arrow.jpeg' )}}"  /></div>
  <div class="testimonial-arrow-grid-item"><img src="{{URL::asset( 'assets/images/Group 196.svg' )}}"  /></div>
</div>
</section>

<section class="section-grey section-gap" id="Blog" style="padding-bottom:0px;!important">
  <div class="row" id="row" style="display:grid">
                      <div class="col-sm-3 col-md-3 col-lg-3 services-row-1">
                      <p class="para" > Blog</p>
                          <p class="section-head" >Blog</p>
  </div>

    <div class="blog-grid">
      <div class="blog-grid-item">
              <div class="blog-image"><img src="{{URL::asset( 'assets/images/s3 1.png' )}}"  />
              <div class="blog-black-box">
                <p >27</p>
                <p class="blog-date">June</p>
              </div>
              <div class="blog-orange-box">
                        <p class="orange-box-content">
                          New Figma Features
                        </p>
                        <div class="orange-sub-grid">
                          <div class="orange-sub-grid-item-left">by Margie </div>
                        </div>
              </div>
            </div>
      </div>
      <div class="blog-grid-item">
              <div class="blog-image"><img src="{{URL::asset( 'assets/images/s3 1.png' )}}"  />
              <div class="blog-black-box">
                <p >27</p>
                <p class="blog-date">June</p>
              </div>
              <div class="blog-orange-box">
                        <p class="orange-box-content">
                          New Figma Features
                        </p>
                        <div class="orange-sub-grid">
                          <div class="orange-sub-grid-item-left">by Margie </div>
                        </div>
              </div>
            </div>
      </div>
      <div class="blog-grid-item">
              <div class="blog-image"><img src="{{URL::asset( 'assets/images/s3 1.png' )}}"  />
              <div class="blog-black-box">
                <p >27</p>
                <p class="blog-date">June</p>
              </div>
              <div class="blog-orange-box">
                        <p class="orange-box-content">
                          New Figma Features
                        </p>
                        <div class="orange-sub-grid">
                          <div class="orange-sub-grid-item-left">by Margie </div>
                        </div>
              </div>
            </div>
      </div>
    </div>
</section>


<section class="section-light section-gap" id="Contact">
<div class="row" id="row" style="display:grid">
                      <div class="col-sm-3 col-md-3 col-lg-3 services-row-1">
                      <p class="para" > Contact</p>
                          <p class="section-head" >Contact</p>
  </div>

  <div class="contact-grid-2">
  <input type="text" class="form-control input" id="exampleFormControlInput1" placeholder="Name">
  <input type="text" class="form-control input-2" id="exampleFormControlInput1" placeholder="Name">
  <input type="text" class="form-control input-2" id="exampleFormControlInput1" placeholder="Name">
  <textarea class="form-control input" id="exampleFormControlInput1" placeholder="Name" style="    height: 165px!important;"></textarea>

  </div>

 
</section>


<!-- <section class="section-gap footer-section" id="footer">
  <div class="footer-div">

   <p class="para" style="color:white!important"> stay Connected!</p>
                          <p class="section-head" style="color:white!important">margi@ektasi.io</p>
  </div>
</section> -->





@endsection