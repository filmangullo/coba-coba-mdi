<div>
    @if ($alert == true)

    <div class="px-4 py-3 text-blue-900 bg-blue-100 border-t-4 border-blue-500 rounded-b shadow-md" role="alert">
        <div class="flex">
          <div class="py-1"><svg class="w-6 h-6 mr-4 text-blue-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
          <div>
            <p class="font-bold">@lang('contact.success')</p>
            <p class="text-sm">@lang('contact.success-alert')</p>
          </div>
        </div>
    </div>
    @endif


    <div>
        <div class="mb-5">
            <label class="font-semibold text-gray-900 text-md">@lang('contact.name')</label></br>
            <input wire:model='name' type="text" class="w-full p-2 mt-1 text-sm border border-gray-500 rounded-md focus:ring-0 focus:border-mark" name="title" id="title" value="" required></input>
            @error('name') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-5">
            <label class="font-semibold text-gray-900 text-md">Email</label></br>
            <input wire:model='email' type="text" class="w-full p-2 mt-1 text-sm border border-gray-500 rounded-md focus:ring-0 focus:border-mark" name="title" id="title" value="" required></input>
            @error('email') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-5">
            <label class="font-semibold text-gray-900 text-md">Subject</label></br>
            <input wire:model='subject' type="text" class="w-full p-2 mt-1 text-sm border border-gray-500 rounded-md focus:ring-0 focus:border-mark" name="title" id="title" value="" required></input>
            @error('subject') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-5">
            <label class="font-semibold text-gray-900 text-md">@lang('contact.message')</label></br>
            <textarea wire:model='message' class="w-full h-20 p-2 mt-1 text-sm border border-gray-500 rounded-md focus:ring-0 focus:border-mark"></textarea>
            @error('message') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-5">
            <label class="font-semibold text-gray-900 text-md">@lang('contact.captcha')</label></br>
            <div class="flex items-center mb-2">
                <span>{!! $captcha_img !!}</span>
                <button wire:click.prevent="reloadCaptcha" type="button" class="inline-block px-3 py-1 ml-4 bg-gray-200 hover:bg-gray-500" class="reload" id="reload">
                    &#x21bb; Reload
                </button>
            </div>
            <input wire:model='captcha' type="text" class="w-full p-2 mt-1 text-sm border border-gray-500 rounded-md focus:ring-0 focus:border-mark" name="title" id="title" value="" required></input>
            @error('captcha') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
        </div>

        <div>
            <button wire:click="save()" class="block w-full p-3 font-bold transition-all duration-300 border-2 rounded-md text-mark-default hover:bg-mark-default hover:text-white border-mark">
                @lang('contact.send')
            </button>
        </div>
    </div>
</div>

