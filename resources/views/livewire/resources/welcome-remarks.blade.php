<div>
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-t from-[#D9F9F5]/10 to-[#015149]/80"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-white uppercase text-2xl font-semibold tracking-wide lg:text-4xl">{{__('menu.remarks')}}
            </h2>
        </div>
    </section>
    <section class="pt-10 pb-24 px-5 lg:px-8">
        @foreach ($messages as $message)
        <div class="flex flex-col md:flex-row justify-between border-b py-10 gap-10">
            @if ($loop->even)
            <div class="order-last md:order-first">
                <article class="text-justify text-lg">
                    <p class="">{!! $message->description !!}</p>
                </article>
            </div>
            <div class="flex flex-col items-center lg:pb-10 justify-start">
                <div class="card card-compact glass w-96 shadow-xl relative">
                    <figure>
                        @foreach ($message->image as $item)
                        @if ($item == null)
                        <div class="h-96">
                            <div class=" rounded-md">
                                <img src="{{ asset('images/speakers.jpg') }}" alt="Default Doctor Image"
                                    class="object-cover rounded-lg " />
                            </div>
                        </div>
                        @else
                        <div class="h-96">
                            <div class="rounded-md ">
                                <img src="{{ asset('storage/' . $item) }}" class="object-cover rounded-lg"
                                    alt="{{ $message->name }}" />
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title text-[#006a5f]">
                            {{ $message->name }}
                        </h2>
                        <p class="absolute top-2 right-3 text-[#be124e] font-medium">{!! $message->title !!} </p>
                    </div>
                </div>
            </div>
            @else
            <div class="flex flex-col md:flex-row md:items-start items-center justify-start gap-2">
                <div class="card card-compact glass w-72 shadow-xl relative">
                    <figure>
                        {{-- @foreach ($message->image as $item)
                        @if ($item == null)
                        <div class="h-96">
                            <div class=" rounded-md">
                                <img src="{{ asset('images/speakers.jpg') }}" alt="Default Doctor Image"
                                    class="object-cover rounded-lg " />
                            </div>
                        </div>
                        @else
                        <div class="h-96">
                            <div class=" rounded-md ">
                                <img src="{{ asset('storage/' . $item) }}" class="object-cover rounded-lg"
                                    alt="{{ $message->name }}" />
                            </div>
                        </div>
                        @endif
                        @endforeach --}}
                        <div class="h-96">
                            <div class=" rounded-md ">
                                <img src="assets/images/lussy.jpg" class="object-cover rounded-lg" alt="tes" />
                            </div>
                        </div>
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title text-[#006a5f]">
                            Dr. dr. Luh Putu Lusy Indrawati, M.Kes, Sp.THT-KL(K)
                        </h2>
                        <p class=" text-[#be124e] font-medium">{{__('home.message_chairman')}} </p>
                    </div>
                </div>
                <div class="card card-compact glass w-72 shadow-xl relative">
                    <figure>
                        <div class="h-96">
                            <div class=" rounded-md ">
                                <img src="assets/images/vicky.jpg" class="object-cover rounded-lg" alt="Vicky" />
                            </div>
                        </div>
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title text-[#006a5f]">
                            dr. Vicky Riyadi Sp.T.H.T.B.K.L., Subsp.Rino.(K).
                        </h2>
                        <p class="text-[#be124e] font-medium">{{__('home.message_study')}}</p>
                    </div>
                </div>
            </div>
            <div class="">
                <article class="text-justify text-lg">
                    <p class="">{!! $message->description !!}</p>
                </article>
            </div>
            @endif
        </div>
        @endforeach
    </section>
</div>