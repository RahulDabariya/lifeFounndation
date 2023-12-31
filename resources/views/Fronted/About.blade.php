@extends('Fronted/comman')
@section('contacnt')


<!-- site content -->
<div id="main">
    <!--Breadcrumb Section Start Here-->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Our About</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{'LifeFoundation'}}">Home</a>
                        </li>
                        <li class="active">
                            About
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb Section End Here-->

    <div class="mission-page" id="page-info">
        <!-- Services Section Start Here-->
        <section class="container services text-center">
            <div class="row">
                <div class="col-xs-12">
                    <header class="service-header section-header">
                        <h2>See Services, <strong class="border-none">We are on Mission</strong></h2>
                    </header>

                    <div class="article-list flexslider article-slider progressbar">
                        <ul class="slides">
                            <div class="row">
                                <li>
                                    <div class="col-xs-12 col-sm-4 zoom">
                                        <img src="{{asset('assetsss/img/icon-service-01.png')}}" alt="">
                                        <h3 class="h3">Child Development</h3>
                                        <p>
                                            Our mission is to provide the finest medical care and treatment for every kind of disease to the child. We initiate campaign to reach to remote areas and help doctors as well as strive to provide all kinds of required medicines
                                        </p>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 zoom ">
                                        <img src="{{asset('assetsss/img/icon-service-02.png')}}" alt="">
                                        <h3 class="h3">Erasing Malnutrition</h3>
                                        <p>
                                            We focus on holistic child development and improving survival rate of every children across Africa. Our team also focus on children, who are suffering the life-threatening disease and who are physically handicapped.
                                        </p>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 zoom">
                                        <img src="{{asset('assetsss/img/icon-service-03.png')}}" alt="">
                                        <h3 class="h3">Clothing</h3>
                                        <p>


                                            In chilling winter, every child needs warm cloths, therefore, we are also working in the best manner to provide all types of clothings to the children, who do not any have any cloth for winter and summer.
                                        </p>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 anim-section zoom">
                                        <img src="{{asset('assetsss/img/icon-service-04.png')}}" alt="">
                                        <h3 class="h3">Education Support</h3>
                                        <p>
                                            Children are the future of the world. Hence, we strive to provide the better education for our children, so that they can make our world more beautiful. In order to provide valuable education, we are building the state-of-the-art infrastructure.
                                        </p>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 anim-section zoom">
                                        <img src="{{asset('assetsss/img/icon-service-05.png')}}" alt="">
                                        <h3 class="h3"> Child Equality</h3>
                                        <p>


                                            There are various areas, where the children are exploited and deprived of their basic rights. In order to support child equality, we have processed the campaign to support child equality.
                                        </p>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 anim-section zoom">
                                        <img src="{{asset('assetsss/img/icon-service-06.png')}}" alt="">
                                        <h3 class="h3">Health Care</h3>
                                        <p>


                                            Our mission is to provide the finest medical care and treatment for every kind of disease to the child. We initiate campaign to reach to remote areas and help doctors as well as strive to provide all kinds of required medicines
                                        </p>
                                    </div>

                                </li>
                            </div>
                        </ul>

                    </div>
                </div>
        </section>
        <!-- Services Section End Here-->

        <!-- Save Lives Section Start Here-->
        <section class="save-lives text-center parallax">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                        <header class="page-header">
                            <h2>Doante for <strong>Save lives</strong></h2>
                            <p>
                                Want to be an active members of our health care campaign, just register here and donate your money.
                            </p>
                        </header>
                        <a href="{{('Campens')}}" class="btn btn-default">See our Causes</a>
                        <a data-toggle="modal" href="external.html" data-target=".donate-form" class="btn btn-default">Donate today</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Save Lives Section Start Here-->

        <!-- We Help Section Start Here -->
        <section class="we-help text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <header class="page-header">
                            <h2>How We Help, <strong class="border-none">Several Ways</strong></h2>
                        </header>
                        <div class="row">
                            <div class="cols-xs-12 col-sm-6 anim-section">
                                <div class="thumbnail zoom">
                                    <a href="#" class="img-thumb">
                                        <img src="{{asset('assetsss/img/img-slide-05.jpg')}}" alt="">
                                    </a>
                                    <div class="caption">
                                        <h3 class="h3">
                                            <a href="#">
                                                Reunit Children with Family
                                            </a>
                                        </h3>
                                        <p>
                                            Human trafficking is the major issue in the Africa.We have partner from huge and powerful organizations, who help in finding the children and bring them to their respect family.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="cols-xs-12 col-sm-6 anim-section">
                                <div class="thumbnail zoom">
                                    <a href="#" class="img-thumb">
                                        <img src="{{asset('assetsss/img/img-slide-03.jpg')}}" alt="">
                                    </a>
                                    <div class="caption">
                                        <h3 class="h3"><a href="#">Provide Food</a></h3>
                                        <p>
                                            In order to curb malnutrition effectively, our team is working relentlessly to provide the required food material to the children residing in different parts of the city.
                                        </p>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- We Help Section Start Here -->

    </div>

</div>
<!-- site content ends -->

@endsection