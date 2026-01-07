<div>
    @if ($hasActiveFlyers)
    <div class="carousel w-full max-w-md rounded-2xl" x-data="{ 
         currentSlide: 0, 
         totalSlides: {{ count($flayers) }},
         interval: null 
     }" x-init="interval = setInterval(() => { 
         currentSlide = (currentSlide + 1) % totalSlides;
     }, 5000)" @mouseenter="clearInterval(interval)" @mouseleave="interval = setInterval(() => { 
         currentSlide = (currentSlide + 1) % totalSlides;
     }, 5000)">
        <div class="flex transition-transform duration-500 ease-in-out h-full"
            :style="'transform: translateX(-' + (currentSlide * 100) + '%)'">
            @foreach ($flayers as $index => $flyer)
            <div id="slide{{ $index + 1 }}"
                class="carousel-item relative w-full ease-in-out duration-300 h-full object-cover">

                <figure>
                    <img src="{{ asset('storage/' . $flyer->flayer)}}" alt="" class="w-full max-w-md rounded-xl" />
                </figure>

                <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                    <button
                        @click="clearInterval(interval); currentSlide = currentSlide === 0 ? totalSlides - 1 : currentSlide - 1; setTimeout(() => interval = setInterval(() => { currentSlide = (currentSlide + 1) % totalSlides; }, 3000), 3000)"
                        class="btn btn-circle btn-xs btn-outline">❮</button>
                    <button
                        @click="clearInterval(interval); currentSlide = (currentSlide + 1) % totalSlides; setTimeout(() => interval = setInterval(() => { currentSlide = (currentSlide + 1) % totalSlides; }, 3000), 3000)"
                        class="btn btn-circle btn-xs btn-outline">❯</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
    <img src="assets/images/banner.png" class="w-full max-w-md rounded-xl" alt="Banner">
    @endif
</div>