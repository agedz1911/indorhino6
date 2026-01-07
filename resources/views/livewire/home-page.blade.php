<div class="relative">
    {{-- Start Hero --}}

    <section class="hero min-h-screen mb-0 bg-[#03b7a2] bg-[url('assets/images/bg2.png')]">
        <div class="hero-overlay bg-opacity-20"></div>
        <div class="hero-content">
            <div class="z-10 relative pt-10 md:pt-14 lg:pt-32 flex flex-col md:flex-row items-start justify-between">
                <div class="px-1 order-2 lg:order-2 ">
                    <livewire:resources.flayer />
                </div>
                <div class="px-5 order-1 lg:order-1 w-full max-w-xl">
                    <img src="assets/images/logo/logo-2.png" class="w-full max-w-sm rounded-xl" alt="Banner">
                    <div class="flex text-start w-fit relative mt-5">
                        <h1 class="text-2xl lg:text-3xl text-[#be124e] font-semibold">
                            {{ __('home.title')}}
                        </h1>
                    </div>
                    {{-- <p class="italic mt-3 text-white font-semibold">" {{ __('home.theme')}} "</p> --}}
                    <p class="text-lg text-white font-semibold">{{__('home.title_credit')}}</p>
                    <p class="text-white mt-3">
                        {{ __('home.event_date')}} <br>
                        {{ __('home.venue')}}
                    </p>
                    <div class="mt-7 flex gap-4 flex-wrap">
                        <button
                            class="btn hover:bg-[#be124e] hover:border-[#be124e] shadow-none hover:text-white rounded-lg btn-lg text-sm px-5 lg:px-10">{{__('home.read_more')}}
                            <i class="fa-solid fa-angles-right text-xs"></i></button>
                        <a href="/registration" wire:navigate
                            class="text-white hover:text-white border border-white hover:bg-[#be124e] hover:border-[#be124e] focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 md:px-10 py-3 text-center  dark:border-[#be124e] dark:text-[#be124e] dark:hover:text-white dark:hover:bg-green-500 dark:focus:ring-green-300"><i
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
            <div class="card lg:w-3/4 w-full bg-gradient-to-b from-[#e5b777]  to-[#006a5f] text-white shadow-xl">
                <div class="card-body">
                    <h2 class="card-title text-4xl justify-center" id="days"></h2>
                    <p class="text-center">{{__('home.counter_day')}}</p>
                </div>
            </div>
            <div class="card bg-gradient-to-b from-[#e5b777]  to-[#006a5f] lg:w-3/4 w-full text-white shadow-xl">
                <div class="card-body">
                    <h2 class="card-title text-4xl justify-center" id="hours"></h2>
                    <p class="text-center">{{__('home.counter_hour')}}</p>
                </div>
            </div>
            <div class="card bg-gradient-to-b from-[#e5b777]  to-[#006a5f] lg:w-3/4 w-full text-white shadow-xl">
                <div class="card-body">
                    <h2 class="card-title text-4xl justify-center" id="mins"></h2>
                    <p class="text-center">{{__('home.counter_minute')}}</p>
                </div>
            </div>
            <div class="card bg-gradient-to-b from-[#e5b777]  to-[#006a5f] lg:w-3/4 w-full text-white shadow-xl">
                <div class="card-body">
                    <h2 class="card-title text-4xl justify-center" id="secs"></h2>
                    <p class="text-center">{{__('home.counter_second')}}</p>
                </div>
            </div>
            <div id="end"></div>
        </div>
        {{-- <div class="container mx-auto items-center max-w-xl">
            <div class="badge badge-primary w-full py-5">
                <marquee><span class="font-semibold italic"> {{__('home.running_teks')}} </span></marquee>
            </div>
        </div> --}}
    </div>

    <section class="px-2 lg:px-7 pb-24">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="w-full px-3 md:px-8">
                <div class="w-full pt-5">
                    <img src="assets/images/logo/logo-2.png" class="w-full max-w-sm rounded-xl" alt="Banner">
                    <div class="flex text-start w-fit relative mt-5">
                        <h1 class="text-2xl lg:text-3xl text-[#be124e] font-semibold">
                            {{ __('home.title')}}
                        </h1>
                    </div>
                    {{-- <p class="italic mt-3 font-semibold">" {{ __('home.theme')}} "</p> --}}
                    <p class="text-lg  font-semibold">{{__('home.title_credit')}}</p>
                    <p class="mt-3">
                        {{ __('home.venue')}} <br>
                        {{ __('home.event_date')}}
                    </p>
                    <div class="mt-7 flex gap-4 flex-wrap">
                        <button
                            class="btn hover:bg-[#be124e] hover:border-[#be124e] shadow-none hover:text-white rounded-lg btn-lg text-sm px-5 lg:px-10">{{__('home.read_more')}}
                            <i class="fa-solid fa-angles-right text-xs"></i></button>
                        <a href="/registration" wire:navigate
                            class="text-white border hover:text-slate-900 bg-[#be124e] border-[#be124e] focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 md:px-10 py-3 text-center  dark:border-[#be124e] dark:text-[#be124e] dark:hover:text-white dark:hover:bg-green-500 dark:focus:ring-green-300"><i
                                class="fa-solid fa-pen-to-square"></i> {{__('home.register')}}</a>
                    </div>
                </div>
            </div>
            <div class="w-full px-3">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 align-items-center">
                    <div class="flex flex-col gap-4">
                        <div class="rounded-xl bg-white shadow-lg">
                            <img src="assets/images/yogya/yogya1.png" class="w-full rounded-xl sepia-50" alt="yogya 1">
                        </div>
                        <div class="rounded-xl bg-white shadow-lg">
                            <img src="assets/images/yogya/yogya2.jpg" class="w-full rounded-xl" alt="yogya 2">
                        </div>
                    </div>
                    <div class="rounded-xl bg-white shadow-lg">
                        <img src="assets/images/yogya/yogya4.jpg" class="w-full rounded-xl object-cover h-full sepia-50"
                            alt="yogya 3">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 px-4 mb-10 bg-amber-50/30">
        <div class="container mx-auto items-center">
            <div class="flex items-center justify-between">
                <div class="badge bg-[#006a5f] px-8 py-6 rounded-2xl">
                    <h1 class="text-2xl text-white font-semibold">{{__('menu.remarks')}}</h1>
                </div>
                <i class="fa-regular text-[#006a5f] fa-message text-5xl"></i>
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
                                    <a class="text-sm text-[#b77104] hover:underline hover:cursor-pointer"
                                        href="javascript:void(0)">{{__('home.read_more')}}</a>
                                </div>
                                <div class="card-actions mt-3">
                                    <p class="font-bold text-[#006a5f]">- {{ $message->name }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a href="/congress-information#welcome-remarks"
                    class="btn btn-outline bg-[#be124e] hover:text-slate-950 text-white border-0 rounded-lg text-center w-full md:w-1/5">{{__('home.read_more')}}
                    <i class="fa-solid fa-angles-right"></i></a>
            </div>
        </div>
    </section>

    <section class="py-24 px-4 mb-10 bg-competition">
        <div class="flex flex-col items-center">
            <div class="badge bg-[#006a5f] rounded-lg p-6 mb-5">
                <h1 class="text-2xl text-white uppercase font-semibold">{{__('home.sponsorlist')}}</h1>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 mt-5">
                @foreach ($sponsors as $sponsor)
                <div class="p-2 border-x text-center opacity-75 hover:opacity-100">
                    <a href="{{$sponsor->website ? $sponsor->website : 'javascript:void(0)'}}">
                        {!! $sponsor->logo ? '<img src="' . asset('storage/' . $sponsor->logo) . '"
                            class="w-full hover:scale-110 hover:ease-out" alt="' . $sponsor->company . '" />' : '<p
                            class="text-center text-[#006a5f] text-sm">' . $sponsor->company . '</p>' !!}
                    </a>
                </div>
                @endforeach
            </div>
            <div class="flex gap-5 mt-10 flex-wrap">
                <a href="{{route('sponsor')}}"
                    class="btn bg-[#be124e] rounded-lg text-white hover:text-slate-950">{{__('home.sponsor_more')}}</a>
                <a href="mailto:indorhino2026@pharma-pro.com"
                    class="btn hover:bg-[#be124e] hover:border-[#be124e] shadow-none hover:text-white rounded-lg">{{__('home.sponsorship_btn')}}</a>
            </div>
        </div>
    </section>

    {{-- Start Map --}}
    <div class="border-t-2 border-dashed border-[#006a5f]/50"></div>
    <div class="flex items-center justify-between mb-10 px-5 lg:px-20 mt-12">
        <div class="badge bg-[#006a5f] p-8">
            <h1 class="text-2xl text-white font-semibold">{{__('menu.visit_venue')}}</h1>
        </div>
        <i class="fa-solid text-[#006a5f] fa-location-dot text-5xl"></i>
    </div>

    <div class="flex flex-col lg:flex-row gap-4 px-5 lg:px-20">
        <div class="lg:w-4/12 w-full">
            <div class="card w-full bg-[#007e6f] text-[#006a5f] pt-5 pb-5">
                <div class="card-body text-white">
                    <div class="flex flex-col mb-4">
                        <h4 class="title text-2xl font-bold">{{__('menu.visit_venue')}}:</h4>
                        <p>{{ __('home.venue')}}</p>
                    </div>
                    <div class="flex flex-col mb-4">
                        <h4 class="title text-2xl font-bold mb-0">{{__('home.visit_address')}}</h4>
                        <p class="mt-0">{{__('home.visit_address_full')}}</p>
                    </div>
                    <div class="flex flex-col mb-4">
                        <p class="hover:underline hover:text-[#be124e] hover:cursor-pointer">
                            {{__('home.visit_direction')}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:w-8/12 w-full mb-10">
            <iframe class="w-full rounded-lg"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.4749955109446!2d110.37462097485695!3d-7.73933447671649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a58e23d58705d%3A0xe3e3f1de06133d33!2sHotel%20Alana%20Yogyakarta%20Hotel%20%26%20Convention%20Center!5e0!3m2!1sid!2sid!4v1767588441366!5m2!1sid!2sid"
                width="600" height="330" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <div class="px-5 lg:px-20 pb-20 pt-10">

        <div class="flex flex-col md:flex-row gap-4 justify-between">
            <img src="assets/images/yogya/yogya2.jpg" class="w-full max-w-lg rounded-lg object-cover shadow" alt="">
            <img src="assets/images/yogya/alana-1.webp" class="w-full max-w-lg object-cover rounded-lg shadow" alt="">
            <img src="assets/images/yogya/alana-2.jpg" class="w-full max-w-lg object-cover rounded-lg shadow" alt="">
        </div>
        <a href="/visiting" class="float-end mt-5 hover:text-[#be124e]">{{__('home.read_more')}} ... <i
                class="fa-solid fa-angle-right"></i> </a>
    </div>
    {{-- End Map --}}
</div>


<script>
    document.addEventListener('livewire:navigated', function() {
        const days = document.getElementById('days');
        const hours = document.getElementById('hours');
        const minutes = document.getElementById('minutes');
        const seconds = document.getElementById('seconds');

        // Check if all elements are found
        const elementsExist = days && hours && minutes && seconds;

        // If any element is missing, log a warning and return
        if (!elementsExist) {
            console.warn('One or more countdown elements not found.');
            return;
        }

        // Get current date and time
        const currentTime = new Date();

        // Set new date 30 days from now
        const targetTime = new Date(2026, 6, 4, 8, 0, 0);

        // Update countdown time
        function updateCountdown() {
            const currentTime = new Date();
            const diff = targetTime - currentTime;

            const d = Math.floor(diff / 1000 / 60 / 60 / 24);
            const h = Math.floor((diff / 1000 / 60 / 60) % 24);
            const m = Math.floor((diff / 1000 / 60) % 60);
            const s = Math.floor((diff / 1000) % 60);

            // Update elements if they exist
            if (days) days.innerHTML = d;
            if (hours) hours.innerHTML = h < 10 ? '0' + h : h;
            if (minutes) minutes.innerHTML = m < 10 ? '0' + m : m;
            if (seconds) seconds.innerHTML = s < 10 ? '0' + s : s;
        }

        // Call updateCountdown initially and set it to run every second
        updateCountdown();
        setInterval(updateCountdown, 1000);
        let valueDisplays = document.querySelectorAll(".num");
        let interval = 4000;

        valueDisplays.forEach((valueDisplay) => {
            let startValue = 0;
            let endValue = parseInt(valueDisplay.getAttribute("data-val"));
            let duration = Math.floor(interval / endValue);
            let counter = setInterval(function() {
                startValue += 1;
                valueDisplay.textContent = startValue;
                if (startValue == endValue) {
                    clearInterval(counter);
                }
            }, duration);
        });
    });
</script>