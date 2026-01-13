<footer class="pt-20 text-center text-white relative">
    <div class="absolute inset-0 bg-gradient-to-t from-[#008795] to-[#5bc7c9]"></div>
    <div class="relative">

        <a href="">
            <div
                class="flex flex-col md:flex-row text-start mb-4 w-full items-center justify-center transition-transform duration-300 gap-4">
                <img src="assets/images/logo/logo-event-new.png" alt="Logo" class="h-full max-h-20 mr-2" />
                <img src="assets/images/logo/logo-all.png" alt="Logo" class="w-72" />
            </div>
        </a>


        <div class="flex flex-col items-center w-full max-w-4xl m-auto">
            <div class="border-b border-white m-auto mb-6 w-full max-w-2xl">

                <p class="mb-0 mt-6">{{__('menu.secretariat')}}</p>
                <p>Komplek Duta Merlin Blok C 35-36. <br> Jl. Gajah Mada 3 – 5,
                    Jakarta 10130, Indonesia</p>
                <div class="py-5 mt-3">
                    <ul class="m-0 p-0 flex flex-row gap-5 lg:gap-8 justify-center">
                        <li class=" rounded-md p-2 w-10 hover:bg-white/50">
                            <a href="mailto:indorhino2026@pharma-pro.com" class="text-slate-200">
                                <i class="fa-solid fa-envelope-open-text text-xl"></i>
                            </a>
                        </li>
                        <li class=" rounded-md p-2 w-10 hover:bg-white/50">
                            <a href="tel:+622163869502" class="text-slate-200">
                                <i class="fa fa-phone text-xl"></i>
                            </a>
                        </li>
                        <li class=" rounded-md p-2 w-10 hover:bg-white/50">
                            <a href="tel:+6282277832431" class="text-slate-200">
                                <i class="fa fa-mobile-screen text-xl"></i>
                            </a>
                        </li>
                        <li class=" rounded-md p-2 w-10 hover:bg-white/50">
                            <a href="https://wa.me/+6282277832431" class="text-slate-200">
                                <i class="fa fa-whatsapp text-xl"></i>
                            </a>
                        </li>
                        <li class=" rounded-md p-2 w-10 hover:bg-white/50">
                            <a href="javascript:void(0)" class="text-slate-200">
                                <i class="fa fa-instagram text-xl"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="pb-10 mt-4">
                <ul class="p-0 m-0 flex flex-row flex-wrap gap-4 lg:gap-6 justify-center">
                    <li class="text-sm font-normal hover:text-amber-400 hover:underline"><a href="/submission"
                            wire:navigate>{{__('menu.submission')}}</a></li>
                    <li class="text-sm font-normal hover:text-amber-400 hover:underline"><a href="/organizing-committee"
                            wire:navigate>{{__('menu.committee')}}</a></li>
                    <li class="text-sm font-normal hover:text-amber-400 hover:underline"><a wire:navigate
                            href="#">{{__('menu.faculty')}}</a></li>
                    <li class="text-sm font-normal hover:text-amber-400 hover:underline"><a wire:navigate
                            href="#">{{__('menu.schedule')}}</a></li>
                    <li class="text-sm font-normal hover:text-amber-400 hover:underline"><a wire:navigate
                            href="/registration">{{__('menu.registration')}}</a></li>
                    <li class="text-sm font-normal hover:text-amber-400 hover:underline"><a wire:navigate
                            href="#">{{__('menu.visit')}}</a></li>
                </ul>
            </div>
        </div>
        <div class="pb-6 pt-1 mt-5">
            <p class="text-xs">MIS - IT Pharma-Pro © {{now()->year}}</p>
        </div>
    </div>
</footer>