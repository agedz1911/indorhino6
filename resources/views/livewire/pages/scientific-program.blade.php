<div class="bg-slate-50">
    <div class=" pt-20 pb-40 lg:px-20 px-5" id="at-glance">
        <div class="flex-col flex gap-3 mb-10">
            <h4 class="text-2xl text-primary font-semibold">{{__('menu.program')}}</h4>
            <h1 class="text-4xl text-primary font-semibold">{{__('menu.atglance')}}</h1>
        </div>

        <div class="container mx-auto items-center">
            <livewire:resources.at-glance />
        </div>
    </div>
    <div class="bg-local pt-28 pb-52 lg:px-20 px-5 bg-doctor bg-primary-50" id="schedule">
        <div class="flex-col flex gap-3 mb-16">
            <h4 class="text-2xl text-primary font-semibold">{{__('menu.program')}}</h4>
            <h1 class="text-4xl text-primary font-semibold">{{__('menu.schedule')}}</h1>
        </div>

        <div>
            <livewire:resources.schedule />

        </div>
        
    </div>
</div>