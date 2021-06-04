<div>
<div class="z-20 flex flex-row-reverse flex-wrap items-start space-y-8 lg:container lg:mx-auto md:space-y-0 md:space-x-6 md:flex-row md:flex-nowrap">
    <div class="w-full px-6 py-10 text-white md:w-6/12 bg-mark-default md:rounded-l-md">
        <div class="text-4xl font-bold text-center">Application Form</div>

        <div class="mb-4">
            <label class="block mb-2 text-sm font-bold text-gray-700"">
              Full Name : {{$name}}
            </label>
            <label class="block mb-2 text-sm font-bold text-gray-700"">
            Job Applied : {{$apply}}
            </label>
            <label class="block mb-2 text-sm font-bold text-gray-700"">
            Phone : {{$phone}}
            </label>
            <label class="block mb-2 text-sm font-bold text-gray-700"">
            Email : {{$email}}
            </label>
            <label class="block mb-2 text-sm font-bold text-gray-700"">
            Address : {{$address}}
            </label>
            <label class="block mb-2 text-sm font-bold text-gray-700"">
            About yourself : {{$about}}
            </label>
            <label class="block mb-2 text-sm font-bold text-gray-700"">
            Why we should hire you? : {{$why}}
            </label>
            <label class="block mb-2 text-sm font-bold text-gray-700"">
            @error('filecv')
            {{$message}}
            @else
            CV @if(!empty($filecv)) is submitted. @else is not submitted yet. @endif 
            @enderror
            </label>
        </div>
    </div>
    <div class="w-full px-6 pb-10 md:w-6/12 ">
        <div class="mb-4">
            <label class="block mb-2 text-sm font-bold text-gray-700" for="job">
              Apply Job
            </label>
            <select wire:model="apply" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                <option value="">Select</option>
                <option>IT Programmer</option>
                <option>Manager</option>
                <option>Accounting</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block mb-2 text-sm font-bold text-gray-700" for="name">
              Name
            </label>
            <input wire:model="name" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" type="text" placeholder="Full Name">
        </div>
        @error('name')
            {{$message}}
        @enderror

        <div class="mb-4">
            <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
              Email
            </label>
            <input wire:model="email" wire:model="email"
                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" type="email" placeholder="Email">
        </div>
        @error('email')
            {{$message}}
        @enderror

        <div class="mb-4">
            <label class="block mb-2 text-sm font-bold text-gray-700" for="phone">
              Phone
            </label>
            <input wire:model="phone" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" type="tel" placeholder="Phone">
        </div>
        @error('phone')
            {{$message}}
        @enderror

        <div class="mb-4">
            <label class="block mb-2 text-sm font-bold text-gray-700" for="address">
              Address
            </label>
            <textarea wire:model="address" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" placeholder="Your current address"></textarea>
        </div>
        @error('address')
            {{$message}}
        @enderror

        <div class="mb-4">
            <label class="block mb-2 text-sm font-bold text-gray-700" for="about">
                Tell about yourself
            </label>
            <textarea wire:model="about" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" placeholder="Tell it briefly and clearly"></textarea>
        </div>
        @error('about')
            {{$message}}
        @enderror

        <div class="mb-4">
            <label class="block mb-2 text-sm font-bold text-gray-700" for="why">
                Why we should hire you?
            </label>
            <textarea wire:model="why" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" placeholder="Give a brief and clear explanation"></textarea>
        </div>
        @error('why')
            {{$message}}
        @enderror

        <div class="mb-4">
            <label class="block mb-2 text-sm font-bold text-gray-700" for="why">
                Upload your CV
            </label>
            <div class="flex items-center space-x-4">
                <button type="button" class="relative w-24 p-2 text-sm font-semibold text-gray-500 border-2 border-gray-200 rounded-md cursor-pointer focus:outline-none">
                    <span class="cursor-pointer">Browse</span>
                    <input wire:model="filecv" type="file" class="absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer" name="upload" id="upload" >
                </button>
                <span class="text-sm font-semibold">@if($filecv){{$filecv->getClientOriginalName()}}@else PDF file (Max 1024 kb) @endif</span>
            </div>
        </div>
        @error('filecv')
            {{$message}}
        @enderror

        <div class="mb-4">
            <div wire:click='submit' class="inline-block px-4 py-3 mb-2 text-sm font-bold text-white rounded-md cursor-pointer bg-mark-default hover:bg-mark-dark">
            Submit
            </div>
        </div>
    </div>
</div>
</div>