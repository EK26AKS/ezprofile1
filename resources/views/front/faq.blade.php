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

    <!--====== Start faqs-section ======-->
    <section class="faqs-section pb-80">
        <div class="container px-5">
            <div class="row">

                <div class="col-lg-12">
                    @foreach($faqs->reverse() as $key => $faq)
                    <div class="faq-wrapper mb-40">
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
