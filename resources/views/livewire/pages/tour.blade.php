<div class="bg-slate-50">
    <div class="pt-16 pb-36 lg:px-20 px-2 bg-local">
        <div class="flex-col flex gap-3 mb-10">
            <h4 class="text-2xl text-primary font-semibold">{{ __('menu.social_program') }}</h4>
            <h1 class="text-4xl text-primary font-semibold">{{ __('menu.tour') }}</h1>
        </div>

        <div class="card w-full bg-primary text-primary mb-5">
            <div class="card-body text-white">
                <div class="flex flex-col">
                    <p>{{ __('home.tour_info')}} </p>
                </div>

            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 px-2 lg:px-0">
            @foreach ($tours as $tour)
            <div class="card bg-base-100 w-full shadow hover:shadow-xl">
                <figure>
                    <img src="{{ asset('storage/' . $tour->image)}}" alt="{{$tour->title}}" />
                </figure>
                <div class="card-body items-center text-center">
                    <h2 class="card-title">{{$tour->title}}</h2>
                    {!! str($tour->description)->markdown()->sanitizeHtml() !!}
                    <div class="card-actions w-full border">
                        <a href="{{$tour->url}}" class="btn btn-primary btn-block">Book Now</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <hr class="my-5 lg:my-10">
        <div class="flex-col flex gap-3 mb-10">
            <h4 class="text-2xl text-primary font-semibold">{{ __('menu.social_program') }}</h4>
            <h1 class="text-4xl text-primary font-semibold">{{ __('menu.walk') }}</h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 px-2 lg:px-0">
            @foreach ($sports as $sport)
            <div class="card bg-base-100 w-full shadow hover:shadow-xl">
                <figure>
                    <img src="{{ asset('storage/' . $sport->image)}}" alt="{{$sport->title}}" />
                </figure>
                <div class="card-body items-center text-center">
                    <h2 class="card-title">{{$sport->title}}</h2>
                    {!! str($sport->description)->markdown()->sanitizeHtml() !!}
                    <div class="card-actions w-full border">
                        <a href="{{$sport->url}}" class="btn btn-primary btn-block">Book Now</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>