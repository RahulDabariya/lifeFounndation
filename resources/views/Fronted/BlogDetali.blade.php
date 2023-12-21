@extends('Fronted/comman')
@section('contacnt')

<!-- site content -->
<div id="main">
    <!-- Breadcrumb Section Start Here -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Our Blog</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="index-2.html">Home</a>
                        </li>
                        <li class="active">
                            Blog
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End Here -->
    <div class="content-wrapper container" id="page-info">
        <div class="row">
            <div class="col-xs-12">
                <article class="blog blog-details anim-section">
                    <figure>
                        <img src="{{asset('assetsss/img/blog-pic.jpg')}}" alt="">
                    </figure>
                    <div class="row">
                        <div class="col-xs-12 col-sm-10 col-sm-offset-1 caption">
                            <h2 class="h1">Fundraising initiatives for better life of the underprivileged children in Africa</h2>
                            <p>

                                Last month, fund raising initiatives were taken up and drives were launched to attract donations for the education of the underprivileged children. Many people participated in the event and donated their heart out.
                            </p>
                            <p>
                                We assure our sponsors and contributors that the money will surely bring a great difference in the lives of these children. Almost £35m has been raised by charities using a direct debit processing platform that was rolled out by the Charities Aid Foundation last year.
                            </p>
                           
                            <h3 class="h2">Some facts and figure about donation</h3>
                            <p>

                                CAF also said that 88,294 people have set up regular, direct debit donations in the last 12 months, while a further 91,081 individuals have made one-off donations from their bank account to individual charities. The average, one-off donation made via CAF Donate is £89.
                            </p>
                            <figure>
                                <img class="pull-left" src="{{asset('assetsss/img/img-blog-details-01.jpg')}}" alt="">
                            </figure>
                            <p>

                                CAF Donate was launched in June 2014 to help ease the administrative burden of processing both online and offline donations for small to medium-sized charities. CAF also said it would make it easier for charities to take both regular donations and one-off gifts.
                            </p>
                            <p>
                                It was set up to differentiate itself from other, existing sites such as JustGiving, in that CAF Donate can be run on a charity’s own website, rather than through a third party.
                                Chris Allwood, senior product development manager at CAF, said:




                            </p>
                            
                            <p>
                                We are always motivated and poised towards betterment of children who are leading miserable lives in the impoverished areas of Africa. Your donations can help us achieve our aim.
                            </p>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </div>
</div>
<!-- site content ends -->

@endsection