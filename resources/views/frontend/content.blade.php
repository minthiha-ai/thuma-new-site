@extends('frontend.layout.master')

@section('content')
<!-- page head start -->
<section id="up" class="lines-section pos-rel anim-lines js-parallax-bg" style="background-image:url({{asset('front-contents/assets/bg/bg1.jpg')}})">
    <!-- bg-overlay -->
    <div class="bg-overlay-black"></div>
    <!-- lines-container start -->
    <div class="lines-container pos-rel anim-lines flex-min-height-100vh">
        <!-- width-100perc start -->
        <div class="padding-top-bottom-120 width-100perc">
            <!-- title start -->
            <h2 class="headline-xxxl text-center after-preloader-anim">
                <span class="anim-text-fill" data-text="She">She</span>
                <span class="anim-text-fill tr-delay-01" data-text="Holds">Holds</span><br>
                <span class="anim-text-fill tr-delay-02" data-text="the Future">the Future</span>
            </h2><!-- title end -->
        </div><!-- width-100perc end -->
    </div><!-- lines-container end -->
</section><!-- page head end -->
    <!-- latest news start -->
			<section class="lines-section pos-rel black-lines section-bg-light-2" data-midnight="black">
				<!-- lines-container start -->
				<div class="lines-container pos-rel no-lines padding-top-bottom-120">
					<!-- container start -->
					<div class="container small">
						<!-- title start -->
						<h2 class="headline-xl text-center padding-bottom-30 js-scrollanim">
							<span class="text-color-black anim-text-fill" data-text="From">From</span>
							<span class="text-color-black anim-text-fill tr-delay-02" data-text="the">the</span>
							<span class="text-color-red anim-text-fill tr-delay-04" data-text="Blog">Blog</span>
						</h2><!-- title end -->

                        @foreach ($c as $e)
                        <!-- blog-entry start -->
						<article class="flex-container flex-align-center padding-top-30">
							<div class="four-columns column-100-100 padding-top-30">
								<a href="{{ url('/content-detail/'.$e->id) }}" class="d-block hover-box js-pointer-large js-animsition-link">
									<div class="anim-img-scale anim-img-scale_hover js-img-scale">
										<img class="anim-img-scale__inner" src="{{asset('uploads/contents/photos/'.$e->photos)}}" alt="Post">
									</div>
								</a>
							</div>
							<div class="eight-columns column-100-100 padding-top-30">
								<div class="column-l-margin-40-999 anim-fade js-scrollanim">
									<ul class="list list_row list_margin-30px">
										<li class="list__item">
											<a href="#" class="subhead-xxs text-color-888888 text-hover-to-red js-pointer-small">By: {{ $e->author }}</a>
										</li>
										<li class="list__item">
											<a href="#" class="subhead-xxs text-color-888888 text-hover-to-red js-pointer-small">In: {{ $e->content_category->name }}</a>
										</li>
										<li class="list__item">
											<a href="#" class="subhead-xxs text-color-888888 text-hover-to-red js-pointer-small">{{$e->date}}{{--\Illuminate\Support\Carbon::parse($e->created_at)->format("Y, F d")--}}</a>
										</li>
									</ul>
									<a href="{{ url('/content-detail/'.$e->id) }}" class="margin-top-bottom-30 d-block js-pointer-large js-animsition-link">
										<h6 class="headline-xxxs text-color-black">
											{{ $e->title }}
										</h6>
									</a>
									<a href="{{ url('/content-detail/'.$e->id) }}" class="skew-btn js-pointer-large js-animsition-link">
										<span class="skew-btn__box">
											<span class="skew-btn__content text-color-black">Continue reading</span>
											<span class="skew-btn__arrow black"></span>
										</span>
									</a>
								</div>
							</div>
						</article><!-- blog-entry end -->    
                        @endforeach
                        
                    </div><!-- container end -->
            </section><!-- latest news end -->
@endsection