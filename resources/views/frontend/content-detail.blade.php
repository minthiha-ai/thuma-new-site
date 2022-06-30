@extends('frontend.layout.master')

@section('content')
    		<!-- pos-rel start -->
			<section id="up" class="pos-rel bg-img-cover" style="background-image:url({{asset('front-contents/assets/bg/bg1.jpg')}})">
				<!-- bg-overlay -->
				<div class="bg-overlay-black"></div>
				<!-- pos-rel start -->
				<div class="pos-rel flex-min-height-100vh">
					<div class="padding-top-bottom-120 container small after-preloader-anim">
						<!-- title start -->
						<div class="text-center">
							<h2 class="headline-lg anim-fade">{{ $c->title }}</h2>
						</div><!-- title end -->

						<!-- description start -->
						<div class="flex-container description">
							<div class="four-columns column-50-100 padding-top-1 text-center">
								<span class="hidden-box d-inline-block">
									<span class="subhead-xxs anim-reveal">By: {{ $c->author }}</span>
								</span>
							</div>
							<div class="four-columns column-50-100 padding-top-1 text-center">
								<span class="hidden-box d-inline-block">
									<span class="subhead-xxs anim-reveal tr-delay-02">In: {{ $c->content_category->name }}</span>
								</span>
							</div>
							<div class="four-columns column-50-100 padding-top-1 text-center">
								<span class="hidden-box d-inline-block">
									<span class="subhead-xxs anim-reveal tr-delay-04">{{$c->date}}{{--\Illuminate\Support\Carbon::parse($c->created_at)->format("Y, F d")--}}</span>
								</span>
							</div>
						</div><!-- description end -->
					</div>
				</div><!-- pos-rel end -->
			</section><!-- pos-rel end -->

			<!-- post start -->
			<div id="down" class="pos-rel section-bg-light-1" data-midnight="black">
				<!-- pos-rel start -->
				<div class="pos-rel padding-top-30 padding-bottom-120">
					<!-- flex-container start -->
					<div class="container flex-container">
						<!-- post column start -->
						<div class="eight-columns column-100-100 padding-top-90">
							<!-- content-bg-light-2 start -->
							<div class="content-bg-light-2 padding-20">
								<!-- entry-content start -->
								<article>
									<h2 class="headline-xs text-color-black text-center">{{ $c->title }}</h2>
									<p class="body-text-s text-color-black margin-top-20">
                                        {{ strip_tags($c->content) }}
                                    </p>
								</article><!-- entry-content end -->
								{{-- <!-- post share start -->
								<div class="padding-top-60 text-center">
									<span class="subhead-xxs text-color-888888">Share this article:</span>
									<ul class="list list_row list_center padding-top-10 js-scrollanim">
										<li class="list__item">
											<div class="anim-fade">
                                                <div class="fb-share-button" data-href="{{url()->current()}}" data-layout="button_count" data-size="small">
                                                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">မျှဝေမယ်</a>
                                                </div>
												<a href="#" class="icon-overlay-btn black js-pointer-large">
													<i class="icon-overlay-btn__inner fab fa-instagram"></i>
												</a>
											</div>
										</li>
						
									</ul>
								</div><!-- post share end --> --}}
							</div><!-- content-bg-light-2 end -->

						</div><!-- post column end -->

						<!-- sidebar column start -->
						<aside class="four-columns column-100-100 padding-top-90">
							<!-- column-l-margin-40-999 start -->
							<div class="column-l-margin-40-999">
                                <!-- content-bg-light-2 start -->
                                <div class="padding-20 content-bg-light-2">

                                    <!-- recent posts start -->
                                    <div class="padding-bottom-30">
                                        <h4 class="subhead-m text-color-black text-center padding-bottom-30">Recent posts</h4>
                                        @foreach ($co as $o)
                                        <!-- post start -->
                                        <div class="padding-bottom-60">
                                            <a href="{{ url('/content-detail/'.$o->id) }}" class="d-block hover-box js-pointer-large js-animsition-link">
                                                <div class="hidden-box">
                                                    <img class="img-hover-scale" src="{{ asset('uploads/contents/photos/'.$o->photos) }}" alt="Post">
                                                </div>
                                                <h5 class="headline-xxxxs text-color-black margin-top-10 hover-move-right">{{ $o->title }}</h5>
                                            </a>
                                        </div><!-- post end -->
                                        @endforeach
                                        
                                    </div><!-- recent posts end -->
                                </div><!-- content-bg-light-2 end -->
								
							</div><!-- column-l-margin-40-999 end -->
						</aside><!-- sidebar column end -->
					</div><!-- flex-container end -->
				</div><!-- pos-rel end -->
			</div><!-- post end -->

@endsection