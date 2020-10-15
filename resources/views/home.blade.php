@extends('layout')

@section('content')
    <main>
        <div class="container">

            <div class="row p-4">
                <div class="col-xl d-flex justify-content-center">
                    <img src="{{URL::asset('image/timeforthai-mobile.jpg')}}" alt="LOGO" height="200" width="200">
                </div>
            </div>

            <div class="row pt-4">
                <div class="col-md d-flex justify-content-center">
                    <img src=" " alt="Gallery_1">
                </div>
                <div class="col-md d-flex justify-content-center">
                    <img src="" alt="Gallery_2">
                </div>
                <div class="col-md d-flex justify-content-center">
                    <img src="" alt="Gallery_3">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row pt-2">
                <div class="col-md d-flex justify-content-center">
                    <img src="" alt="Gallery_4">
                </div>
                <div class="col-md d-flex justify-content-center">
                    <img src="" alt="Gallery_5">
                </div>
                <div class="col-md d-flex justify-content-center">
                    <img src="" alt="Gallery_6">
                </div>
            </div>
        </div>
    </main>
@endsection
