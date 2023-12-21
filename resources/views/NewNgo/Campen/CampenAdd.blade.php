
@extends('NewNgo/comman')

@section('contacnt')




<main id="main" class="main">

    <section class="section">
        <h2>Campens Add</h2>
        <div class="container">
            <form class="form-inline" method="POST" enctype="multipart/form-data">
                @csrf

                

 
                <div class="form-group">
                    <label class="sr-only" for="text">Campen Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Campen Name" name="name">
                    @error('name')
                    <p style="color:red">{{$message}}</p>
                    @enderror
                </div><br>





                <div class="form-group">
                    <label for="text">Image:</label>
                    <input type="file" class="form-control" id="image" placeholder="Upload Photo" name="image">

                    @error('image')
                    <p style="color:red">{{$message}}</p>
                    @enderror
                </div><br>


                <div class="form-group">
                    <label class="sr-only" for="text">About:</label>
                    <input type="text" class="form-control" id="about" placeholder="Enter About Us" name="about">
                    @error('about')
                    <p style="color:red">{{$message}}</p>
                    @enderror
                </div><br>




                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </section>

</main><!-- End #main -->


@endsection