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
			<!-- about start -->
			<section id="down" class="lines-section pos-rel black-lines section-bg-light-2" data-midnight="black">
				<!-- flex-container start -->
				<div class="flex-container lines-container pos-rel black-lines padding-top-30 padding-bottom-120">
					<!-- column start -->
					<div class="four-columns column-100-100 padding-top-90">
						<div class="line-col-l-r-margin-20">
							<!-- title start -->
							<h2 class="headline-s js-scrollanim">
								<span class="anim-text-fill text-color-black" data-text="Thuma">Thuma</span>
								<span class="anim-text-fill text-color-black tr-delay-01" data-text="Stands">Stands</span><br>
								<span class="anim-text-fill text-color-red tr-delay-02" data-text="For">For</span>
								<span class="anim-text-fill text-color-red tr-delay-03" data-text="Every Woman">Every Woman</span>
							</h2><!-- title end -->
							<p class="body-text-s text-color-black margin-top-20 anim-text-reveal tr-delay-08 js-scrollanim">“သူမ” is a women organization which derives from 2nd ASEAN Youth Social Journalism contest.It mainly focuses on skills and abilities of women who are having predicaments in their professional and educational fields.</p>
							<!-- list start -->
							<ul class="list text-color-6d6d6d margin-top-30 js-scrollanim">
								<li class="list__item red dot hidden-box">
									<div class="subhead-xxs anim-slide">Attaining Equal Rights for Women</div>
								</li>
								<li class="list__item red dot hidden-box">
									<div class="subhead-xxs anim-slide tr-delay-01">Conveying Better Career and providing opportunities</div>
								</li>
								<li class="list__item red dot hidden-box">
									<div class="subhead-xxs anim-slide tr-delay-02">Enhancing the skills and abilities of women</div>
								</li>
								<li class="list__item red dot hidden-box">
									<div class="subhead-xxs anim-slide tr-delay-03">Providing Social Protection for women</div>
								</li>
							</ul><!-- list end -->
						</div>
					</div><!-- column end -->

					<!-- column start -->
					<div class="eight-columns column-100-100 js-isotope-grid-box">
						<!-- empty grid -->
						<div class="js-isotope-grid-item empty-grid-1px-50-50-none"></div>
						<div class="js-isotope-grid-item empty-grid-100px-50-50-none"></div>

						<!-- grid-item start -->
						<div class="padding-top-90 grid-item-50-50-100 js-isotope-grid-item">
							<!-- grid-margin-box start -->
							<div class="grid-margin-box text-right js-scrollanim">
								<div class="anim-fade">
									<span class="subhead-xs text-color-red">01</span><br>
									<h3 class="headline-xxs text-color-black margin-top-30">“သူမ” for the brightest future of women</h3>
									<p class="body-text-xs text-color-black margin-top-20">Since the beginning of the Covid-19 Pandemic, Myanmar women have been plagued by insecurity, inequality and also they are increasingly suffering from unfair and declining employment opportunities.
                                        During the Spring Revolution, we women were more and more emotionally traumatized, and we were afraid of anything that would happen in this age of depression, insecurity, and lawlessness. Loss of job opportunities has made it tough to survive without income tax during this time.</p>
								</div>
							</div><!-- grid-margin-box end -->
						</div><!-- grid-item end -->

						<!-- grid-item start -->
						<div class="padding-top-90 grid-item-50-50-100 js-isotope-grid-item">
							<!-- grid-margin-box start -->
							<div class="grid-margin-box js-scrollanim">
								<div class="anim-fade">
									<span class="subhead-xs text-color-red">02</span><br>
									<h3 class="headline-xxs text-color-black margin-top-30">သူမ</h3>
									<p class="body-text-xs text-color-black margin-top-20">“သူမ” is a non-profit organization which derives from the 2nd ASEAN Youth Social Journalism Contest organized by the ASEAN Foundation and sponsored by USAID. “သူမ” was established to grow women leaders and heroes who can stand on their own feet to solve the different sorts of problems they are confronting by fulfilling their talents, opportunities, and hobbies.</p>
								</div>
							</div><!-- grid-margin-box end -->
						</div><!-- grid-item end -->

						<!-- grid-item start -->
						<div class="padding-top-90 grid-item-50-50-100 js-isotope-grid-item">
							<!-- grid-margin-box start -->
							<div class="grid-margin-box text-right js-scrollanim">
								<div class="anim-fade">
									<span class="subhead-xs text-color-red">03</span><br>
									<h3 class="headline-xxs text-color-black margin-top-30">Moving Forward</h3>
									<p class="body-text-xs text-color-black margin-top-20">Moving Forward with the Spring Revolution, during the Covid period, “သူမ” will create the brightest future for women with their ability, intellect, and strength to become solid and available women leaders . Hence, why not let everyone know about “သူမ”?</p>
								</div>
							</div><!-- grid-margin-box end -->
						</div><!-- grid-item end -->

						{{--<!-- grid-item start -->
						<div class="padding-top-90 grid-item-50-50-100 js-isotope-grid-item">
							<!-- grid-margin-box start -->
							<div class="grid-margin-box js-scrollanim">
								<div class="anim-fade">
									<span class="subhead-xs text-color-red">04</span><br>
									<h3 class="headline-xxs text-color-black margin-top-30">Our skills</h3>
									<p class="body-text-xs text-color-black margin-top-20">!! coming soon! !!</p>
								</div>
								<!-- list start -->
								<ul class="list margin-top-30">
									<!-- progress-box start -->
									<li class="list__item progress-bar">
										<div class="headline-xxxxs text-color-6d6d6d anim-text-fill" data-text="example?">example?</div>
										<div class="progress-bar__counter headline-xxxxs text-color-6d6d6d anim-text-fill tr-delay-02" data-text="97%">97%</div>
										<div class="progress-bar__lines-box black js-progress-animate-box" data-progress="97%">
											<div class="progress-bar__line black js-progress-animate"></div>
										</div>
									</li><!-- progress-box end -->

									<!-- progress-box start -->
									<li class="list__item progress-bar">
										<div class="headline-xxxxs text-color-6d6d6d anim-text-fill tr-delay-01" data-text="example?">example?</div>
										<div class="progress-bar__counter headline-xxxxs text-color-6d6d6d anim-text-fill tr-delay-03" data-text="93%">93%</div>
										<div class="progress-bar__lines-box black js-progress-animate-box" data-progress="93%">
											<div class="progress-bar__line black js-progress-animate tr-delay-01"></div>
										</div>
									</li><!-- progress-box end -->

									<!-- progress-box start -->
									<li class="list__item progress-bar">
										<div class="headline-xxxxs text-color-6d6d6d anim-text-fill tr-delay-02" data-text="example?">example?</div>
										<div class="progress-bar__counter headline-xxxxs text-color-6d6d6d anim-text-fill tr-delay-04" data-text="100%">100%</div>
										<div class="progress-bar__lines-box black js-progress-animate-box" data-progress="100%">
											<div class="progress-bar__line black js-progress-animate tr-delay-02"></div>
										</div>
									</li><!-- progress-box end -->

									<!-- progress-box start -->
									<li class="list__item progress-bar">
										<div class="headline-xxxxs text-color-6d6d6d anim-text-fill tr-delay-03" data-text="example?">example?</div>
										<div class="progress-bar__counter headline-xxxxs text-color-6d6d6d anim-text-fill tr-delay-05" data-text="98%">98%</div>
										<div class="progress-bar__lines-box black js-progress-animate-box" data-progress="98%">
											<div class="progress-bar__line black js-progress-animate tr-delay-03"></div>
										</div>
									</li><!-- progress-box end -->

									<!-- progress-box start -->
									<li class="list__item progress-bar">
										<div class="headline-xxxxs text-color-6d6d6d anim-text-fill tr-delay-04" data-text="example?">example?</div>
										<div class="progress-bar__counter headline-xxxxs text-color-6d6d6d anim-text-fill tr-delay-06" data-text="86%">86%</div>
										<div class="progress-bar__lines-box black js-progress-animate-box" data-progress="86%">
											<div class="progress-bar__line black js-progress-animate tr-delay-04"></div>
										</div>
									</li><!-- progress-box end -->
								</ul><!-- list end -->
							</div><!-- grid-margin-box end -->
						</div><!-- grid-item end -->--}}
					</div><!-- column end -->
				</div><!-- flex-container end -->
			</section><!-- about end -->

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
                    <div class="container-small text-center" style="margin-top: 50px;">
                        <a href="{{ url('/content') }}" class="skew-btn js-pointer-large js-animsition-link">
                            <span class="skew-btn__box">
                                <span class="skew-btn__content text-color-black">more</span>
                                <span class="skew-btn__arrow black"></span>
                            </span>
                        </a>
                    </div>
                </div><!-- lines-container end -->
            </section><!-- latest news end -->
			<!-- team start -->
			<section id="about" class="lines-section pos-rel black-lines section-bg-light-2" data-midnight="black">
				<!-- flex-container start -->
				<div class="flex-container lines-container pos-rel black-lines padding-top-30 padding-bottom-120">
					<!-- column start -->
					<div class="four-columns column-100-100 padding-top-90">
						<div class="line-col-l-r-margin-20 js-scrollanim">
							<!-- title start -->
							<h2 class="headline-s">
								<span class="text-color-red anim-text-fill" data-text="We">We</span>
								<span class="text-color-red anim-text-fill tr-delay-01" data-text="are">are</span>
								<span class="text-color-black anim-text-fill tr-delay-02" data-text="a">a</span>
								<span class="text-color-black anim-text-fill tr-delay-03" data-text="Team">Team</span><br>
								<span class="text-color-black anim-text-fill tr-delay-04" data-text="of">of</span>
								<span class="text-color-red anim-text-fill tr-delay-05" data-text="Expert">Expert</span>
							</h2><!-- title end -->
							<p class="body-text-s text-color-black margin-top-20 anim-text-reveal tr-delay-08"></p>
						</div>
					</div><!-- column end -->

					<!-- column start -->
					<div class="eight-columns column-100-100 padding-top-30 js-isotope-grid-box">
						<!-- empty grid -->
						<div class="js-isotope-grid-item empty-grid-1px-50-50-none"></div>
						<div class="js-isotope-grid-item empty-grid-100px-50-50-none"></div>

						<!-- grid-item start -->
						<div class="padding-top-60 grid-item-50-50-100 js-isotope-grid-item">
							<!-- grid-margin-box start -->
							<div class="grid-margin-box">
								<img class="anim-fade js-scrollanim" src="{{asset('front-contents/assets/image/mt.jpg')}}" alt="Miss Thiri">
								<!-- content start -->
								<div class="margin-top-10 list list_margin-1px js-scrollanim">
									<h4 class="list__item">
										<span class="hidden-box d-inline-block">
											<span class="subhead-s text-color-red anim-reveal red">Miss Thiri</span>
										</span>
									</h4>
									<p class="list__item">
										<span class="hidden-box d-inline-block">
											<span class="headline-xxxxs text-color-black anim-reveal black tr-delay-02">Founder</span>
										</span>
									</p>
								</div><!-- content end -->
							</div><!-- grid-margin-box end -->
						</div><!-- grid-item end -->

						<!-- grid-item start -->
						<div class="padding-top-60 grid-item-50-50-100 js-isotope-grid-item">
							<!-- grid-margin-box start -->
							<div class="grid-margin-box">
								<img class="anim-fade js-scrollanim" src="{{asset('front-contents/assets/image/kspw.jpeg')}}" alt="Khun Sint">
								<!-- content start -->
								<div class="margin-top-10 list list_margin-1px js-scrollanim">
									<h4 class="list__item">
										<span class="hidden-box d-inline-block">
											<span class="subhead-s text-color-red anim-reveal red">Khun Sint</span>
										</span>
									</h4>
									<p class="list__item">
										<span class="hidden-box d-inline-block">
											<span class="headline-xxxxs text-color-black anim-reveal black tr-delay-02">Founder</span>
										</span>
									</p>
								</div><!-- content end -->
							</div><!-- grid-margin-box end -->
						</div><!-- grid-item end -->

						<!-- grid-item start -->
						<div class="padding-top-60 grid-item-50-50-100 js-isotope-grid-item">
							<!-- grid-margin-box start -->
							<div class="grid-margin-box">
								<img class="anim-fade js-scrollanim" src="{{asset('front-contents/assets/image/nw.jpg')}}" alt="Nadi Wint">
								<!-- content start -->
								<div class="margin-top-10 list list_margin-1px js-scrollanim">
									<h4 class="list__item">
										<span class="hidden-box d-inline-block">
											<span class="subhead-s text-color-red anim-reveal red">Nadi Wint</span>
										</span>
									</h4>
									<p class="list__item">
										<span class="hidden-box d-inline-block">
											<span class="headline-xxxxs text-color-black anim-reveal black tr-delay-02">Founder</span>
										</span>
									</p>
								</div><!-- content end -->
							</div><!-- grid-margin-box end -->
						</div><!-- grid-item end -->

						<!-- grid-item start -->
						<div class="padding-top-60 grid-item-50-50-100 js-isotope-grid-item">
							<!-- grid-margin-box start -->
							<div class="grid-margin-box">
								<img class="anim-fade js-scrollanim" src="{{asset('front-contents/assets/image/ans.jpg')}}" alt="Aye Nyein San">
								<!-- content start -->
								<div class="margin-top-10 list list_margin-1px js-scrollanim">
									<h4 class="list__item">
										<span class="hidden-box d-inline-block">
											<span class="subhead-s text-color-red anim-reveal red">Aye Nyein San</span>
										</span>
									</h4>
									<p class="list__item">
										<span class="hidden-box d-inline-block">
											<span class="headline-xxxxs text-color-black anim-reveal black tr-delay-02">Founder</span>
										</span>
									</p>
								</div><!-- content end -->
							</div><!-- grid-margin-box end -->
						</div><!-- grid-item end -->
                      <!-- grid-item start -->
						<div class="padding-top-60 grid-item-50-50-100 js-isotope-grid-item">
							<!-- grid-margin-box start -->
							<div class="grid-margin-box">
								<img class="anim-fade js-scrollanim" src="{{asset('front-contents/assets/image/kkka.jpg')}}" alt="Khant Ko">
								<!-- content start -->
								<div class="margin-top-10 list list_margin-1px js-scrollanim">
									<h4 class="list__item">
										<span class="hidden-box d-inline-block">
											<span class="subhead-s text-color-red anim-reveal red">Khant Ko</span>
										</span>
									</h4>
									<p class="list__item">
										<span class="hidden-box d-inline-block">
											<span class="headline-xxxxs text-color-black anim-reveal black tr-delay-02">Founder</span>
										</span>
									</p>
								</div><!-- content end -->
							</div><!-- grid-margin-box end -->
						</div><!-- grid-item end -->

						<!-- grid-item start -->
						<div class="padding-top-60 grid-item-50-50-100 js-isotope-grid-item">
							<!-- grid-margin-box start -->
							<div class="grid-margin-box">
								<img class="anim-fade js-scrollanim" src="{{asset('front-contents/assets/image/pso.jpg')}}" alt="Paing Soe Oo">
								<!-- content start -->
								<div class="margin-top-10 list list_margin-1px js-scrollanim">
									<h4 class="list__item">
										<span class="hidden-box d-inline-block">
											<span class="subhead-s text-color-red anim-reveal red">Paing Soe Oo</span>
										</span>
									</h4>
									<p class="list__item">
										<span class="hidden-box d-inline-block">
											<span class="headline-xxxxs text-color-black anim-reveal black tr-delay-02">Founder</span>
										</span>
									</p>
								</div><!-- content end -->
							</div><!-- grid-margin-box end -->
						</div><!-- grid-item end -->

						<!-- grid-item start -->
						<div class="padding-top-60 grid-item-50-50-100 js-isotope-grid-item">
							<!-- grid-margin-box start -->
							<div class="grid-margin-box">
								<img class="anim-fade js-scrollanim" src="{{asset('front-contents/assets/image/mth.jpg')}}" alt="Min Thiha">
								<!-- content start -->
								<div class="margin-top-10 list list_margin-1px js-scrollanim">
									<h4 class="list__item">
										<span class="hidden-box d-inline-block">
											<span class="subhead-s text-color-red anim-reveal red">Min Thiha</span>
										</span>
									</h4>
									<p class="list__item">
										<span class="hidden-box d-inline-block">
											<span class="headline-xxxxs text-color-black anim-reveal black tr-delay-02">Founder</span>
										</span>
									</p>
								</div><!-- content end -->
							</div><!-- grid-margin-box end -->
						</div><!-- grid-item end -->

					</div><!-- column end -->
				</div><!-- flex-container end -->
			</section><!-- team end -->

			<!-- testimonials start -->
			<section class="lines-section pos-rel bg-img-cover" style="background-image:url({{asset('front-contents/assets/imag/creative-space-desk-off')}})">
				<!-- bg-overlay -->
				<div class="bg-overlay-black"></div>
				<!-- lines-container start -->
				<div class="lines-container pos-rel no-lines flex-min-height-100vh">
					<!-- padding-top-bottom-120 start -->
					<div class="padding-top-bottom-120 width-100perc">
						<!-- title start -->
						<h2 class="headline-xl text-center hidden-box">
							<span class="anim-slide js-scrollanim">Members of Thuma</span>
						</h2><!-- title end -->

						<!-- js-2-view-slider start -->
						<div class="js-2-view-slider padding-top-bottom-90 hidden-box pos-rel">
							<!-- swiper-wrapper start -->
							<div class="swiper-wrapper js-slider-scroll-anim">
								<!-- swiper-slide start -->
								<div class="swiper-slide slide-opacity-anim">
									<!-- anim-img-scale start -->
									<div class="anim-img-scale testimonials-author border-radius-50perc">
										<img class="anim-img-scale__inner" src="{{asset('front-contents/assets/image/mt.jpg')}}" alt="Miss Thiri">
									</div><!-- anim-img-scale end -->
									<div class="margin-left-right-10 text-center">
										<p class="body-text-m margin-top-60">"If you improve by 1% everyday within a year, you’ll have improved by 365% at the end of the year which is more than 100%"</p>
										<span class="headline-xxxs margin-top-20 anim-text-fill tr-delay-01" data-text="Miss Thiri">Miss Thiri</span><br>
										<span class="subhead-xxs margin-top-5 anim-text-fill tr-delay-03" data-text=" HR Director, and Video Grapher"> HR Director, and Video Grapher</span>
									</div>
								</div><!-- swiper-slide end -->

								<!-- swiper-slide start -->
								<div class="swiper-slide slide-opacity-anim">
									<!-- anim-img-scale start -->
									<div class="anim-img-scale testimonials-author border-radius-50perc">
										<img class="anim-img-scale__inner" src="{{asset('front-contents/assets/image/kspw.jpeg')}}" alt="Khun Sint Phoo Wai">
									</div><!-- anim-img-scale end -->
									<div class="margin-left-right-10 text-center">
										<p class="body-text-m margin-top-60">"Those who give up cannot gain victory."</p>
										<span class="headline-xxxs margin-top-20 anim-text-fill tr-delay-01" data-text="Khun Sint Phoo Wai">Khun Sint Phoo Wai</span><br>
										<span class="subhead-xxs margin-top-5 anim-text-fill tr-delay-03" data-text=" Founder of Thuma"> Founder of Thuma</span>
									</div>
								</div><!-- swiper-slide end -->

								<!-- swiper-slide start -->
								<div class="swiper-slide slide-opacity-anim">
									<!-- anim-img-scale start -->
									<div class="anim-img-scale testimonials-author border-radius-50perc">
										<img class="anim-img-scale__inner" src="{{asset('front-contents/assets/image/nw.jpg')}}" alt="Nadi Wint">
									</div><!-- anim-img-scale end -->
									<div class="margin-left-right-10 text-center">
										<p class="body-text-m margin-top-60">"Never forget why you started."</p>
										<span class="headline-xxxs margin-top-20 anim-text-fill tr-delay-01" data-text="Nadi Wint">Nadi Wint</span><br>
										<span class="subhead-xxs margin-top-5 anim-text-fill tr-delay-03" data-text="Marketing Head in Thuma ">Marketing Head in Thuma</span>
									</div>
								</div><!-- swiper-slide end -->

								<!-- swiper-slide start -->
								<div class="swiper-slide slide-opacity-anim">
									<!-- anim-img-scale start -->
									<div class="anim-img-scale testimonials-author border-radius-50perc">
										<img class="anim-img-scale__inner" src="{{asset('front-contents/assets/image/ans.jpg')}}" alt="Aye Nyein San">
									</div><!-- anim-img-scale end -->
									<div class="margin-left-right-10 text-center">
										<p class="body-text-m margin-top-60">"Do It Now"</p>
										<span class="headline-xxxs margin-top-20 anim-text-fill tr-delay-01" data-text="Aye Nyein San">Aye Nyein San</span><br>
										<span class="subhead-xxs margin-top-5 anim-text-fill tr-delay-03" data-text="Founding Member of Thuma">Founding Member of Thuma</span>
									</div>
								</div><!-- swiper-slide end -->

								<!-- swiper-slide start -->
								<div class="swiper-slide slide-opacity-anim">
									<!-- anim-img-scale start -->
									<div class="anim-img-scale testimonials-author border-radius-50perc">
										<img class="anim-img-scale__inner" src="{{asset('front-contents/assets/image/kkka.jpg')}}" alt="Khant Ko Ko Aung">
									</div><!-- anim-img-scale end -->
									<div class="margin-left-right-10 text-center">
										<p class="body-text-m margin-top-60">"We have got many different things — sex, skin colour, opinions or attitudes, religions, and cultures. However, the same thing we all have is just human right."</p>
										<span class="headline-xxxs margin-top-20 anim-text-fill tr-delay-01" data-text="Khant Ko Ko Aung">Khant Ko Ko Aung</span><br>
										<span class="subhead-xxs margin-top-5 anim-text-fill tr-delay-03" data-text="Content writer of Thuma">Content writer of Thuma</span>
									</div>
                                </div><!-- swiper-slide end -->
                                
                                <!-- swiper-slide start -->
								<div class="swiper-slide slide-opacity-anim">
									<!-- anim-img-scale start -->
									<div class="anim-img-scale testimonials-author border-radius-50perc">
										<img class="anim-img-scale__inner" src="{{asset('front-contents/assets/image/pso.jpg')}}" alt="Paing Soe Oo">
									</div><!-- anim-img-scale end -->
									<div class="margin-left-right-10 text-center">
										<p class="body-text-m margin-top-60">"Don't wait for the Opportunity. Create it."</p>
										<span class="headline-xxxs margin-top-20 anim-text-fill tr-delay-01" data-text="Paing Soe Oo">Paing Soe Oo</span><br>
										<span class="subhead-xxs margin-top-5 anim-text-fill tr-delay-03" data-text="Graphic Designer of Thuma">Graphic Designer of Thuma</span>
									</div>
								</div><!-- swiper-slide end -->
                              <!-- swiper-slide start -->
								<div class="swiper-slide slide-opacity-anim">
									<!-- anim-img-scale start -->
									<div class="anim-img-scale testimonials-author border-radius-50perc">
										<img class="anim-img-scale__inner" src="{{asset('front-contents/assets/image/mth.jpg')}}" alt="Min Thiha">
									</div><!-- anim-img-scale end -->
									<div class="margin-left-right-10 text-center">
										<p class="body-text-m margin-top-60">"Nothing lasts forever, We can change the future."</p>
										<span class="headline-xxxs margin-top-20 anim-text-fill tr-delay-01" data-text="Min Thiha">Min Thiha</span><br>
										<span class="subhead-xxs margin-top-5 anim-text-fill tr-delay-03" data-text="Web Developer of Thuma">Web Developer of Thuma</span>
									</div>
								</div><!-- swiper-slide end -->
							</div><!-- swiper-wrapper end -->

							<!-- swiper-button-prev start -->
							<div class="swiper-button-prev-box">
								<div class="swiper-button-prev"></div>
							</div><!-- swiper-button-prev end -->
							<!-- swiper-button-next start -->
							<div class="swiper-button-next-box">
								<div class="swiper-button-next"></div>
							</div><!-- swiper-button-next end -->

							<!-- swiper-pagination start -->
							<div class="pagination-box">
								<div class="swiper-pagination counter-pagination"></div>
							</div><!-- swiper-pagination end -->
						</div><!-- js-2-view-slider end -->
					</div><!-- padding-top-bottom-120 end -->
				</div><!-- lines-container end -->
			</section><!-- testimonials end -->

			<!-- portfolio start -->
			<section class="lines-section pos-rel black-lines section-bg-light-1" data-midnight="black">
				<!-- lines-container start -->
				<div class="lines-container pos-rel no-lines padding-top-bottom-120">
					<!-- container start -->
					<div class="container small">
						<!-- title start -->
						<h2 class="headline-xxl text-center js-scrollanim">
							<span class="anim-text-fill text-color-black" data-text="Coming">Coming</span>
							<span class="anim-text-fill text-color-red tr-delay-01" data-text="soon">soon</span>
						</h2><!-- title end -->

						{{-- <!-- filter-buttons start -->
						<div class="list list_row list_center list_margin-30px padding-top-90 js-filter-button-box js-scrollanim">
							<button class="list__item js-filter-button anim-fade js-pointer-small js-filter-button-active" data-filter="*">
								<span class="flip-btn text-color-black" data-text="Everything">Everything</span>
							</button>
							<button class="list__item js-filter-button anim-fade tr-delay-01 js-pointer-small" data-filter=".interior">
								<span class="flip-btn text-color-black" data-text="Interior">Interior</span>
							</button>
							<button class="list__item js-filter-button anim-fade tr-delay-02 js-pointer-small" data-filter=".loft">
								<span class="flip-btn text-color-black" data-text="Loft">Loft</span>
							</button>
							<button class="list__item js-filter-button anim-fade tr-delay-03 js-pointer-small" data-filter=".minimal">
								<span class="flip-btn text-color-black" data-text="Minimal">Minimal</span>
							</button>
						</div><!-- filter-buttons end -->

						<!-- js-isotope-filter-grid-box start -->
						<div class="js-isotope-filter-grid-box padding-top-30">
							<!-- grid-item start -->
							<div class="padding-top-30 js-isotope-filter-grid-item minimal">
								<a href="project_drone.html" class="d-block hover-box pos-rel js-animsition-link js-pointer-large">
									<div class="anim-img-scale js-img-scale content-bg-dark-1">
										<div class="anim-img-scale__inner">
											<img class="img-hover-opacity" src="{{asset('front-contents/assets/imag/gray-glass-bowl-on-top-')}}" alt="project">
										</div>
										<div class="border-left-anim in-10px center"></div>
										<div class="border-top-anim in-10px center"></div>
										<div class="border-right-anim in-10px center"></div>
										<div class="border-bottom-anim in-10px center"></div>
									</div>
									<!-- content start -->
									<div class="pos-abs pos-center-center text-center">
										<h3 class="hidden-box">
											<span class="headline-xxxs hover-slide">Do what you love</span>
										</h3>
										<span class="hidden-box d-block">
											<span class="subhead-xxs hover-slide tr-delay-02">Minimal</span>
										</span>
									</div><!-- content end -->
								</a>
							</div><!-- grid-item end -->

							<!-- grid-item start -->
							<div class="padding-top-30 js-isotope-filter-grid-item interior">
								<a href="project_drone.html" class="d-block hover-box pos-rel js-animsition-link js-pointer-large">
									<div class="anim-img-scale js-img-scale content-bg-dark-1">
										<div class="anim-img-scale__inner">
											<img class="img-hover-opacity" src="{{asset('front-contents/assets/imag/three-gray-ornaments-on')}}" alt="project">
										</div>
										<div class="border-left-anim in-10px center"></div>
										<div class="border-top-anim in-10px center"></div>
										<div class="border-right-anim in-10px center"></div>
										<div class="border-bottom-anim in-10px center"></div>
									</div>
									<!-- content start -->
									<div class="pos-abs pos-center-center text-center">
										<h3 class="hidden-box">
											<span class="headline-xxxs hover-slide">Grey sofa</span>
										</h3>
										<span class="hidden-box d-block">
											<span class="subhead-xxs hover-slide tr-delay-02">Interior</span>
										</span>
									</div><!-- content end -->
								</a>
							</div><!-- grid-item end -->

							<!-- grid-item start -->
							<div class="padding-top-30 js-isotope-filter-grid-item minimal">
								<a href="project_drone.html" class="d-block hover-box pos-rel js-animsition-link js-pointer-large">
									<div class="anim-img-scale js-img-scale content-bg-dark-1">
										<div class="anim-img-scale__inner">
											<img class="img-hover-opacity" src="{{asset('front-contents/assets/imag/house-table-luxury-lamp')}}" alt="project">
										</div>
										<div class="border-left-anim in-10px center"></div>
										<div class="border-top-anim in-10px center"></div>
										<div class="border-right-anim in-10px center"></div>
										<div class="border-bottom-anim in-10px center"></div>
									</div>
									<!-- content start -->
									<div class="pos-abs pos-center-center text-center">
										<h3 class="hidden-box">
											<span class="headline-xxxs hover-slide">Luxury house</span>
										</h3>
										<span class="hidden-box d-block">
											<span class="subhead-xxs hover-slide tr-delay-02">Minimal</span>
										</span>
									</div><!-- content end -->
								</a>
							</div><!-- grid-item end -->

							<!-- grid-item start -->
							<div class="padding-top-30 js-isotope-filter-grid-item loft">
								<a href="project_drone.html" class="d-block hover-box pos-rel js-animsition-link js-pointer-large">
									<div class="anim-img-scale js-img-scale content-bg-dark-1">
										<div class="anim-img-scale__inner">
											<img class="img-hover-opacity" src="{{asset('front-contents/assets/imag/architectural-photograp')}}" alt="project">
										</div>
										<div class="border-left-anim in-10px center"></div>
										<div class="border-top-anim in-10px center"></div>
										<div class="border-right-anim in-10px center"></div>
										<div class="border-bottom-anim in-10px center"></div>
									</div>
									<!-- content start -->
									<div class="pos-abs pos-center-center text-center">
										<h3 class="hidden-box">
											<span class="headline-xxxs hover-slide">Pure minimalism</span>
										</h3>
										<span class="hidden-box d-block">
											<span class="subhead-xxs hover-slide tr-delay-02">Loft</span>
										</span>
									</div><!-- content end -->
								</a>
							</div><!-- grid-item end -->

							<!-- grid-item start -->
							<div class="padding-top-30 js-isotope-filter-grid-item interior">
								<a href="project_drone.html" class="d-block hover-box pos-rel js-animsition-link js-pointer-large">
									<div class="anim-img-scale js-img-scale content-bg-dark-1">
										<div class="anim-img-scale__inner">
											<img class="img-hover-opacity" src="{{asset('front-contents/assets/imag/bedroom-1666389.fe.dela')}}" alt="project">
										</div>
										<div class="border-left-anim in-10px center"></div>
										<div class="border-top-anim in-10px center"></div>
										<div class="border-right-anim in-10px center"></div>
										<div class="border-bottom-anim in-10px center"></div>
									</div>
									<!-- content start -->
									<div class="pos-abs pos-center-center text-center">
										<h3 class="hidden-box">
											<span class="headline-xxxs hover-slide">Vacation home</span>
										</h3>
										<span class="hidden-box d-block">
											<span class="subhead-xxs hover-slide tr-delay-02">Interior</span>
										</span>
									</div><!-- content end -->
								</a>
							</div><!-- grid-item end -->

							<!-- grid-item start -->
							<div class="padding-top-30 js-isotope-filter-grid-item loft">
								<a href="project_drone.html" class="d-block hover-box pos-rel js-animsition-link js-pointer-large">
									<div class="anim-img-scale js-img-scale content-bg-dark-1">
										<div class="anim-img-scale__inner">
											<img class="img-hover-opacity" src="{{asset('front-contents/assets/imag/white-bathroom-interior')}}" alt="project">
										</div>
										<div class="border-left-anim in-10px center"></div>
										<div class="border-top-anim in-10px center"></div>
										<div class="border-right-anim in-10px center"></div>
										<div class="border-bottom-anim in-10px center"></div>
									</div>
									<!-- content start -->
									<div class="pos-abs pos-center-center text-center">
										<h3 class="hidden-box">
											<span class="headline-xxxs hover-slide">White rooms</span>
										</h3>
										<span class="hidden-box d-block">
											<span class="subhead-xxs hover-slide tr-delay-02">Loft</span>
										</span>
									</div><!-- content end -->
								</a>
							</div><!-- grid-item end -->
						</div><!-- js-isotope-filter-grid-box end --> --}}
					</div><!-- container end -->
				</div><!-- lines-container end -->
			</section><!-- portfolio end -->
@endsection