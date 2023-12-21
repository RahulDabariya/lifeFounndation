@extends('Fronted/comman')
@section('contacnt')
<!-- site content -->
<div id="main">
    <!--Breadcrumb Section Start Here-->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Our Blog</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{'LifeFoundation'}}">Home</a>
                        </li>
                        <li class="active">
                            Blog
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb Section End Here-->
    <div class="content-wrapper container" id="page-info">

        <div class="row">
            <!--Article Section Start Here-->
            <div class="col-xs-12">
                <!--block Frist Start Here-->
                <article class="blog">
                    <figure>
                        <img src="{{asset('assetsss/img/blog-pic.jpg')}}" alt="">
                    </figure>
                    <div class="row">
                        <div class="col-xs-12 col-sm-10 col-sm-offset-1 caption">
                            <h2 class="h1">Fundraising initiatives for better life of the underprivileged children in Africa </h2>
                            <ul class="post-in">
                                <li>
                                    Posted In : category
                                </li>
                                <li>
                                    30 : comments
                                </li>
                            </ul>
                            <p>
                                Last month, fund raising initiatives were taken up and drives were launched to attract donations for the education of the underprivileged children. Many people participated in the event and donated their heart out.
                            </p>
                            <p>
                                <a href="{{('BlogDetali')}}" class="btn btn-default" role="button">READ MORE</a>
                            </p>
                        </div>
                    </div>
                </article>
                <!--block Frist End Here-->
                <!--block Second Start Here-->
                <article class="blog anim-section">
                    <section class="img-slider flex-slide flexslider">
                        <ul class="slides">
                            <li>
                                <img src="{{asset('assetsss/img/blog-pic0.jpg')}}" alt="">
                            </li>
                            <li>
                                <img src="{{asset('assetsss/img/blog-pic1.jpg')}}" alt="">
                            </li>
                            <li>
                                <img src="{{asset('assetsss/img/blog-pic3.jpg')}}" alt="">
                            </li>
                        </ul>
                    </section>
                    <div class="row">
                        <div class="col-xs-12 col-sm-10 col-sm-offset-1 caption">
                            <h2 class="h1">Fundraising for African unprivileged children </h2>
                            <ul class="post-in">
                                <li>
                                    Posted In : category
                                </li>
                                <li>
                                    30 : comments
                                </li>
                            </ul>
                            <p>
                                We have been raising funds with great difficulty for the work that this charity does in Africa. We work in rural communities in Eastern Nigeria and other parts and provide funding for widows to build businesses in order for them to help themselves and stimulate the local economy.
                            </p>
                            <p>
                                We work with young women to train and develop their expertise in sewing and tailoring so they can start their own business and contribute to the community. This ensures that they avoid joining the cohort of ladies in the oldest industry known to man- the “night trade.
                            </p>
                            <p>
                                <a href="{{('BlogDetali')}}" class="btn btn-default" role="button">READ MORE</a>
                            </p>
                        </div>
                    </div>
                </article>
                <!--block Second End Here-->
                <!--block Third Start Here-->
                <article class="blog anim-section">
                    <div class="embed-responsive embed-responsive-16by9">
                        <img src="{{asset('assetsss/img/video-frame3.jpg')}}" alt="Click to play" data-video="http://www.youtube.com/embed/wN3gueLT0D8?autoplay=1" />
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-10 col-sm-offset-1 caption">
                            <h2 class="h1">Bringing Changes in 2015 </h2>
                            <ul class="post-in">
                                <li>
                                    Posted In : category
                                </li>
                                <li>
                                    30 : comments
                                </li>
                            </ul>
                            <p>
                                The year 2014 was a very exciting year for us and the first half of 2015 is proving to be the same. We have taken steps through the first half of this year to expand our influence throughout the United States and the Continent of Africa. Two more storage units have been rented and supplies are already coming in as we prepare to ship another container.
                            </p>
                            <p>
                                <a href="{{('BlogDetali')}}" class="btn btn-default" role="button">READ MORE</a>
                            </p>
                        </div>
                    </div>

            </div>
            <!--Article Section End Here-->
        </div>

    </div>
</div>
<!-- site content ends -->


@endsection