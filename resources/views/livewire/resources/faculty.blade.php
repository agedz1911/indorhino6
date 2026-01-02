<div>
    <div class="w-full px-3 mb-5 lg:mb-10">
        <label class="input input-bordered flex items-center gap-2">
            <input wire:model.live.debounce.500ms="searchTerm" type="text" class="border-none w-full focus:border-none"
                placeholder="Search Faculties" />
            <i class="fa-solid fa-search opacity-50"></i>
        </label>
    </div>
    @if (count($faculties) > 0)
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach ($faculties as $faculty)
        <button class="hover:shadow-lg hover:rounded-xl hover:shadow-slate-800"
            onclick="fac{{$loop->index}}.showModal()">
            <div class="card card-compact bg-base-100">
                <figure class="">
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
                <div class="card-body pt-0">
                    <h2 class="card-title text-primary hover:cursor-pointer">
                        {{$faculty->name}}
                    </h2>
                    <p class="">{{$faculty->country}}</p>
                    <p class="text-xs italic text-amber-500 absolute bottom-1 right-3">{{$faculty->email ? '*' .
                        $faculty->email : ''}}</p>
                </div>
            </div>
        </button>
        <dialog id="fac{{$loop->index}}" class="modal">
            <div class="modal-box w-11/12 max-w-4xl">
                <div class="flex items-start gap-3 lg:gap-5">
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
                    <div>
                        <h3 class="text-lg font-bold">{{$faculty->name}}</h3>
                        <p class="">{{$faculty->country}}</p>
                    </div>
                </div>
                <div class="pt-5">
                    @foreach ($faculty->schedules as $schedule)
                    <div class="flex flex-wrap font-semibold gap-5 text-green-600">
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
    {{-- <div class="pt-5 lg:pt-10">
        {{ $faculties->links() }}
    </div> --}}
    @else
    <div>
        <p class="text-gray-500 text-2xl text-center font-semibold">No Data</p>
    </div>
    @endif
</div>