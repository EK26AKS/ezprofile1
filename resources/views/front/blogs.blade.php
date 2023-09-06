@extends('front.layout')

@section('pagename')
    - {{__('Blogs')}}
@endsection

@section('meta-description', !empty($seo) ? $seo->blogs_meta_description : '')
@section('meta-keywords', !empty($seo) ? $seo->blogs_meta_keywords : '')

@section('breadcrumb-title')
    {{__('Blogs')}}
@endsection
@section('breadcrumb-link')
    {{__('Blogs')}}
@endsection

@section('content')

    <section class=" blog-page" style="background: url('{{asset('assets/front/img/pricing.png')}}'); background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" style="background-image: linear-gradient(to right, #840BA6 , #BE0B83);">
                    @includeIf('front.partials.blog-sidebar')
                </div>
                <div class="col-lg-8 pb-60">

                    @foreach($blogs as $blog)
                        <div class="row mb-3" style="background-color: rgba(100, 100, 100, 0.404); -webkit-backdrop-filter: blur(2px); margin: 10px; border: 4px solid white; border-radius: 20px;">
                            <div class="col-lg-8">
                                <div class="blog-item @if(!$loop->last) mb-40 @endif">
                                    <div class="entry-content">
                                        <div class="entry-meta pt-4">
                                            <ul>
                                                <li><span><i class="fas fa-user"></i><a
                                                    href="{{route('front.blogs', ['category'=>$blog->bcategory->id])}}">{{$blog->bcategory->name}}</a></span></li>
                                                <li>
                                                <span>
                                                    <i class="fas fa-calendar-alt"></i>
                                                    <a href="#">{{\Carbon\Carbon::parse($blog->created_at)->format("F j, Y")}}</a>
                                                </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title"><a href="{{route('front.blogdetails',['id' => $blog->id,'slug' => $blog->slug])}}">{{$blog->title}}</a></h3>
                                        <a href="{{route('front.blogdetails',['id' => $blog->id,'slug' => $blog->slug])}}" class="read-btn text-dark">{{__('Read More')}}</a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 d-flex justify-content-center" style="background: white; border-top-left-radius: 30px; border-bottom-left-radius: 30px;">
                                <a class="" href="{{route('front.blogdetails',['id' => $blog->id,'slug' => $blog->slug])}}">

                                </a>
                                <img data-src="{{asset('assets/front/img/blogs/'.$blog->main_image)}}" class="img-fluid lazy p-2" style="border-radius: 30px;"  alt="">
                            </div>
                        </div>
                    @endforeach

                    <div>
                        {{$blogs->appends(['category' => request()->input('category')])->links()}}
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--====== Start saas-blog section ======-->
    {{-- <section class="saas-blog blog-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        @foreach($blogs as $blog)
                            <div class="col-lg-12">
                                <div class="blog-item @if(!$loop->last) mb-40 @endif">
                                    <div class="entry-content pr-4">
                                        <div class="entry-meta">
                                            <ul>
                                                <li><span><i class="fas fa-user"></i><a
                                                            href="{{route('front.blogs', ['category'=>$blog->bcategory->id])}}">{{$blog->bcategory->name}}</a></span></li>
                                                <li>
                                                <span>
                                                    <i class="fas fa-calendar-alt"></i>
                                                    <a href="#">{{\Carbon\Carbon::parse($blog->created_at)->format("F j, Y")}}</a>
                                                </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title"><a href="{{route('front.blogdetails',['id' => $blog->id,'slug' => $blog->slug])}}">{{$blog->title}}</a></h3>
                                        <a href="{{route('front.blogdetails',['id' => $blog->id,'slug' => $blog->slug])}}" class="read-btn">{{__('Read More')}}</a>
                                    </div>
                                    <a class="post-img d-block" href="{{route('front.blogdetails',['id' => $blog->id,'slug' => $blog->slug])}}">
                                        <img data-src="{{asset('assets/front/img/blogs/'.$blog->main_image)}}" class="img-fluid lazy"
                                             alt="">
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div>
                        {{$blogs->appends(['category' => request()->input('category')])->links()}}
                    </div>
                </div>
                <div class="col-lg-4">
                    @includeIf('front.partials.blog-sidebar')
                </div>
            </div>
        </div>
    </section>
    <!--====== End saas-blog section ======--> --}}





@endsection
