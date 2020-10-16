@extends('layout')

@section('content')

    <main class="container">
        <form action="{{ route('reviews.store') }}" method="POST" class="py-3">
            @csrf

            <div class="row">

                <div class="col-md-4 d-flex justify-content-center">
                    <label for="first_name" class="">First
                        Name&nbsp;&nbsp; </label>
                    <input type="text" id="first_name" name="first_name"
                           class=" <?php echo (empty($nameFirstError)) ? 'border-gray-200 focus:border-gray-500' : 'border-red-500'; ?>">
                </div>

                <div class="col-md-4 d-flex justify-content-center">
                    <label for="last_name" class="">Last
                        Name&nbsp;&nbsp; </label>
                    <input type="text" id="last_name" name="last_name"
                           class=" <?php echo (empty($nameLastError)) ? 'border-info-200 focus:border-info-500' : 'border-red-500'; ?>">
                </div>

                <div class="col-md-4 d-flex justify-content-center">
                    <div class="range-slider">
                        <label for="rate"
                               class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Rating</label>
                        <input id="rate" name="rate" class="range-slider__range" type="range" value="5" min="1.0"
                               max="5.0"
                               step="1">
                        <span id="rate_value" class="range-slider__value">5</span>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-12 pt-4 d-flex justify-content-center">
                    <label for="message" class="">
                        Message&nbsp;&nbsp; </label>
                    <textarea id="message" name="message" rows="4" cols="100"
                              class="pl-4"></textarea>
                </div>

            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="">Post message</button>
            </div>
        </form>

        <script>
            let slider = document.getElementById("rate");
            slider.onchange = function (event) {
                let output = document.getElementById("rate_value");
                output.innerHTML = slider.value;
            }
        </script>
        @if(session()->has('message'))
            <div class="flex items-center rounded-lg mt-2 mb-2 border-blue-900 bg-blue-500 text-white text-sm font-bold px-4 py-3" role="alert" >
{{--                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" >--}}
{{--                    <path--}}
{{--                        d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />--}}
{{--                </svg >--}}
                <p >{{ session()->get('message') }}</p >
            </div >
        @endif

    </main>

@endsection
