<div class="relative">
    {{-- Start Hero --}}

    <section class="hero min-h-screen mb-0 bg-[#03b7a2] bg-[url('assets/images/bg2.png')]">
        <div class="hero-overlay bg-opacity-20"></div>
        <div class="hero-content">
            <div class="z-10 relative pt-10 md:pt-14 lg:pt-32 flex flex-col md:flex-row items-start justify-between">
                <div class="px-1 order-2 lg:order-2">
                    <livewire:resources.flayer />
                </div>
                <div class="px-5 order-1 lg:order-1 w-full max-w-xl">
                    <img src="assets/images/logo/logo-2.png" class="w-full max-w-sm rounded-xl" alt="Banner">
                    <div class="flex text-start w-fit relative mt-5">
                        <h1 class="text-2xl lg:text-3xl text-[#008068] font-semibold">
                            {{ __('home.title')}}
                        </h1>
                    </div>
                    <p class="italic mt-3 text-white font-semibold">" {{ __('home.theme')}} "</p>
                    <p class="text-white mt-3">
                        {{ __('home.hotel')}}, {{ __('home.venue')}} <br>
                        {{ __('home.event_date')}}
                    </p>
                    <div class="mt-7 flex gap-4 flex-wrap">
                        <button class="btn btn-accent rounded-lg btn-lg text-sm px-5 lg:px-10">{{__('home.read_more')}} <i class="fa-solid fa-angles-right text-xs"></i></button>
                        <a href="/registration" wire:navigate
                            class="text-white hover:text-white border border-white hover:bg-[#008068] hover:border-[#008068] focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 md:px-10 py-3 text-center  dark:border-[#008068] dark:text-[#008068] dark:hover:text-white dark:hover:bg-green-500 dark:focus:ring-green-300"><i
                                class="fa-solid fa-pen-to-square"></i> {{__('home.register')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- End Hero --}}
    <div class="md:-mt-20 mb-20 lg:mb-40 container mx-auto">
        <div class="grid grid-cols-2  md:grid-cols-4 justify-items-center px-3 w-full gap-2  mt-5 md:mt-8"
            id="countdown">
            <div class="card lg:w-3/4 w-full bg-[#007e6f] text-white shadow-xl">
                <div class="card-body">
                    <h2 class="card-title text-4xl justify-center" id="days"></h2>
                    <p class="text-center">{{__('home.counter_day')}}</p>
                </div>
            </div>
            <div class="card bg-[#007e6f] lg:w-3/4 w-full text-white shadow-xl">
                <div class="card-body">
                    <h2 class="card-title text-4xl justify-center" id="hours"></h2>
                    <p class="text-center">{{__('home.counter_hour')}}</p>
                </div>
            </div>
            <div class="card bg-[#007e6f] lg:w-3/4 w-full text-white shadow-xl">
                <div class="card-body">
                    <h2 class="card-title text-4xl justify-center" id="mins"></h2>
                    <p class="text-center">{{__('home.counter_minute')}}</p>
                </div>
            </div>
            <div class="card bg-[#007e6f] lg:w-3/4 w-full text-white shadow-xl">
                <div class="card-body">
                    <h2 class="card-title text-4xl justify-center" id="secs"></h2>
                    <p class="text-center">{{__('home.counter_second')}}</p>
                </div>
            </div>
            <div id="end"></div>
        </div>
        <div class="container mx-auto items-center">
            <div class="badge badge-primary w-full py-5">
                <marquee><span class="font-semibold italic"> {{__('home.running_teks')}} </span></marquee>
            </div>
        </div>
    </div>

    {{-- Start About --}}
    <div class="pb-24 px-4 mb-5 container mx-auto items-center">
        <div class="flex flex-col gap-5 justify-between lg:flex-row">
            <div class="mockup-window bg-gray-200 relative border w-full lg:w-1/2">
                <div class="absolute right-0 px-4 top-3">
                    <p class="text-black font-semibold"><i class="fa-solid fa-circle-dot text-green-500"></i> PERHATI-KL
                    </p>
                </div>
                <div class="bg-gray-50 flex justify-center px-4 py-16">
                    <iframe class="w-full rounded-lg" width="560" height="315" src="https://www.youtube.com/embed/Kcd5KA6jubM?si=vNVxu729CKcTdtSu"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    {{-- <iframe class="w-full rounded-lg" width="560" height="400"
                        src="https://www.youtube.com/embed/EEwjG5WVJ98?si=Bxh9cjaYtqfO64no" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                </div>
            </div>
            <div class="w-full lg:w-1/2 px-0 lg:pl-10 lg:py-5">
                <h1 class="text-4xl mt-5 text-info font-bold">{{__('home.title')}} </h1>
                <h1 class="text-xl mt-5 text-info font-bold">{{__('home.association')}}</h1>
                <p class="text-slate-600 font-semibold italic mt-5">"{{__('home.theme')}}"
                </p>
                <div class="font-semibold mt-5 text-slate-500">
                    <p>{{ __('home.hotel')}}, {{__('home.venue')}} </p>
                    <p>{{__('home.event_date')}}</p>
                </div>

                <div class="lg:mt-10 mt-5 flex items-center gap-4">
                    <a href="/registration"
                        class="btn w-1/3 btn-primary border-none text-white">{{__('home.register')}}</a>
                    <a href="/congress-information" class="btn w-1/3 btn-outline-primary ">{{__('home.read_more')}}</a>
                </div>
            </div>
            <livewire:resources.flayer />
        </div>
    </div>
    {{-- End About --}}
    <div class="py-24 px-4 mb-10 bg-slate-100">
        <div class="container mx-auto items-center">
            <div class="flex items-center justify-between">
                <div class="badge badge-primary p-8">
                    <h1 class="text-2xl text-white font-semibold">{{__('menu.remarks')}}</h1>
                </div>
                <i class="fa-regular text-primary fa-message text-5xl"></i>
            </div>
            <div class="flex flex-col items-center">
                <div class="pt-20 pb-10 justify-center flex md:items-center lg:items-start flex-col lg:flex-row gap-5">
                    @foreach ($messages as $message)
                    <div class="flex items-start flex-row gap-3">
                        @if ($message->image == null)
                        <div class="">
                            <div class="w-20 rounded-md">
                                <img src="{{ asset('images/speakers.jpg') }}" alt="Default Doctor Image"
                                    class="object-cover rounded-lg w-20" />
                            </div>
                        </div>
                        @else

                        <div class="">
                            <div class="w-20 rounded-md bg-gradient-to-b from-perhati-500 to-perhati-200">
                                <img src="{{ asset('storage/' . $message->image) }}"
                                    class="object-cover w-20 rounded-lg" alt="{{ $message->name }}" />
                            </div>
                        </div>

                        @endif
                        <div class="card bg-base-100 w-full lg:w-96 shadow-xl">
                            <div class="card-body ">
                                <h2 class="card-title text-biscay-500">{!! $message->title !!}</h2>
                                <div class="line-clamp-6">{!! $message->description !!}
                                </div>
                                <div class="card-actions justify-end">
                                    <a class="text-sm text-perhati-600"
                                        href="javascript:void(0)">{{__('home.read_more')}}</a>
                                </div>
                                <div class="card-actions mt-3">
                                    <p class="font-bold text-primary">- {{ $message->name }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a href="/congress-information#welcome-remarks"
                    class="btn btn-primary  text-center rounded-badge border w-full md:w-1/5">{{__('home.read_more')}}
                    <i class="fa-solid fa-angles-right"></i></a>
            </div>
        </div>
    </div>

    {{-- Start Counter --}}
    <div class="bg-scroll bg-counter relative lg:px-20 px-2 pt-14 pb-24">
        <div class="flex flex-col lg:flex-row gap-2 justify-center">
            <div class="card bg-base-100 w-full max-w-4xl shadow-md">
                <div class="card-body">
                    <h2 class="card-title mb-5">{{ __('home.tgl_penting')}}</h2>
                    <div class="overflow-x-auto">
                        <table class="table">
                            <tbody>
                                <tr class="w-full">
                                    <th class=" w-1/2">{{ __('home.tgl_penting_ws')}}</th>
                                    <td class="bg-perhati-500 text-white">{{__('home.tgl_ws')}}</td>
                                </tr>
                                <tr class="w-full">
                                    <th class=" w-1/2">{{ __('home.tgl_penting_opening')}}</th>
                                    <td class="bg-perhati-500 text-white">{{__('home.tgl_opening')}}</td>
                                </tr>
                                <tr class="w-full">
                                    <th class=" w-1/2">{{ __('home.tgl_penting_congress')}}</th>
                                    <td class="bg-perhati-500 text-white">{{__('home.tgl_congress')}}</td>
                                </tr>
                                <tr class="w-full">
                                    <th class=" w-1/2">{{ __('home.tgl_penting_paper')}}</th>
                                    <td class="bg-perhati-500 text-white">{{__('home.tgl_paper')}}</td>
                                </tr>
                                <tr class="w-full">
                                    <th class=" w-1/2">{{ __('home.tgl_penting_dinner')}}</th>
                                    <td class="bg-perhati-500 text-white">{{__('home.tgl_dinner')}}</td>
                                </tr>
                                <tr class="w-full">
                                    <th class=" w-1/2">{{ __('home.tgl_penting_expo')}}</th>
                                    <td class="bg-perhati-500 text-white">{{__('home.tgl_expo')}}</td>
                                </tr>
                                <tr class="w-full">
                                    <th class=" w-1/2">{{ __('home.tgl_penting_early')}}</th>
                                    <td class="bg-perhati-500 text-white">{{__('home.tgl_early')}}</td>
                                </tr>
                                <tr class="w-full">
                                    <th class=" w-1/2">{{ __('home.tgl_penting_regular_reg')}}</th>
                                    <td class="bg-perhati-500 text-white">{{__('home.tgl_regular')}}</td>
                                </tr>
                                <tr class="w-full">
                                    <th class=" w-1/2">{{ __('home.tgl_penting_abstract')}}</th>
                                    <td class="bg-perhati-500 text-white">{{__('home.tgl_abstract')}}</td>
                                </tr>
                                <tr class="w-full">
                                    <th class=" w-1/2">{{ __('home.tgl_penting_acc')}}</th>
                                    <td class="bg-perhati-500 text-white">{{__('home.tgl_acc')}}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="mockup-window  bg-slate-200 relative border w-full">
                <div class="absolute right-0 px-4 top-3">
                    <p class="text-black font-semibold"><i class="fa-solid fa-circle-dot text-green-500"></i> PERHATI-KL
                    </p>
                </div>
                <div class="bg-gray-50 flex justify-center px-4 py-16">
                    <iframe class="w-full rounded-lg" width="560" height="400"
                        src="https://www.youtube.com/embed/ahK1_sWsGlA?si=0EMqYQYtm0C6FSKn" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>
            </div>
        </div>
    </div>
    {{-- End Counter --}}
    <div class="mb-10 lg:mb-20 px-5 lg:px-20 mt-12 flex flex-col items-center">
        <div class="badge badge-primary p-6 mb-5">
            <h1 class="text-2xl text-white uppercase font-semibold">{{__('menu.sponsorlist')}}</h1>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 mt-5">
            @foreach ($sponsors as $sponsor)
            <div class="p-2 border-x text-center opacity-75 hover:opacity-100">
                <a href="{{$sponsor->website ? $sponsor->website : 'javascript:void(0)'}}">
                    {!! $sponsor->logo ? '<img src="' . asset('storage/' . $sponsor->logo) . '"
                        class="w-full hover:scale-110 hover:ease-out" alt="' . $sponsor->company . '" />' : '<p
                        class="text-center text-primary text-sm">' . $sponsor->company . '</p>' !!}
                </a>
            </div>
            @endforeach
        </div>
        <div class="flex gap-5 mt-10 flex-wrap">
            <a href="/sponsor#sponsorlist" class="btn btn-primary">{{__('home.sponsor_more')}}</a>
            <a href="mailto:konasperhatikl2025@pharma-pro.com" class="btn">{{__('home.sponsorship_btn')}}</a>
        </div>
    </div>

    {{-- Start Map --}}
    <div class="border-t-2 border-dashed "></div>
    <div class="flex items-center justify-between mb-10 px-5 lg:px-20 mt-12">
        <div class="badge badge-primary p-8">
            <h1 class="text-2xl text-white font-semibold">{{__('home.visit')}}</h1>
        </div>
        <i class="fa-solid text-primary fa-location-dot text-5xl"></i>
    </div>

    <div class="flex flex-col lg:flex-row gap-4 px-5 lg:px-20">
        <div class="lg:w-5/12 w-full">
            <div class="card w-full bg-[#007e6f] text-primary pt-5 pb-5">
                <div class="card-body text-white">
                    <div class="flex flex-col mb-4">
                        <h4 class="title text-2xl font-bold">{{__('home.visit_venue')}}:</h4>
                        <p>{{ __('home.hotel')}} {{ __('home.venue')}}</p>
                    </div>
                    <div class="flex flex-col mb-4">
                        <h4 class="title text-2xl font-bold mb-0">{{__('home.visit_address')}}</h4>
                        <p class="mt-0">{{__('home.visit_address_full')}}</p>
                    </div>
                    <div class="flex flex-col mb-4">
                        <p class="hover:underline hover:text-amber-300 hover:cursor-pointer">
                            {{__('home.visit_direction')}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:w-7/12 w-full mb-10">
            <iframe class="w-full rounded-lg"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.063525794491!2d116.11609457486998!3d-8.589891087201694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf5945f01bed%3A0xcfe52a9fac79d466!2sLombok%20Raya%20Hotel!5e0!3m2!1sid!2sid!4v1740711344052!5m2!1sid!2sid"
                width="600" height="330" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </div>
    <div class="px-5 lg:px-20 pb-20 pt-10">

        <div class="flex flex-col md:flex-row gap-4 justify-between">
            <img src="images/lombok/sade.jpg" class="w-full max-w-md rounded-lg object-cover shadow" alt="">
            <img src="images/lombok/rinjani.jpg" class="w-full max-w-md object-cover rounded-lg shadow" alt="">
            <img src="images/lombok/lombok-raya.jpg" class="w-full max-w-md object-cover rounded-lg shadow" alt="">
        </div>
        <a href="/visiting" class="float-end mt-5 hover:text-amber-500">{{__('home.read_more')}} ... <i
                class="fa-solid fa-angle-right"></i> </a>
    </div>
    {{-- End Map --}}

    <div class="border-t-2 border-dashed "></div>
    <div class="flex items-center justify-between mb-10 px-5 lg:px-20 mt-12">
        <div class="badge badge-primary p-8">
            <h1 class="text-2xl text-white font-semibold">{{__('menu.social_program')}}</h1>
        </div>
        <i class="fa-solid text-primary fa-location-dot text-5xl"></i>
    </div>
    <div class="px-5 lg:px-20 pb-20 pt-10">
        <div class="card w-full bg-[#007e6f] text-primary pt-5 pb-5">
            <div class="card-body text-white">
                <div class="flex flex-col mb-4">
                    <p>{{ __('home.tour_info')}} </p>
                </div>
                <div class="flex flex-col mb-4">
                    <h4 class="title text-2xl font-bold mb-0">{{__('home.tour_reservation')}}</h4>
                    <a href="https://forms.gle/KqmBaXheSu4TFf8fA" class="mt-0">{{__('home.link_tour')}}</a>
                </div>
                <div class="flex flex-col mb-4">
                    <h4 class="title text-2xl font-bold mb-0">{{__('home.sport_reservation')}}</h4>
                    <a href="https://forms.gle/1CvzQuLHQwbaXH136" class="mt-0">{{__('home.link_sport')}}</a>
                </div>

            </div>
        </div>
        <div class="flex flex-wrap gap-1 mt-4">
            @foreach ($tours as $tour)
            <div class="card bg-base-100 image-full w-full max-w-lg">
                <figure>
                    <img src="{{asset('storage/' . $tour->image)}}"
                        class="w-full max-w-md rounded-lg object-cover shadow" alt="{{$tour->title}}" />
                </figure>
                <div class="card-body flex items-center justify-center">
                    <h2 class="card-title">{{$tour->title}}</h2>
                    {!! str($tour->description)->markdown()->sanitizeHtml() !!}
                    <div class="card-actions">
                        <a href="{{$tour->url}}" class="btn btn-outline">Book Now</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a href="/social-program" class="float-end mt-5 hover:text-amber-500">{{__('home.read_more')}} ... <i
                class="fa-solid fa-angle-right"></i> </a>
    </div>
</div>
