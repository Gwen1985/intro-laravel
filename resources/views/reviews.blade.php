@extends('layout')

@section('content')

    <main class="container">

        <div class="row">
            <label for="name"></label>
            <input required type="text" id="name" name="name" value="<?php echo $name; ?>" placeholder="Name">
        </div>
    </main>
@endsection
