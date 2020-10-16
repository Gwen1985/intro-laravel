@extends('layout')

@section('content')

    <main class="container">

        <div class="row">
            <form method="post" action="">
                <div class="col-md-4">
                    <label for="first_name"></label>
                    <input required type="text" id="first_name" name="first_name" placeholder="First Name">
                </div>
                <div class="col-md-4">
                    <label for="last_name"></label>
                    <input required type="text" id="last_name" name="last_name" placeholder="Last Name">
                </div>

                <label for="rate"></label>
                <input required type="text" id="rate" name="rate">
            </form>
        </div>
    </main>
@endsection


