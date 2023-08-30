@extends('user.profile1.theme16.layout')   
@section('tab-title')
{{$keywords["Home"] ?? "Home"}}
@endsection

@section('meta-description', !empty($userSeo) ? $userSeo->home_meta_description : '')
@section('meta-keywords', !empty($userSeo) ? $userSeo->home_meta_keywords : '')

@section('content')     

        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
           	<div class="container box_1620">
           		<div class="banner_inner d-flex align-items-center">
					<div class="banner_content">
						<div class="media">                            
							<div class="d-flex">                                                   
								@if(isset($home_text->hero_image))                               
                                    <img src="{{asset('assets/front/img/user/home_settings/'.$home_text->hero_image)}}" class="lazy" alt="Hero Image">
                                @endif
							</div>
							<div class="media-body">
								<div class="personal_text">
									<h6>Hello Everybody, i am</h6>
									<h3>{{$home_text->first_name ?? $user->first_name}} {{$home_text->last_name ?? $user->last_name}}</h3>
                                    @php
                                    $designations = explode(",",$home_text->designation ?? "");
                                    @endphp
            
                                    @if (!empty($designations))
                                        <div class="type-string">
                                            @foreach($designations as $designation)
                                            <h4>{{$designation}}</h4>                                          
                                            @endforeach
                                        </div>
                                    @endif
									
									<p>{{$home_text->about_content ?? $user->about_content}}</p>
									<ul class="list basic_info">
										<li><a href="#"><i class="lnr lnr-calendar-full"></i> 31st December, 1992</a></li>
										<li><a href="#"><i class="lnr lnr-phone-handset"></i> 34567898909</a></li>
										<li><a href="#"><i class="lnr lnr-envelope"></i> johndoe@gmail.com</a></li>
										<li><a href="#"><i class="lnr lnr-home"></i> Santa monica </a></li>
									</ul>
									<ul class="list personal_social">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Welcome Area =================-->
        <section class="welcome_area p_120">
        	<div class="container">
        		<div class="row welcome_inner">
        			<div class="col-lg-6">
        				<div class="welcome_text">
        					<h4>{{$home_text->about_subtitle ?? 'About Me'}}</h4>
        					<p>{!! nl2br($home_text->about_content ?? "") !!}</p>
        					<div class="row">
        						<div class="col-md-4">
        							<div class="wel_item">
        								<i class="lnr lnr-database"></i>
        								<h4>$2.5M</h4>
        								<p>Total Donation</p>
        							</div>
        						</div>
        						<div class="col-md-4">
        							<div class="wel_item">
        								<i class="lnr lnr-book"></i>
        								<h4>1465</h4>
        								<p>Total Projects</p>
        							</div>
        						</div>
        						<div class="col-md-4">
        							<div class="wel_item">
        								<i class="lnr lnr-users"></i>
        								<h4>3965</h4>
        								<p>Total Volunteers</p>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
					<div class="col-lg-6">
						<div class="d-flex" style="height:350px; padding-left: 40%;">
							@if(isset($home_text->hero_image))                               
                                <img src="{{asset('assets/front/img/user/home_settings/'.$home_text->hero_image)}}" class="lazy" alt="Hero Image">
                            @endif
						</div>
        		</div>
        	</div>
        </section>

        @if(is_array($userPermissions) && in_array('Skill',$userPermissions))
		<section class="skill_item">
        	<div class="container">
        		<div class="row welcome_skill">
        			<div class="col-sm-12 col-md-12 col-lg-12">
        				<div class="tools_expert">
        					<div class="skill_main">
                                @foreach($skills as $skill)
								<div class="skill_item">
									<h4>{{$skill->title}} <span class="counter">{{$skill->percentage}}</span>%</h4>
									<div class="progress_br">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>                           							
                                @endforeach
							</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        @endif
        <!--================End Welcome Area =================-->
        
        <!--================My Tabs Area =================-->
        @if(is_array($userPermissions) && in_array('Experience',$userPermissions))
        <section class="mytabs_area p_120">
        	<div class="container">
        		<div class="tabs_inner">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">My Experiences</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">My Education</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            @if (count($job_experiences) > 0)
							<ul class="list">
                                @foreach($job_experiences as $job_experience)
								<li>
									<span></span>
									<div class="media">
										<div class="d-flex">
											<p> {{\Carbon\Carbon::parse($job_experience->start_date)->format('M j, Y')}} - 
                                                @if ($job_experience->is_continue == 0)
                                                {{ \Carbon\Carbon::parse($job_experience->end_date)->format('M j, Y') }}
                                                @else
                                                {{$keywords["Present"] ?? "Present"}}
                                                @endif</p>
										</div>
										<div class="media-body">
											<h4>{{$job_experience->company_name}}</h4>
											<p>{{$job_experience->designation}} <br /></p>
										</div>
									</div>
								</li>								
                                @endforeach
							</ul>
                            @endif
						</div>
						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            @if (count($educations) > 0)                           
							<ul class="list">
                                @foreach($educations as $education)
								<li>
									<span></span>
									<div class="media">
										<div class="d-flex">
											<p> 
                                                {{\Carbon\Carbon::parse($education->start_date)->format('M j, Y')}}
                                                -
                                                @if (!empty($education->end_date))
                                                    {{ \Carbon\Carbon::parse($education->end_date)->format('M j, Y') }}
                                                @else
                                                    {{$keywords["Present"] ?? "Present"}}
                                                @endif
                                            </p>
										</div>
										<div class="media-body">
											<h4>Colorlib</h4>
											<p>{{$education->degree_name}} <br /></p>
										</div>
									</div>
								</li>							
                                @endforeach
							</ul>
                            @endif
						</div>
					</div>
        		</div>
        	</div>
        </section>
        @endif
        <!--================End My Tabs Area =================-->
        
        <!--================Feature Area =================-->
        <section class="feature_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>offerings to my clients</h2>
        			<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
        		</div>
        		<div class="feature_inner row">
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<i class="flaticon-city"></i>
        					<h4>Architecture</h4>
        					<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $17 each.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<i class="flaticon-skyline"></i>
        					<h4>Interior Design</h4>
        					<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $17 each.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<i class="flaticon-sketch"></i>
        					<h4>Concept Design</h4>
        					<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $17 each.</p>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Feature Area =================-->
        
        <!--================Home Gallery Area =================-->
        <section class="home_gallery_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Our Latest Featured Projects</h2>
        			<p>Who are in extremely love with eco friendly system.</p>
        		</div>
        		<div class="isotope_fillter">
        			<ul class="gallery_filter list">
						<li class="active" data-filter="*"><a href="#">All</a></li>
						<li data-filter=".brand"><a href="#">Vector</a></li>
						<li data-filter=".manipul"><a href="#">Raster</a></li>
						<li data-filter=".creative"><a href="#">UI/UX</a></li>
						<li data-filter=".design"><a href="#">Printing</a></li>
					</ul>
        		</div>
        	</div>
        	<div class="container">
        		<div class="gallery_f_inner row imageGallery1">
        			<div class="col-lg-4 col-md-4 col-sm-6 brand manipul design print">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="img/gallery/project-1.jpg" alt="">
        						<a class="light" href="img/gallery/project-1.jpg"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>3D Helmet Design</h4>
        						<p>Client Project</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 brand manipul creative">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="img/gallery/project-2.jpg" alt="">
        						<a class="light" href="img/gallery/project-2.jpg"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>2D Vinyl Design</h4>
        						<p>Client Project</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 manipul creative design print">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="img/gallery/project-3.jpg" alt="">
        						<a class="light" href="img/gallery/project-3.jpg"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Creative Poster Design</h4>
        						<p>Client Project</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 brand creative print">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="img/gallery/project-4.jpg" alt="">
        						<a class="light" href="img/gallery/project-4.jpg"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Embosed Logo Design</h4>
        						<p>Client Project</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 brand manipul design">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="img/gallery/project-5.jpg" alt="">
        						<a class="light" href="img/gallery/project-5.jpg"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>3D Disposable Bottle</h4>
        						<p>Client Project</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 brand creative">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="img/gallery/project-6.jpg" alt="">
        						<a class="light" href="img/gallery/project-6.jpg"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>3D Logo Design</h4>
        						<p>Client Project</p>
        					</div>
        				</div>
        			</div>
        		</div>
        		<div class="more_btn">
        			<a class="main_btn" href="#">Load More Items</a>
        		</div>
        	</div>
        </section>
        <!--================End Home Gallery Area =================-->
        
        <!--================Testimonials Area =================-->
        <section class="testimonials_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Testimonials</h2>
        			<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
        		</div>
        		<div class="testi_inner">
					<div class="testi_slider owl-carousel">
						<div class="item">
							<div class="testi_item">
								<p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face</p>
								<h4>Fanny Spencer</h4>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star-half-o"></i></a>
							</div>
						</div>
						<div class="item">
							<div class="testi_item">
								<p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face</p>
								<h4>Fanny Spencer</h4>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star-half-o"></i></a>
							</div>
						</div>
						<div class="item">
							<div class="testi_item">
								<p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face</p>
								<h4>Fanny Spencer</h4>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star-half-o"></i></a>
							</div>
						</div>
					</div>
        		</div>
        	</div>
        </section>
        <!--================End Testimonials Area =================-->
 @endsection