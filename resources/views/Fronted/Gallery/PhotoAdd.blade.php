@extends('Fronted/comman')
@section('contacnt')

<!-- site content -->
<div id="main">
    <!--Breadcrumb Section Start Here-->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Gallery</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{('LifeFoundation')}}">Home</a>
                        </li>
                        <li class="active">
                            Gallery
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb Section End Here-->


    <div class="content-wrapper" id="page-info">

        <!-- Gallery sections Start Here -->
        <section class="we-help gallery-wrap">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12">
                        <!--Gallery Section Start Here-->
                        <div class="row gallery">
                            @foreach($Campen as $Campens)
                            <div class="cols-xs-12 col-sm-4">
                                <div class="thumbnail">
                                    <img src="{{url('imagess/'.$Campens->image)}}" alt=""></a>

                                    <h3 class="h3" style="text-align: center;"><a href="">{{$Campens->heading}}</a></h3>
                                    <p>
                                        {{$Campens->about}}
                                    </p>

                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!--Gallery Section End Here-->
                    </div>

                </div>
            </div>
        </section>
        <!-- Gallery sections Start Here -->

    </div>

</div>
<!-- site content ends -->

@endsection