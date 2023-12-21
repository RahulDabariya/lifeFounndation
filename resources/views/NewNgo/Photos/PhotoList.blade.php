
@extends('NewNgo/comman')

@section('contacnt')



<main id="main" class="main">


    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="container" style="width: 900px;">
                    <h2>Courses Table</h2>
                    <a type="button" class="btn btn-success" href="{{url('/PhotoAdd')}}">Add</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sr.Num</th>
                                <th>Image</th>
                                <th>Heading</th>
                                <th>About</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($photo as $key=>$photoss)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td><img src="{{url('imagess/'.$photoss->image)}}" width="50"></td>
                                <td>{{$photoss->heading}}</td>
                                <td>{{$photoss->about}}</td>
                                <td>
                                    <a type="button" class="btn btn-danger" href="/deleted/{{ $photoss->id }}">Delete</a>

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
