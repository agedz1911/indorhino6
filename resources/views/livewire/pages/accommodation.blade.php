<div class="bg-blog pt-16 pb-36 lg:px-20 px-2 ">

    <div class="flex-col flex gap-3 mb-10">
        <h4 class="text-2xl text-primary font-semibold">{{ __('menu.accommodation') }}</h4>
        <h1 class="text-4xl text-primary font-semibold">{{ __('menu.hotel_resv') }}</h1>
        <p class="text-gray-500">{{__('home.info_accommodation')}}</p>
    </div>

    @if (count($accommodations) > 0)
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 px-2 lg:px-0">
        @foreach ($accommodations as $accommodation)
        <div class="card glass card-compact w-full shadow-md">
            <figure>
                <img src="{{ asset('storage/' . $accommodation->image) }}" class="w-full" alt="Hotel" />
            </figure>
            <div class="card-body text-center items-center">
                <h2 class="card-title text-primary">{{$accommodation->hotel_name}}</h2>
                <div class="flex flex-row justify-center">
                    @for ($i = 1; $i <= 5; $i++) @if ($i <=$accommodation->hotel_star)
                        <i class="fa-solid fa-star text-amber-400"></i>
                        @else
                        <i class="fa-solid fa-star"></i>
                        @endif
                        @endfor
                </div>
                <p class="mt-2 mb-3 text-xs text-gray-500"><i class="fa-solid text-accent fa-circle-info"></i>
                    {{$accommodation->distance}}
                </p>
                <p class="mb-0 font-semibold text-info">{{ __('menu.room_type') }}</p>
                <div class="flex flex-col lg:flex-row justify-evenly gap-2 w-full text-sm mb-3">
                    {!! str($accommodation->price)->markdown()->sanitizeHtml() !!}
                </div>
                <div class="card-actions w-full">
                    <a href="{{$accommodation->url}}" class="btn btn-primary btn-block">{{ __('menu.book_now') }} <i
                            class="fa-solid fa-angles-right"></i></a href="{{$accommodation->url}}">
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="mt-5 px-0">
        <p class="text-gray-500 text-2xl text-center font-semibold"></p>
    </div>
    @endif

    <div class="mt-5">
        <div class="bokunWidget" data-src="https://widgets.bokun.io/online-sales/bf283687-2076-43f2-aa4b-d9ab0c0b57a3/product-list/87956"></div>
        <noscript>Please enable javascript in your browser to book</noscript>
    </div>

    <div class="flex-col flex gap-3 mb-10">
        <h4 class="text-2xl text-primary font-semibold">{{ __('menu.accommodation') }}</h4>
        <h1 class="text-4xl text-primary font-semibold">{{ __('menu.reservation_info') }}</h1>
       
    </div>

    <div class="bg-white border border-gray-200 divide-y divide-gray-200 rounded-lg">
       
        <details class="p-6 group " {{  'open'  }}    >
            <summary class="flex items-center justify-between cursor-pointer">
                <h5 class="text-xl font-semibold text-primary-900">
                   {{__('home.hotel_cancel')}}
                </h5>
                <span class="relative flex-shrink-0 ml-1.5 w-5 h-5">
                    <i class="fa-solid fa-eye absolute inset-0 w-5 h-5 opacity-0 group-open:opacity-100"></i>
                    <i class="fa-solid fa-eye-slash absolute inset-0 w-5 h-5 opacity-100 group-open:opacity-0"></i>
                </span>
            </summary>

            <p class="mt-4 leading-relaxed text-slate-500">
               {{__('home.hotel_info_cancellation')}}
            </p>
        </details>
       
    </div>
</div>

<script type="text/javascript" src="https://widgets.bokun.io/assets/javascripts/apps/build/BokunWidgetsLoader.js?bookingChannelUUID=bf283687-2076-43f2-aa4b-d9ab0c0b57a3" async></script>