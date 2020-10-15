<header>

    <div class="row bg-dark text-white">

        <div class="col-md-4 d-flex justify-content-center">
            <img src="{{URL::asset('image/logo.png')}}" alt="LOGO" height="80" width="180">
        </div>

        <div class="col-md-4 ">
        </div>

        <div class="col-md-4 ">
            <a href="{{ url('/') }}" class="text-sm text-gray-700">
                <button type="button" class="btn btn-outline-light align-middle"> home</button>
            </a>

            <a href="{{ url('/reviews') }}" class="text-sm text-gray-700">
                <button type="button" class="btn btn-outline-light"> reviews</button>
            </a>
        </div>

    </div>

</header>
