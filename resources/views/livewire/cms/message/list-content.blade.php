<div class="grid grid-cols-8 p-2 bg-gray-100 border">
    <div class="col-span-2 text-center">
        <h1 class="font-bold">Message</h1>
        <div class="overflow-scroll text-left overscroll-contain h-96">
            @foreach ( $message as $item)
                <button wire:click="message('{{ $item->id }}')"
                    class="w-full py-1 text-left cursor-pointer hover:bg-gray-400">{{ Str::limit( $item->email, 25, '...') }}</button>
            @endforeach
        </div>
        <button wire:click="more" class="w-full p-2 bg-gray-300 border border-gray-400">more</button>
    </div>
    <div wire:loading wire:target="message('{{ $item->id }}')" class="col-span-6 p-1 mx-2 border border-t-0 border-b-0 border-r-0">
        <img class="w-1/5 mx-auto my-auto " src="{{ asset('loading.gif') }}" >
    </div>
    <div wire:loading.remove wire:target="message('{{ $item->id }}')" class="col-span-6 p-1 mx-2 border border-t-0 border-b-0 border-r-0">
        @if ($showMessage)

                <div class="grid grid-cols-4 mx-4 mb-2 font-semibold">
                    <div>Name</div>
                    <div class="col-span-3">: {{ $showMessage->name }}</div>
                </div>
                <div class="grid grid-cols-4 mx-4 mb-2 font-semibold">
                    <div>Email</div>
                    <div class="col-span-3">: {{ $showMessage->email }}</div>
                </div>
                <div class="grid grid-cols-4 mx-4 mb-2 font-semibold">
                    <div>Subject</div>
                    <div class="col-span-3">: {{ $showMessage->subject}}</div>
                </div>
                <div class="grid grid-cols-4 mx-4 mb-2">
                    <div class="col-span-4 text-right"> {{ $showMessage->created_at}}</div>
                </div>
                <div class="w-full p-3 overflow-scroll bg-white border h-80">
                    {{ $showMessage->message }}
                </div>
            </div>
        @endif
    </div>
</div>
