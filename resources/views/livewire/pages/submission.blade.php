<div class="bg-slate-50">
    <div class="bg-local pt-20 pb-52 lg:px-20 px-5 bg-blog" id="guideline-abstract">
        <div class="flex-col flex gap-3 mb-10">
            <h4 class="text-2xl text-primary font-semibold">{{ __('menu.submission') }}</h4>
            <h1 class="text-4xl text-primary font-semibold">{{ __('menu.guide-abstract') }}</h1>
        </div>
        <div class="bg-base-100 border border-gray-200 divide-y divide-gray-200 rounded-lg">
            @foreach ($guidelines as $guide)
                <details class="p-6 group"  {{ $loop->first ? 'open' : '' }}>
                    <summary class="flex items-center justify-between cursor-pointer">
                        <h5 class="text-xl font-semibold text-primary">
                            {{ $guide->title }}
                        </h5>
                        <span class="relative flex-shrink-0 ml-1.5 w-5 h-5">
                            <i class="fa-solid fa-eye absolute inset-0 w-5 h-5 opacity-0 group-open:opacity-100"></i>
                            <i
                                class="fa-solid fa-eye-slash absolute inset-0 w-5 h-5 opacity-100 group-open:opacity-0"></i>
                        </span>
                    </summary>
                    <p class="mt-4 leading-relaxed text-slate-500 list-disc px-10">
                        {!! $guide->description !!}
                    </p>
                    
                </details>
            @endforeach
        </div>
    </div>

    <div class="pt-28 pb-52 lg:px-20 px-5 bg-slate-200" id="submission">
        <div class="flex-col flex gap-3 mb-10">
            <h4 class="text-2xl text-primary font-semibold">{{ __('menu.submission') }}</h4>
            <h1 class="text-4xl text-primary font-semibold">{{__('menu.abstract')}}</h1>
        </div>

        <div>
            <embed class="w-full h-[1500px] md:h-[1000px] rounded-lg" src="https://expo.virconex-id.com/abstract/perhati2025/" type="text/html">
        </div>
    </div>
</div>
