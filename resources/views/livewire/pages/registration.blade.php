<div>
    <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-t from-[#D9F9F5]/10 to-[#008795]/80"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-white uppercase text-2xl font-semibold tracking-wide lg:text-4xl">{{__('menu.registration_fee')}}</h2>
        </div>
    </section>

    {{-- @dd($regLocals) --}}
    <section class="pt-10 pb-24 px-2 lg:px-5 bg-competition">
        <!-- name of each tab group should be unique -->
        <div class="tabs tabs-border justify-evenly">
            <input type="radio" name="my_tabs_2" class="tab text-lg uppercase text-[#008795]"
                aria-label="{{__('home.indonesia_participant')}}" checked="checked" />
            <div class="tab-content">
                <div class="pb-6 text-gray-500">
                    {{-- <span class="bg-[#be124e] mt-5 text-green-600 px-3 py-2 text-sm rounded-xl ">Indonesian
                        Participants</span> --}}
                    @foreach ($uniqueLocals as $reg_category)
                    @if ($reg_category == 'Symposium')
                    <h2 class="uppercase font-semibold text-[#0A3542] mb-2 mt-5">{{$reg_category}}</h2>
                    <div class="relative overflow-x-auto shadow sm:rounded-lg ">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class=" text-white uppercase text-center bg-[#008795] ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        {{__('home.reg_category')}}
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        {{__('home.reg_phase1')}}
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        {{__('home.reg_phase2')}}
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($regLocals as $regLocal)
                                @if ($regLocal->category == $reg_category)
                                <tr class="bg-white border-b  border-gray-200 hover:bg-green-50 ">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{$regLocal->title}}
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        IDR {{$regLocal->early_bird_reg != 0 ? number_format($regLocal->early_bird_reg,
                                        0, ',', '.') : 'Free'}}
                                    </td>
                                    
                                    <td class="px-6 py-4 text-center">
                                        IDR {{$regLocal->onsite_reg != 0 ? number_format($regLocal->onsite_reg, 0, ',',
                                        '.'): 'Free'}}
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        <div class="relative mt-2">
                            <a href="https://expo.virconex-id.com/registration/indorhino2026"
                                class="bg-[#be124e] text-white hover:bg-[#970638] p-3 rounded-xl mb-3 float-end"><i
                                    class="fa-solid fa-list mx-3"></i>{{__('home.register')}}</a>
                        </div>
                    </div>
                    @elseif ($reg_category == 'workshop')
                    <h2 class="uppercase font-semibold text-[#0A3542] mb-2 mt-5">{{$reg_category}}</h2>
                    <div class="relative overflow-x-auto shadow sm:rounded-lg ">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class=" text-white uppercase text-center bg-[#008795] ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Registration Fee
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($regLocals as $regLocal)
                                @if ($regLocal->category == $reg_category)
                                <tr class="bg-white border-b  border-gray-200 hover:bg-green-50 ">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{$regLocal->title}}
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        {{$regLocal->early_bird_reg != 0 ? 'IDR ' .
                                        number_format($regLocal->early_bird_reg, 0, ',', '.') : ''}}
                                    </td>

                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        <div class="relative mt-2">
                            <a href="https://expo.virconex-id.com/registration/indorhino2026"
                                class="bg-[#be124e] text-white hover:bg-[#be124e] p-3 rounded-xl mb-3 float-end"><i
                                    class="fa-solid fa-list mx-3"></i>{{__('home.register')}}</a>
                        </div>
                    </div>
                    @else
                    <h2 class="uppercase font-semibold text-[#0A3542] mb-2 mt-5">{{$reg_category}}</h2>
                    <div class="relative overflow-x-auto shadow sm:rounded-lg ">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class=" text-white uppercase text-center bg-[#008795] ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Other Surgeons / General Practitioners (GP)
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nurse / Medical Students
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($regLocals as $regLocal)
                                @if ($regLocal->category == $reg_category)
                                <tr class="bg-white border-b  border-gray-200 hover:bg-green-50 ">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{$regLocal->title}}
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        {{$regLocal->early_bird_reg != 0 ? 'IDR ' . number_format($regLocal->early_bird_reg,
                                        0, ',', '.') : ''}}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        {{$regLocal->normal_reg != 0 ? 'IDR' . number_format($regLocal->normal_reg, 0, ',',
                                        '.') : ''}}
                                    </td>

                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        <div class="relative mt-2">
                            <a href="https://expo.virconex-id.com/registration/indorhino2026"
                                class="bg-[#be124e] text-white hover:bg-[#be124e] p-3 rounded-xl mb-3 float-end"><i
                                    class="fa-solid fa-list mx-3"></i>{{__('home.register')}}</a>
                        </div>
                    </div>
                    @endif
                    @endforeach

                </div>
            </div>

            <input type="radio" name="my_tabs_2" class="tab uppercase text-lg text-[#008795] "
                aria-label="{{__('home.foreign_participant')}}" />
            <div class="tab-content">
                <div class="pb-6 text-gray-500">
                    {{-- <span class="bg-[#be124e] text-green-600 px-3 py-2 text-sm rounded-xl mb-3">Foreign
                        Participants</span> --}}
                    @foreach ($uniqueForeigns as $reg_category)
                    <h2 class="uppercase font-semibold text-[#0A3542] mb-2 mt-5">{{$reg_category}}</h2>
                    <div class="relative overflow-x-auto shadow sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class=" text-white uppercase text-center bg-[#008795] ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        {{__('home.reg_category')}}
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        {{__('home.reg_phase1')}}
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        {{__('home.reg_phase2')}}
                                    </th>
                                    

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($regForeigns as $regForeign)
                                @if ($regForeign->category == $reg_category)
                                <tr class="bg-white border-b  border-gray-200 hover:bg-green-50 ">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{$regForeign->title}}
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        USD {{$regForeign->early_bird_reg != 0 ? $regForeign->early_bird_reg :
                                        'Free'}}
                                    </td>
                                    
                                    <td class="px-6 py-4 text-center">
                                        USD {{$regForeign->onsite_reg != 0 ? $regForeign->onsite_reg : 'Free'}}
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        <div class="relative mt-2">
                            <a href="https://expo.virconex-id.com/registration/indorhino2026"
                                class="bg-[#be124e] text-white hover:bg-[#be124e] p-3 rounded-xl mb-3 float-end"><i
                                    class="fa-solid fa-list mx-3"></i>{{__('home.register')}}</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="px-2 lg:px-5 pb-16 bg-competition border-t border-dashed border-gray-200">
        <div class=" mt-10">
            <div class="text-center lg:text-start">
                <h2 class="mb-2 uppercase text-3xl font-semibold">Registration
                    <span class="text-[#008795]">information</span>
                </h2>
            </div>

            <div>
                <livewire:resources.reg-info />
            </div>
        </div>
    </section>
</div>