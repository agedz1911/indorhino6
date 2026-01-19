<div class="">
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-t from-[#D9F9F5]/10 to-[#008795]/80"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-white uppercase text-2xl font-semibold tracking-wide lg:text-4xl">{{__('menu.visit')}}
            </h2>
        </div>
    </section>

    <section class="pt-20 pb-52 lg:px-20 px-5">
        <div class="w-full">
            <div class="mb-5">
                <h4 class="text-xl">{{ __('home.welcome_to') }}</h4>
                <h1 class="text-4xl font-semibold">Yogyakarta</h1>
                <p class="text-slate-500 mt-5">{{__('home.about_jogja')}}</p>
            </div>
            <div class="md:flex" x-data="{ selectedTab: 'cultural' }">
                <ul
                    class="flex-column w-full md:max-w-52 space-y space-y-4 text-sm font-medium dark:text-white md:me-4 mb-4 md:mb-0">
                    <li>
                        <a href="#" @click="selectedTab = 'cultural'"
                            :class="{' bg-[#008795] text-white': selectedTab === 'cultural', ' bg-[#D9F9F5] hover:bg-slate-200 ': selectedTab !== 'cultural'}"
                            class="inline-flex items-center px-4 py-3 rounded-lg w-full" role="tab"
                            aria-selected="selectedTab === 'cultural'">
                            {{__('home.visit_cultural')}}
                        </a>
                    </li>
                    <li>
                        <a href="#" @click="selectedTab = 'culinary'"
                            :class="{' bg-[#008795] text-white': selectedTab === 'culinary', ' bg-[#D9F9F5] hover:bg-slate-200 ': selectedTab !== 'culinary'}"
                            class="inline-flex items-center px-4 py-3 rounded-lg w-full" role="tab"
                            aria-selected="selectedTab === 'culinary'">
                            {{__('home.visit_culinary')}}
                        </a>
                    </li>
                </ul>

                <div class="p-6 bg-base-200 text-medium rounded-lg w-full">
                    <div class="px-2 py-4">
                        <div x-show="selectedTab === 'cultural'" id="tabpanelcultural" role="tabpanel"
                            aria-label="cultural">

                            @foreach ($culturals as $cultural)
                            <div class="flex flex-col lg:flex-row gap-5 mb-5">
                                <img src="{{asset('storage/' . $cultural->image)}}"
                                    class="w-full object-cover max-w-sm rounded-xl" alt="">
                                <div>
                                    <h3 class="text-lg font-bold mb-2">{{$cultural->title_visit}}</h3>
                                    <div class=0 flex flex-col gap-3">
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
                                    <div class=0 flex flex-col gap-3">
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
    </section>
</div>