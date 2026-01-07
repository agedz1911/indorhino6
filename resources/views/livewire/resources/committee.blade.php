<div>
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-t from-[#D9F9F5]/10 to-[#015149]/80"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-white uppercase text-2xl font-semibold tracking-wide lg:text-4xl">{{__('menu.committee')}}</h2>
        </div>
    </section>
    <section class="pt-10 pb-24 px-5 lg:px-8 bg-[#D9F9F5]/30">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-3">
            @if (count($committees) > 0)
            @foreach ($uniqueCategories as $category)
            {{-- <div class="badge bg-primary-900 text-slate-300 py-5 px-10 text-lg font-semibold my-10">{{ $category }}
        </div> --}}
        <div class="flex flex-col">
            <h1 class="font-semibold text-[#006a5f] text-xl">{{ $category }}</h1>
            <div class="flex flex-col">
                @foreach ($committees as $committee)
                @if ($committee->category == $category)
                <ul class="text-slate-600 list-disc list-inside">
                    <li class="mb-2">{{ $committee->name }}
                        @if ($committee->title != null)
                        <br>
                        <span class="font-semibold ml-3">({{ $committee->title }})</span>
                        @endif
                    </li>
                </ul>
                @endif
                @endforeach
            </div>
        </div>
        @endforeach
        @else
        <div class="w-full border">
            <p class="text-gray-500 text-2xl text-center font-semibold">No Data</p>
        </div>
        @endif
</div>
</section>
</div>