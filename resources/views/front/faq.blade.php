@extends('front.layout')

@section('pagename')
- {{__('FAQs')}}
@endsection

@section('meta-description', !empty($seo) ? $seo->faqs_meta_description : '')
@section('meta-keywords', !empty($seo) ? $seo->faqs_meta_keywords : '')

@section('breadcrumb-title')
{{__('FAQs')}}
@endsection
@section('breadcrumb-link')
    {{__('FAQs')}}
@endsection

@section('content')

<style>
    .multibackground {
        background-image: url(assets/front/img/c1.png);
        background-position: left top;
        background-repeat: no-repeat, repeat;
        /* padding: 75px; */
    }
</style>


<style>
    .cdr {
        width: 100vw;
        overflow-x: hidden;
        min-height: 100vh;
      }

      .cdr::before {
        content: '';
        display: block;
      background-image: url("https://res.cloudinary.com/dxij3wtkk/image/upload/v1553832056/portfolio/scream.jpg"), url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 200 200"><g><rect width="120" height="114" transform="rotate(6)" fill="%23DA4167" /></g></svg>');
        background-blend-mode: darken;
        background-size: 24vw, 80%;
        background-position: bottom 5vw left -2vw, bottom -26vw left -20vw;
        background-repeat: no-repeat;
        width: 100vw;
        margin-left: -7vw;
        transform: rotate(7deg);
        height: 115vh;
        overflow: visible;
      }

      .cdr::after {
        content: '';
        display: block;
      background-image: url("https://res.cloudinary.com/dxij3wtkk/image/upload/v1553832055/portfolio/scream2.jpg"), url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 200 200"><g><rect width="120" height="114" transform="rotate(-4)" fill="%23DA4167" /></g></svg>');
        background-blend-mode: darken;
        background-size: 24vw, 80%;
        background-position: bottom 11vw left 15vw, bottom -26vw left 10vw;
        background-repeat: no-repeat;
        width: 100vw;

        transform: rotate(-9deg);
        height: 115vh;
        overflow: visible;
        margin-left: 63vw;
        margin-top: -160vh;
      }
    </style>
    <!--====== Start faqs-section ======-->
    <section class="faqs-section pb-80 wrapper img-responsive" id="" style="background: url('{{asset('assets/front/img/pricing.png')}}'); background-repeat: no-repeat; background-size: cover;">
    {{-- <section class="faqs-section pb-80 wrapper img-responsive"> --}}


        {{-- <div class="cdr"></div> --}}

        <div class="container px-5 ">
            <div class="row">
                <div class="col-lg-12">
                    @foreach($faqs->reverse() as $key => $faq)
                    <div class="faq-wrapper mb-10">
                        <div class="accordion ezprofile-accordion" id="accordionExample">
                              @if($key == 0)
                                    <div class="card">
                                        <a class="collapsed card-header" id="heading{{$key}}" href="#" data-toggle="collapse" data-target="#collapse{{$key}}" aria-expanded="false" aria-controls="collapse{{$key}}">{{$faq->question}}<span class="toggle_btn"></span>
                                        </a>
                                        <div id="collapse{{$key}}" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>{{$faq->answer}}</p>
                                            </div>
                                        </div>
                                    </div>
                                  @else
                                  <div class="card">
                                      <a class="collapsed card-header" id="heading{{$key}}" href="#" data-toggle="collapse" data-target="#collapse{{$key}}" aria-expanded="false" aria-controls="collapse{{$key}}">{{$faq->question}}<span class="toggle_btn"></span>
                                      </a>
                                      <div id="collapse{{$key}}" class="collapse" data-parent="#accordionExample">
                                          <div class="card-body">
                                              <p>{{$faq->answer}}</p>
                                          </div>
                                      </div>
                                  </div>
                                @endif

                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section><!--====== End faqs-section ======-->
@endsection
