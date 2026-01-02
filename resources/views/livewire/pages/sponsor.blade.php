<div class="bg-slate-50">
    <div class="bg-local pt-20 pb-52 lg:px-20 px-5 bg-blog">
        <div class="flex flex-col lg:flex-row gap-4" id="sponsorship">
            <div class="w-full lg:w-1/3">
                <h1 class="text-4xl text-primary font-semibold mb-3">{{__('menu.sponsorship')}}</h1>
                <p class="text-gray-500 mb-2">{{__('home.sponsorship_detail')}}</p>
                <a href="mailto:konasperhatikl2025@pharma-pro.com" class="btn btn-outline-primary px-10"><i
                        class="fa fa-compass"></i>{{__('menu.contact_us')}}</a>
            </div>
            <div
                class="flex border rounded-2xl border-gray-300 flex-col gap-4 py-4 w-full lg:w-9/12 justify-center items-center mx-auto">
                <div class="stats stats-vertical lg:stats-horizontal shadow">
                    <div class="stat">
                        <div class="stat-figure text-primary">
                            <i class="fa-regular fa-user text-3xl"></i>
                        </div>
                        <div class="stat-title">{{__('menu.contact_ps')}}</div>
                        <div class="stat-value text-primary">Ms. Nova</div>
                        <!-- <div class="stat-desc">Ms. Nova</div> -->
                    </div>

                    <div class="stat">
                        <div class="stat-figure text-primary">
                            <i class="fa-solid fa-location-dot text-3xl"></i>
                        </div>
                        <div class="stat-title">{{__('menu.secretariat')}}</div>
                        <!-- <div class="stat-value text-primary">Ms. Nova</div> -->
                        <div class="stat-desc">Perkantoran Duta Merlin <br> Blok C 35 - 36 <br>
                            Jl. Gajah Mada 3-5, Jakarta </div>
                    </div>
                </div>
                <div class="stats stats-vertical lg:stats-horizontal shadow">
                    <div class="stat">
                        <div class="stat-figure text-primary">
                            <i class="fa-solid fa-phone text-3xl"></i>
                        </div>
                        <div class="stat-title">Call</div>
                        <div class="stat-desc">+62 21 6386 9502</div>
                    </div>

                    <div class="stat">
                        <div class="stat-figure text-primary">
                            <i class="fa-solid fa-envelope-open text-3xl"></i>
                        </div>
                        <div class="stat-title">Email</div>

                        <div class="stat-desc"><a
                                href="mailto:konasperhatikl2025@pharma-pro.com">konasperhatikl2025@pharma-pro.com</a>
                        </div>
                    </div>
                    <div class="stat">
                        <div class="stat-figure text-primary">
                            <i class="fa-brands fa-whatsapp text-3xl text-green-600"></i>
                        </div>
                        <div class="stat-title">Whatsapp</div>

                        <div class="stat-desc"><a href="https://wa.me/+6282277832431"> +62 822-7783-2431</a></div>
                    </div>
                    <div class="stat">
                        <div class="stat-figure text-primary">
                            <i class="fa-brands fa-instagram text-3xl text-rose-500"></i>
                        </div>
                        <div class="stat-title">Instagram</div>
                        <div class="stat-desc"><a
                                href="https://www.instagram.com/konasperhatilombok/?igsh=c291amg1emZ3OXRo">@konasperhatilombok</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="mt-10 lg:mt-16 pt-10 border-t border-dashed border-gray-500" id="sponsorlist">
            <h1 class="text-4xl text-primary font-semibold mb-5">{{__('menu.sponsorlist')}}</h1>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4" >
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
        </div>
    </div>
</div>