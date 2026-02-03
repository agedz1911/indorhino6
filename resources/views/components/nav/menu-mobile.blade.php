<nav class="space-y-4">
    <ul class="flex flex-col gap-5">
        <li>
            <a href="/" wire:navigate
                class="{{ request()->is('/') ? 'text-[#be124e]' : '' }} justify-between font-normal hover:text-[#be124e] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#be124e] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">{{__('menu.home')}}
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="/welcome-message" wire:navigate
                class="{{ request()->is('welcome-message') ? 'text-[#be124e]' : '' }} justify-between font-normal hover:text-[#be124e] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#be124e] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">{{__('menu.remarks')}} <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="/organizing-committee" wire:navigate
                class="{{ request()->is('organizing-committee') ? 'text-[#be124e]' : '' }} justify-between font-normal hover:text-[#be124e] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#be124e] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">{{__('menu.committee')}} <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#" wire:navigate
                class="{{ request()->is('faculties') ? 'text-[#be124e]' : '' }} justify-between font-normal hover:text-[#be124e] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#be124e] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">{{__('menu.faculty')}}
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        
        <li>
            <a href="{{route('program-at-glance')}}" wire:navigate
                class="{{ request()->is('program-at-glance') ? 'text-[#be124e]' : '' }} justify-between font-normal hover:text-[#be124e] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#be124e] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">{{__('menu.atglance')}} <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#" wire:navigate
                class="{{ request()->is('scientific-schedule') ? 'text-[#be124e]' : '' }} justify-between font-normal hover:text-[#be124e] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#be124e] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">{{__('menu.schedule')}} <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="/registration" wire:navigate
                class="{{ request()->is('registration') ? 'text-[#be124e]' : '' }} justify-between font-normal hover:text-[#be124e] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#be124e] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">{{__('menu.registration')}}
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#" wire:navigate
                class="{{ request()->is('accommodation') ? 'text-[#be124e]' : '' }} justify-between font-normal hover:text-[#be124e] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#be124e] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">{{__('menu.accommodation')}}
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="/submission" wire:navigate
                class="{{ request()->is('submission') ? 'text-[#be124e]' : '' }} justify-between font-normal hover:text-[#be124e] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#be124e] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">{{__('menu.submission')}}
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="{{route('visiting')}}" wire:navigate
                class="{{ request()->is('visiting') ? 'text-[#be124e]' : '' }} justify-between font-normal hover:text-[#be124e] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#be124e] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Yogyakarta
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#"
                class="{{ request()->is('visiting') ? 'text-[#be124e]' : '' }} justify-between font-normal hover:text-[#be124e] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#be124e] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">{{__('menu.visit_venue')}}
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#" wire:navigate
                class="{{ request()->is('social-program') ? 'text-[#be124e]' : '' }} justify-between font-normal hover:text-[#be124e] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#be124e] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">{{__('menu.social_program')}}
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
    </ul>
</nav>