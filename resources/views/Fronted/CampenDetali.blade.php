@extends('Fronted/comman')
@section('contacnt')




<!-- site content -->
<div id="main">
    <!--Breadcrumb Section Start Here-->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Campen Details</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{'LifeFoundation'}}">Home</a>
                        </li>
                        <li class="active">
                            Event
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--Breadcrumb Section End Here-->

    <div class="cause-page content-wrapper" id="page-info">
        <div class="container">

            <!-- our causes detail-->

            <div class="anim-section">
                <div class="row">
                    <div class="col-xs-12 col-sm-9 left-block">

                        <div class="event_detail">
                            <figure>
                                <img src="{{ url('imagess/' . $Campen->image) }}" alt="img_container" style="width: 750px;">
                            </figure>
                        </div>

                        <div class="event_heading clearfix">
                            <h2><a href="#">{{ $Campen->name }}</a></h2>

                            <div class="event_description">
                                <p>
                                    {{ $Campen->about }}
                                </p>
                            </div>
                        </div>
                        <a data-toggle="modal" href="external.html" data-target=".donate-form" class="btn btn-default">DONATE NOW</a>
                    </div>
                    <div class="col-xs-6 col-sm-3 left-block ">
                        <!-- Archives   -->
                        <aside class="media">
                            <h3>Donation list </h3>
                            <ul class="archives">
                                <li>
                                    <a href="#">
                                        March 2013 <span class="pull-right">(12)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        February 2013 <span class="pull-right">(12)</span>
                                    </a>
                                </li>
                                <li><a href="#">
                                        January 2013 <span class="pull-right">(43)</span>
                                    </a>
                                </li>
                                <li><a href="#">
                                        December 2012 <span class="pull-right">(12)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        November 2012 <span class="pull-right">(32)</span>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>

            </div>

            <!-- our causes detail-->

        </div>

    </div>

</div>
<!-- site content ends -->

@endsection