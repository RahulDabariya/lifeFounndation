@extends('Fronted/comman')

@section('contacnt')

<!-- Site Content -->
<div id="main">
    <!-- banner slider Start Here -->
    <section class="rev_slider_wrapper banner-section">
        <div class="rev_slider banner-slider">
            <ul>
                <!-- SLIDE  -->
                <li data-transition="random" data-slotamount="7" data-masterspeed="500" class="slide-1">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('assetsss/img/slide-banner-01.jpg')}}" alt="banner" data-bgfit="cover" data-bgposition="center 36%" data-bgrepeat="no-repeat">

                    <div data-endspeed="500" data-easing="easeOutCirc" data-start="500" data-speed="700" data-y="103" data-x="152" class="tp-caption sft">
                        <span class="btn btn-bg">FEATURED CAUSE</span>
                    </div>

                    <div data-endspeed="800" data-easing="easeOutCirc" data-start="800" data-speed="700" data-y="150" data-x="152" class="tp-caption sft banner-heading">
                        <h2><strong>Donate &amp; Help</strong>

                            Raise Fund For African Children and Their Education
                        </h2>
                    </div>

                    <div data-endspeed="1000" data-easing="easeOutCirc" data-start="1000" data-speed="700" data-y="304" data-x="152" class="tp-caption sft banner-summary"><br><br>
                        <p>
                            The world's best fundraising website works outstandingly for African children by raising money for ideal cause, including medical bills, education, help and awesome donation causes.
                        </p>
                    </div>

                    <div data-endspeed="1200" data-easing="easeOutCirc" data-start="1200" data-speed="700" data-y="416" data-x="152" class="tp-caption sft">
     
                    </div>
                </li>
                <!-- SLIDE  -->
                <!-- SLIDE  -->
                <li data-transition="random" data-slotamount="7" data-masterspeed="500" class="slide-2">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('assetsss/img/slide-banner-02.jpg')}}" alt="banner" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                    <div data-endspeed="500" data-easing="easeOutCirc" data-start="500" data-speed="500" data-y="406" data-x="152" class="tp-caption sfb feature-btn ">
                        <span class="btn btn-warning btn-sm">FEATURED CAUSE</span>
                    </div>
                    <div data-endspeed="800" data-easing="easeOutCirc" data-start="800" data-speed="500" data-y="448" data-x="152" class="tp-caption sfb">
                        <div class="trans-grey"></div>
                    </div>
                    <div data-endspeed="1500" data-easing="easeOutCirc" data-start="1500" data-speed="1000" data-y="466" data-x="177" class="tp-caption banner-heading bottom-animation text-white sfb">
                        <h2 class="h1"><strong>Donate &amp; Help</strong>

                            Africans For Education</h2>
                    </div>
                    <div data-endspeed="1700" data-easing="easeOutCirc" data-start="1700" data-speed="700" data-y="550" data-x="177" class="tp-caption sfb donate-button">
      
                    </div>

                </li>
                <!-- SLIDE  -->
                <li data-transition="random" data-slotamount="7" data-masterspeed="500" class="slide-3">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('assetsss/img/slide-banner-03.jpg')}}" alt="banner" data-bgfit="cover" data-bgposition="center 36%" data-bgrepeat="no-repeat">

                    <div data-endspeed="500" data-easing="easeOutCirc" data-start="500" data-speed="700" data-y="103" data-x="152" class="tp-caption sft banner-feaure">
                        <span class="btn btn-bg">FEATURED CAUSE</span>
                    </div>

                    <div data-endspeed="800" data-easing="easeOutCirc" data-start="800" data-speed="700" data-y="150" data-x="152" class="tp-caption sft third-style banner-heading banner-title">
                        <h2><strong>Donate &amp; Help</strong>

                            Support African Children In Making Their Career</h2>
                    </div>
                    <div data-endspeed="1000" data-easing="easeOutCirc" data-start="1000" data-speed="700" data-y="244" data-x="152" class="tp-caption sft third-style banner-summary banner-description"><br><br>
                        <p>
                            Become volunteer and start donating for those, who are unable to get education that they deserve. Give your full support to make their career.
                        </p>
                    </div>

                    <div data-endspeed="1200" data-easing="easeOutCirc" data-start="1200" data-speed="700" data-y="354" data-x="152" class="tp-caption sft banner-btn">
 
                    </div>
                </li>
            </ul>
        </div>
    </section><br><br>
    <!-- banner slider End Here -->
    <!-- Our Causes Section Start Here-->

    <section class="we-help gallery-wrap">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12">
                        <!--Gallery Section Start Here-->
                        <div class="row gallery">
                            @foreach($Campen as $Campens)
                            <div class="cols-xs-12 col-sm-4">
                                <div class="thumbnail">
                                    <img src="{{url('imagess/'.$Campens->image)}}" alt="" style="height: 350px;"></a>

                                    <h3 class="h3" style="text-align: center;"><a href="">{{$Campens->name}}</a></h3>
                                    <p>
                                    {{$Campens->about}}
                                    </p>

                                    <a href="{{ route('CampenDetali', ['id' => $Campens->id]) }}" class="btn btn-default" style="text-align: center;">DONATE NOW</a> 


                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!--Gallery Section End Here-->
                    </div>

                </div>
            </div>
        </section>
    <!-- Our Causes Section End Here-->

   

    <!--Testimonial Section Start Here -->
    <section class="testimonial parallax">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="testimonial-slider flexslider">
                        <ul class="slides">
                            <li>
                                <div class="slide">
                                    <h2>Donation Holders say <strong> Read Below </strong></h2>
                                    <blockquote>
                                        <p>
                                            “Most of the dimensions related to life of human and their their living condition are in trouble these days, so help them to take a voluntarily step.”
                                        </p>
                                        <footer>
                                            <span>TONY VEDVIK</span>
                                            <cite>(Head Sales of Sense Technology)</cite>
                                        </footer>
                                    </blockquote>
                                </div>
                            </li>
                            <li>
                                <div class="slide">
                                    <h2>Donation Holders say <strong> Read Below</strong></h2>
                                    <blockquote>
                                        <p>
                                            “Etiam imperdiet metus ut pretium gravida uisque et vestibulum lacus. Maecenas at lacinia lacus. ”
                                        </p>
                                        <footer>
                                            <span>Jhony Waker</span>
                                            <cite>(CEO at NewCompany)</cite>
                                        </footer>
                                    </blockquote>
                                </div>
                            </li>
                            <li>
                                <div class="slide">
                                    <h2>Donation Holders say <strong> Read Below</strong></h2>
                                    <blockquote>
                                        <p>
                                            “Most of the dimensions related to life of human and their their living condition are in trouble these days, so help them to take a voluntarily step.”
                                        </p>
                                        <footer>
                                            <span>TONY VEDVIK</span>
                                            <cite>(Head Sales of Sense Technology)</cite>
                                        </footer>
                                    </blockquote>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial Section End Here -->

</div>
<!--Content End Here -->


@endsection