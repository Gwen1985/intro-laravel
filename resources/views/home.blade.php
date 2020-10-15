@extends('layout')

@section('content')

    <main class="container">

        <div class="jumbotron">
            <div class="row">
                <div class="col-md-4 d-flex justify-content-center">
                    <img src="{{URL::asset('image/gal-0.jpg')}}" alt="gal-1"
                         class=" img-fluid rounded-sm ">
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <img src="{{URL::asset('image/gal-1.jpg')}}" alt="gal-1"
                         class="img-fluid rounded-sm">
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <img src="{{URL::asset('image/gal-2.jpg')}}" alt="gal-1"
                         class="img-fluid rounded-sm">
                </div>
            </div>
        </div>

        <div class="jumbotron">
            <div class="row">
                <div class="col-md-4 d-flex justify-content-center">
                    <img src="{{URL::asset('image/gal-3.jpg')}}" alt="gal-1"
                         class="img-fluid rounded-sm">
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <img src="{{URL::asset('image/gal-4.jpg')}}" alt="gal-1"
                         class="img-fluid rounded-sm">
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <img src="{{URL::asset('image/gal-5.jpg')}}" alt="gal-1"
                         class="img-fluid rounded-sm">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <form action="">

                </form>
            </div>
        </div>
    </main>
@endsection
