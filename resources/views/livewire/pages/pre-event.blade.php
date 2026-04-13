<div>
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-t from-[#D9F9F5]/10 to-[#008795]/80"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-white uppercase text-2xl font-semibold tracking-wide lg:text-4xl">{{__('menu.pre_event')}}
            </h2>
        </div>
    </section>

    <section class="pt-10 pb-24 px-5 lg:px-8 bg-[#D9F9F5]/30">
        <div class="flex flex-wrap justify-evenly">
            @foreach ($preEvents as $event)
            <div class="card bg-base-100 w-full max-w-sm shadow-sm mt-5">
                <figure>
                    <img src="{{ asset('storage/' . $event->image)}}" class="rounded-lg" alt="Shoes" />
                </figure>
                @if ($event->description != null)
                <div class="card-body">
                    {!! str($event->description)->markdown()->sanitizeHtml() !!}
                </div>
                @endif
            </div>
            @endforeach

        </div>
    </section>
</div>