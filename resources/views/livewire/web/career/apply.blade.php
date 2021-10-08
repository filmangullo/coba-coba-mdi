<div>
    <div class="z-20 flex relative @if($success == true) h-96 flex justify-center items-center @endif flex-row-reverse flex-wrap items-start space-y-8 lg:container lg:mx-auto md:space-y-0 md:space-x-6 md:flex-row md:flex-nowrap">
        @if($success == false)
        <div class="w-full px-6 py-10 text-white rounded-md md:w-6/12 bg-mark-default">
            <div class="text-4xl font-bold text-center">@lang('career.application-form')</div>

            <div class="pt-12 mb-4 space-y-3 text-white">
                <label class="block mb-2 text-sm font-bold">
                    @lang('career.full-name') : {{$name}}
                </label>
                <label class="block mb-2 text-sm font-bold">
                    @lang('career.job-applied') : {{$apply}}
                </label>
                <label class="block mb-2 text-sm font-bold">
                    @lang('career.phone') : {{$phone}}
                </label>
                <label class="block mb-2 text-sm font-bold">
                Email : {{$email}}
                </label>
                <label class="block mb-2 text-sm font-bold">
                    @lang('career.address') : {{$address}}
                </label>
                <label class="block mb-2 text-sm font-bold">
                    @lang('career.about') : {{$about}}
                </label>
                <label class="block mb-2 text-sm font-bold">
                    @lang('career.why-we') :<br> {{$why}}
                </label>
                <label class="block mb-2 text-sm font-bold">
                @error('filecv')
                {{$message}}
                @else
                CV @if(!empty($filecv)) @lang('career.submit') @else @lang('career.not-submit') @endif
                @enderror
                </label>
            </div>
        </div>
        <div class="w-full px-6 pb-10 md:w-6/12 ">
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="job">
                    @lang('career.job-applied')
                </label>
                <select wire:model="apply" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:border-mark focus:ring-0 focus:outline-none focus:shadow-outline">
                    <option value="">Select</option>
                    @forelse ($job as $item)
                        <option value="{{ $item->job_position_en }}">{{$item->job_position_en}}</option>
                    @empty
                    <option value="">No recruitment</option>
                    @endforelse
                </select>
            </div>

            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="name">
                    @lang('career.full-name')
                </label>
                <input wire:model="name" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:border-mark focus:ring-0 focus:outline-none focus:shadow-outline" type="text" placeholder="Full Name">
            </div>
            @error('name')
                {{$message}}
            @enderror

            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                Email
                </label>
                <input wire:model="email" wire:model="email"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:border-mark focus:ring-0 focus:outline-none focus:shadow-outline" type="email" placeholder="Email">
            </div>
            @error('email')
                {{$message}}
            @enderror

            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="phone">
                    @lang('career.phone')
                </label>
                <input wire:model="phone" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:border-mark focus:ring-0 focus:outline-none focus:shadow-outline" type="tel" placeholder="Phone">
            </div>
            @error('phone')
                {{$message}}
            @enderror

            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="address">
                    @lang('career.address')
                </label>
                <textarea wire:model="address" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:border-mark focus:ring-0 focus:outline-none focus:shadow-outline" placeholder="Your current address"></textarea>
            </div>
            @error('address')
                {{$message}}
            @enderror

            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="about">
                    @lang('career.about')
                </label>
                <textarea wire:model="about" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:border-mark focus:ring-0 focus:outline-none focus:shadow-outline" placeholder="Tell it briefly and clearly"></textarea>
            </div>
            @error('about')
                {{$message}}
            @enderror

            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="why">
                    @lang('career.why-we')
                </label>
                <textarea wire:model="why" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:border-mark focus:ring-0 focus:outline-none focus:shadow-outline" placeholder="Give a brief and clear explanation"></textarea>
            </div>
            @error('why')
                {{$message}}
            @enderror

            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="why">
                    @lang('career.upload')
                </label>
                <div class="flex items-center space-x-4">
                    <button type="button" class="relative w-24 p-2 text-sm font-semibold text-gray-500 border-2 border-gray-200 rounded-md cursor-pointer focus:outline-none">
                        <span class="cursor-pointer">Browse</span>
                        <input wire:model="filecv" type="file" class="absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer focus:border-mark focus:ring-0" name="upload" id="upload" >
                    </button>
                    <span class="ml-4 text-sm font-semibold">@if($filecv){{$filecv->getClientOriginalName()}}@else PDF file (Max 1024 kb) @endif</span>
                </div>
            </div>
            @error('filecv')
                {{$message}}
            @enderror

            <div class="mb-4">
                <div wire:click='submit' class="inline-block px-6 py-3 mb-2 text-sm font-bold text-white rounded-md cursor-pointer bg-mark-default hover:bg-mark-dark">
                Submit
                </div>
            </div>
        </div>
        @else
        <div class="absolute">
            <img class="w-40 mx-auto" src="{{ asset('img/success.gif') }}">
            <div class="font-semibold text-center">@lang('career.success')</div>
        </div>
        @endif
    </div>
</div>
