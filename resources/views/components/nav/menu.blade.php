<ul class="flex gap-6 uppercase">
    <li>
        <a href="/" wire:navigate
            class="{{ request()->is('/') ? 'text-[#be124e]' : 'text-white' }} hover:text-[#be124e] hover:underline ">Home
        </a>
    </li>
    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('organizing-committee') || request()->is('faculties') ? 'text-[#be124e]' : 'text-white' }} hover:cursor-pointer hover:text-[#be124e]">
            Congress Information <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            <li>
                <a href="/organizing-committee" wire:navigate
                    class="{{ request()->is('organizing-committee') ? 'text-[#be124e]' : '' }} justify-between hover:text-[#be124e] ">Organizing
                    Committee <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="#" wire:navigate
                    class="{{ request()->is('faculties') ? 'text-[#be124e]' : '' }} justify-between hover:text-[#be124e] ">Faculties
                    <i class="fa-solid fa-angle-right"></i></a>
            </li>
        </ul>
    </div>

    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('program-at-glance') || request()->is('topics') || request()->is('scientific-schedule') ? 'text-[#be124e]' : 'text-white' }} hover:cursor-pointer hover:text-[#be124e]">
            Scientific Program <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            <li>
                <a href="/topics" wire:navigate
                    class="{{ request()->is('topics') ? 'text-[#be124e]' : '' }} justify-between hover:text-[#be124e]">
                    Topics <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="#" wire:navigate
                    class="{{ request()->is('program-at-glance') ? 'text-[#be124e]' : '' }} justify-between hover:text-[#be124e]">Program
                    at Glance <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="#" wire:navigate
                    class="{{ request()->is('scientific-schedule') ? 'text-[#be124e]' : '' }} justify-between hover:text-[#be124e]">Scientific
                    Schedule <i class="fa-solid fa-angle-right"></i></a>
            </li>
    </div>


    <li>
        <a href="/registration" wire:navigate
            class="{{ request()->is('registration') ? 'text-[#be124e]' : 'text-white' }} hover:text-[#be124e] hover:underline">Registration
        </a>
    </li>
    <li>
        <a href="/accommodation" wire:navigate
            class="{{ request()->is('accommodation') ? 'text-[#be124e]' : 'text-white' }} hover:text-[#be124e] hover:underline">Accommodation
        </a>
    </li>
    <li>
        <a href="/submission" wire:navigate
            class="{{ request()->is('submission') ? 'text-[#be124e]' : 'text-white' }} hover:text-[#be124e] hover:underline">Submission
        </a>
    </li>
    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('visiting')  || request()->is('social-program')  ? 'text-[#be124e]' : 'text-white' }} hover:cursor-pointer hover:text-[#be124e]">
            Visiting <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            <li>
                <a href="/visiting" wire:navigate
                    class="{{ request()->is('visiting') ? 'text-[#be124e]' : '' }} justify-between hover:text-[#be124e]">
                    Bali <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="/visiting#venue" 
                    class="{{ request()->is('visiting#venue') ? 'text-[#be124e]' : '' }} justify-between hover:text-[#be124e]">Conference Venue <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="/social-program" wire:navigate
                    class="{{ request()->is('social-program') ? 'text-[#be124e]' : '' }} justify-between hover:text-[#be124e]">Social Program <i class="fa-solid fa-angle-right"></i></a>
            </li>
    </div>
    
</ul>