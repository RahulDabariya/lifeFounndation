@extends('NewNgo/comman')

@section('contacnt')



<main id="main" class="main">


    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="container" style="width: 900px;">
                    <h2>Campen List</h2>
                    <a type="button" class="btn btn-success" href="{{url('/CampenAdd')}}">Add</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sr.Num</th>
                                <th>Campen Name</th>
                                <th>Image</th>
                                <th>About</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Campen as $key=>$Campens)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$Campens->name}}</td>
                                <td><img src="{{url('imagess/'.$Campens->image)}}" width="50"></td>
                                <td>{{$Campens->about}}</td>
                                <td>
                                    <a type="button" class="btn btn-success" href="/CampenEdit/{{$Campens->id}}">Edit</a>
                                    <a type="button" class="btn btn-danger" href="/deletedd/{{ $Campens->id }}">Delete</a>

                                </td>

                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>

            </div>

        </div>

    </section>
</main>


@endsection