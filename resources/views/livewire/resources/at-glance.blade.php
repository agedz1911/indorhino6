<div>
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-t from-[#D9F9F5]/10 to-[#008795]/80"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-white uppercase text-2xl font-semibold tracking-wide lg:text-4xl">{{__('menu.atglance')}}
            </h2>
        </div>
    </section>

    {{-- <section class="pt-10 pb-24 px-2 lg:px-5">
        <div class="flex items-center justify-center">
            <div x-data="{ openTab: 1 }" class="lg:w-11/12 w-full mx-auto">
                <div class="">
                    <div class="mb-4 flex flex-wrap space-x-4 p-2 bg-base-300 rounded-lg shadow-md">
                        <button x-on:click="openTab = 1" :class="{ 'bg-[#be124e] text-white': openTab === 1 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">4
                            June</button>
                        <button x-on:click="openTab = 2" :class="{ 'bg-[#be124e] text-white': openTab === 2 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">5
                            June</button>
                        <button x-on:click="openTab = 3" :class="{ 'bg-[#be124e] text-white': openTab === 3 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">6
                            June</button>
                        <button x-on:click="openTab = 4" :class="{ 'bg-[#be124e] text-white': openTab === 4 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">31
                            October</button>
                        <button x-on:click="openTab = 5" :class="{ 'bg-[#be124e] text-white': openTab === 5 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">1
                            November</button>
                    </div>

                    <div x-show="openTab === 1"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#be124e]">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr class="text-base font-semibold mb-2 text-black">

                                        <th>Skill Lab FK Universitas Mataram</th>
                                        <th>PLN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td class="align-top">
                                            @foreach ($duadelapan as $labFk)
                                            @if ($labFk->room == 'Skill Lab FK Universitas Mataram')
                                            <button class="hover:shadow-sm hover:shadow-[#edd089] block w-full"
                                                onclick="labFk28{{$loop->index}}.showModal()">
                                                <div class="apx-0 py-4 w-full rounded-md bg-[{{$labFk->color}}]">
                                                    {{$labFk->time}} <br>
                                                    {{$labFk->title}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="labFk28{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($labFk->date)->format('d F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$labFk->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$labFk->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$labFk->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$labFk->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($labFk->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($duadelapan as $pln)
                                            @if ($pln->room == 'PLN')
                                            <button class="hover:shadow-lg hover:shadow-perhati-800 block w-full"
                                                onclick="pln28{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-[{{$pln->color}}]">
                                                    {{$pln->time}} <br>
                                                    {{$pln->title}}
                                                </div>
                                            </button>
                                            @endif
                                            <dialog id="pln28{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($pln->date)->format('d F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$pln->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$pln->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$pln->title}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$pln->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($pln->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div x-show="openTab === 2"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#be124e]">

                        tab 2
                    </div>

                    <div x-show="openTab === 3"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#be124e]">

                        tab 3
                    </div>
                    <div x-show="openTab === 4"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#be124e]">

                        tab 4
                    </div>
                    <div x-show="openTab === 5"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#be124e]">

                        tab 5
                    </div>
                </div>
            </div>

        </div>
    </section> --}}
    <section class="pt-10 pb-24 px-2 lg:px-5">
        <span class="italic text-gray-500 text-xs">*tentative {{__('menu.atglance')}}</span>
        <div class="card bg-base-100 w-full shadow">
            <figure>
                <img src="{{asset('assets/images/atglance.jpg')}}" class="w-full" alt="Shoes" />
            </figure>
            
        </div>
    </section>
</div>