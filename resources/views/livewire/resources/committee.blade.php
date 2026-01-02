<div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-3">
        @if (count($committees) > 0)
            @foreach ($uniqueCategories as $category)
                {{-- <div class="badge bg-primary-900 text-slate-300 py-5 px-10 text-lg font-semibold my-10">{{ $category }}</div> --}}
                <div class="flex flex-col">
                    <h1 class="font-semibold text-primary text-xl">{{ $category }}</h1>
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
            <div>
                <p class="text-gray-500 text-2xl font-semibold">No Data</p>
            </div>
        @endif
    </div>
</div>
