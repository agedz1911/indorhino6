<div>
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-t from-[#D9F9F5]/10 to-[#008795]/80"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-white uppercase text-2xl font-semibold tracking-wide lg:text-4xl">{{__('menu.faculty')}}</h2>
        </div>
    </section>
    <section class="pt-10 pb-24 px-5 lg:px-8 bg-base-100">
        <div class="w-full px-3 mb-5 lg:mb-10">
            <label class="input input-bordered flex items-center gap-2 w-full">
                <input wire:model.live.debounce.500ms="searchTerm" type="text" class="border-none w-full focus:border-none"
                    placeholder="Search Faculties" />
                <i class="fa-solid fa-search opacity-50"></i>
            </label>
        </div>
        @if (count($faculties) > 0)
        <div class="flex flex-wrap justify-between items-start gap-4">
            @foreach ($faculties as $faculty)
            <button class="hover:shadow-lg hover:shadow-cyan-700/50 transition-all duration-300"
                onclick="fac{{$loop->index}}.showModal()">
                <div class="card card-compact bg-[#D9F9F5]/20 ring-[#008795] ring-offset-base-100 ring-2 ring-offset-2 w-full md:max-w-xs">
                    <figure class="">
                        @if($faculty->getMedia('images')->isEmpty())
                        <div class="avatar p-3">
                            <div class="">
                                <img src="{{ asset('images/speakers.jpg') }}" alt="Default Doctor Image"
                                    class="rounded-md" />
                            </div>
                        </div>
                        @else
                        @foreach($faculty->getMedia('images') as $image)
                        <div class="avatar p-3">
                            <div class="rounded-md">
                                <img src="{{ $image->getUrl() }}" alt="{{$faculty->name}}" />
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </figure>
                    <div class="card-body pt-0 flex flex-col justify-between">
                        <h2 class="card-title text-[#be124e] hover:cursor-pointer">
                            {{$faculty->name}} <span class="text-sm">({{$faculty->country}})</span>
                        </h2>
                        <p class="text-xs italic text-justify line-clamp-3">{{$faculty->cv}} </p>
                        <p class="text-end hover:underline hover:text-[#be124e] hover:cursor-pointer">{{__('home.read_more')}}...</p>
                    </div>
                </div>
            </button>
            <dialog id="fac{{$loop->index}}" class="modal">
                <div class="modal-box w-11/12 max-w-4xl">
                    <div class="flex items-start justify-between gap-3 lg:gap-5">
                        <figure class="w-30 lg:w-40 h-30 lg:h-40">
                            @if($faculty->getMedia('images')->isEmpty())
                            <div class="avatar p-3">
                                <div class="rounded-xl ring ring-primary/70 ring-offset-base-100 ring-offset-4">
                                    <img src="{{ asset('images/speakers.jpg') }}" alt="Default Doctor Image"
                                        class="rounded-lg" />
                                </div>
                            </div>
                            @else
                            @foreach($faculty->getMedia('images') as $image)
                            <div class="avatar p-3">
                                <div class="rounded-xl ring ring-primary/70 ring-offset-base-100 ring-offset-4">
                                    <img src="{{ $image->getUrl() }}" alt="{{$faculty->name}}" />
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </figure>
                        <div class="w-full md:max-w-2xl">
                            <h3 class="text-lg font-bold">{{$faculty->name}}</h3>
                            <p class="">{{$faculty->country}}</p>
                            <p class="text-xs text-gray-500">{{$faculty->cv}}</p>
                        </div>
                    </div>
                    <div class="pt-5">
                        @foreach ($faculty->schedules as $schedule)
                        <div class="flex flex-wrap font-semibold gap-5 text-[#be124e]">
                            <p>{{\Carbon\Carbon::parse($schedule->glance->date)->format('d
                            F Y')}}</p>
                            <p>{{$schedule->time_speaker}}</p>
                            <p>{{$schedule->glance->room}}</p>
                        </div>
                        <p class="mb-1">{{$schedule->glance->title}}
                        </p>
                        <p class="text-gray-500 mb-5 border-b border-dashed border-gray-800 pb-3">
                            {{$schedule->topic_title}}
                        </p>
                        @endforeach
                    </div>
                    <div class="modal-action">
                        <form method="dialog">
                            <!-- if there is a button in form, it will close the modal -->
                            <button class="btn">Close</button>
                        </form>
                    </div>
                </div>
            </dialog>
            @endforeach
        </div>

        @else
        <div>
            <p class="text-gray-500 text-2xl text-center font-semibold">No Data</p>
        </div>
        @endif
    </section>
</div>