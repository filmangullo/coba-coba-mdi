<div class="max-w-7xl mx-auto px-4 sm:px-6 pt-32 lg:px-8 text-center">
    <h2 class="animate__fadeInDown text-center animate__animated mt-2 text-3xl font-extrabold tracking-tight text-mark-default sm:text-4xl">@lang('annual-meeting.title')</h2>
    {{-- <p class="animate__fadeInDown animate__animated mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
        Everything you need to deploy your app
    </p> --}}
    <div class="divide-y divide-hitam">
        @foreach($annual as $year => $a)
        <div class="py-24 space-y-24 @if($year%2 == 1) bg-gray-100 @endif">
            <div class="text-center">
                <div class="text-4xl font-bold">{{ $year }}</div>
                <div class="h-1 mx-auto bg-mark-default w-28"></div>
            </div>
            @php $data = ['Annual General Meeting of Shareholders in MAY 2021 - Announcement to Shareholders', 'Annual General Meeting of Shareholders in MAY 2021 - Invitation to Shareholders']; @endphp
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 w-full items-start -my-6 ">
            @foreach($a as $file)
                <div class="text-center w-full space-y-4 xsm:px-4 py-6 ">
                    <a href="{{ $file['file'] }}" download class="flex items-center justify-center mx-auto rounded-full cursor-pointer w-28 h-28 bg-mark-default hover:bg-mark-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto text-white h-14 w-14" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    @if(App::isLocale('id'))
                    <div class="text-sm font-bold sm:text-lg">{{ $file['title_id']  }}</div>
                    @elseif(App::isLocale('en'))
                    <div class="text-sm font-bold sm:text-lg">{{ $file['title_en']  }}</div>
                    @elseif(App::isLocale('cn'))
                    <div class="text-sm font-bold sm:text-lg">{{ $file['title_cn']  }}</div>
                    @endif
                </div>
            @endforeach
            </div>
        </div>
        @endforeach
    </div>
</div>
