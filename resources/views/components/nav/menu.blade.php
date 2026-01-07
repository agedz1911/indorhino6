<ul class="flex gap-6 uppercase">
    <li>
        <a href="/" wire:navigate
            class="{{ request()->is('/') ? 'text-[#b77104]' : 'text-white' }} hover:text-[#b77104] hover:underline ">{{__('menu.home')}}
        </a>
    </li>
    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('organizing-committee') || request()->is('faculties') || request()->is('welcome-message') ? 'text-[#b77104]' : 'text-white' }} hover:cursor-pointer hover:text-[#b77104]">
           {{__('menu.congress-info')}} <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            <li>
                <a href="/welcome-message" wire:navigate
                    class="{{ request()->is('welcome-message') ? 'text-[#b77104]' : '' }} justify-between hover:text-[#b77104] ">{{__('menu.remarks')}} <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="/organizing-committee" wire:navigate
                    class="{{ request()->is('organizing-committee') ? 'text-[#b77104]' : '' }} justify-between hover:text-[#b77104] ">{{__('menu.committee')}} <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="#" wire:navigate
                    class="{{ request()->is('faculties') ? 'text-[#b77104]' : '' }} justify-between hover:text-[#b77104] ">{{__('menu.faculty')}}
                    <i class="fa-solid fa-angle-right"></i></a>
            </li>
        </ul>
    </div>

    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('program-at-glance') || request()->is('topics') || request()->is('scientific-schedule') ? 'text-[#b77104]' : 'text-white' }} hover:cursor-pointer hover:text-[#b77104]">
            {{__('menu.program')}} <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            
            <li>
                <a href="#" wire:navigate
                    class="{{ request()->is('program-at-glance') ? 'text-[#b77104]' : '' }} justify-between hover:text-[#b77104]">{{__('menu.atglance')}} <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="#" wire:navigate
                    class="{{ request()->is('scientific-schedule') ? 'text-[#b77104]' : '' }} justify-between hover:text-[#b77104]">{{__('menu.schedule')}} <i class="fa-solid fa-angle-right"></i></a>
            </li>
    </div>


    <li>
        <a href="#" wire:navigate
            class="{{ request()->is('registration') ? 'text-[#b77104]' : 'text-white' }} hover:text-[#b77104] hover:underline">{{__('menu.registration')}}
        </a>
    </li>
    <li>
        <a href="#" wire:navigate
            class="{{ request()->is('accommodation') ? 'text-[#b77104]' : 'text-white' }} hover:text-[#b77104] hover:underline">{{__('menu.accommodation')}}
        </a>
    </li>
    <li>
        <a href="/submission" wire:navigate
            class="{{ request()->is('submission') ? 'text-[#b77104]' : 'text-white' }} hover:text-[#b77104] hover:underline">{{__('menu.submission')}}
        </a>
    </li>
    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('visiting')  || request()->is('social-program')  ? 'text-[#b77104]' : 'text-white' }} hover:cursor-pointer hover:text-[#b77104]">
            {{__('menu.visit')}} <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            <li>
                <a href="#" wire:navigate
                    class="{{ request()->is('visiting') ? 'text-[#b77104]' : '' }} justify-between hover:text-[#b77104]">
                    Yogyakarta <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="#" 
                    class="{{ request()->is('visiting#venue') ? 'text-[#b77104]' : '' }} justify-between hover:text-[#b77104]">{{__('menu.visit_venue')}} <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="#" wire:navigate
                    class="{{ request()->is('social-program') ? 'text-[#b77104]' : '' }} justify-between hover:text-[#b77104]">{{__('menu.social_program')}} <i class="fa-solid fa-angle-right"></i></a>
            </li>
    </div>
    
</ul>