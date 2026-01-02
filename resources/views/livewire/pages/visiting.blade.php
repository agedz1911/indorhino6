<div class="bg-slate-50">
    <div class="bg-local pt-20 pb-52 lg:px-20 px-5 bg-blog" id="lombok">
        <div class="flex-col flex mb-10">
            <h4 class="text-xl text-primary font-semibold">{{ __('home.welcome') }}</h4>
            <h1 class="text-4xl text-primary font-semibold">Lombok</h1>
            <p class="text-slate-500 mt-5">{{__('home.lombok')}}</p>
        </div>
        <div class="w-full">
            <div class="md:flex" x-data="{ selectedTab: 'cultural' }">
                <ul
                    class="flex-column w-full md:max-w-52 space-y space-y-4 text-sm font-medium text-slate-50 dark:text-white md:me-4 mb-4 md:mb-0">
                    <li>
                        <a href="#" @click="selectedTab = 'cultural'"
                            :class="{' bg-primary dark:bg-primary': selectedTab === 'cultural', 'hover:text-slate-300 bg-perhati-500 hover:bg-slate-600 dark:bg-perhati-500 dark:hover:bg-slate-200 dark:hover:text-slate-300': selectedTab !== 'cultural'}"
                            class="inline-flex items-center px-4 py-3 rounded-lg w-full" role="tab"
                            aria-selected="selectedTab === 'cultural'">
                            {{__('home.lombok_cultural')}}
                        </a>
                    </li>
                    <li>
                        <a href="#" @click="selectedTab = 'culinary'"
                            :class="{' bg-primary dark:bg-primary': selectedTab === 'culinary', 'hover:-text-slate-300-300 bg-perhati-500 hover:bg-slate-600 dark:bg-perhati-500 dark:hover:bg-slate-200 dark:hover:text-slate-300': selectedTab !== 'culinary'}"
                            class="inline-flex items-center px-4 py-3 rounded-lg w-full" role="tab"
                            aria-selected="selectedTab === 'culinary'">
                            {{__('home.lombok_culinary')}}
                        </a>
                    </li>
                </ul>

                <div class="p-6 bg-primary bg-opacity-10 text-medium rounded-lg w-full">
                    <div class="px-2 py-4">
                        <div x-show="selectedTab === 'cultural'" id="tabpanelcultural" role="tabpanel"
                            aria-label="cultural">

                            @foreach ($culturals as $cultural)
                            <div class="flex flex-col lg:flex-row gap-5 mb-5">
                                <img src="{{asset('storage/' . $cultural->image)}}"
                                    class="w-full object-cover max-w-sm rounded-xl" alt="">
                                <div>
                                    <h3 class="text-lg font-bold mb-2">{{$cultural->title_visit}}</h3>
                                    <div class="text-slate-500 flex flex-col gap-3">
                                        {!! str($cultural->description)->markdown()->sanitizeHtml() !!}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div x-show="selectedTab === 'culinary'" id="tabpanelculinary" role="tabpanel"
                            aria-label="culinary Coffee">
                            @foreach ($culinarys as $culinary)
                            <div class="flex flex-col lg:flex-row gap-5 mb-5">
                                <img src="{{asset('storage/' . $culinary->image)}}"
                                    class="w-full object-cover max-w-sm rounded-xl" alt="">
                                <div>
                                    <h3 class="text-lg font-bold mb-2">{{$culinary->title_visit}}</h3>
                                    <div class="text-slate-500 flex flex-col gap-3">
                                        {!! str($culinary->description)->markdown()->sanitizeHtml() !!}
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-20 pb-52 lg:px-20 px-5" id="venue">
        <div class="flex-col flex mb-10">
            <h4 class="text-xl text-primary">{{__('home.visit_venue')}}</h4>
            <h1 class="text-4xl text-primary font-semibold">Lombok Raya Hotel</h1>
        </div>
        <div class="flex flex-col lg:flex-row gap-5">
            <img src="/images/lombok/lombok-raya.jpg" class="w-full max-w-xl rounded-xl shadow-md" alt="">
            <div class="w-full">
                <h1 class="text-xl font-semibold mb-3">Stay at the heart of Lombok</h1>
                <p class="text-slate-500 mb-2">{{__('home.visit_hotel_title')}}</p>
                <p class="text-slate-500 mb-2">{{__('home.visit_hotel_desc_2')}}.</p>
                <p class="text-slate-500 mb-2">{{__('home.visit_hotel_desc_3')}}</p>
                <p class="text-slate-500 mb-2">{{__('home.visit_hotel_desc_4')}}</p>
            </div>
        </div>
    </div>
</div>