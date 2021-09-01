<div x-data="{ tab: 'id' }"
    class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
            <div class="grid grid-cols-2 md:grid-cols-6 gap-4 px-6 mt-3 py-1.5">
                <div @click="tab = 'id'"
                    :class="{'bg-gray-300' : tab === 'id', 'bg-gray-200 text-gray-400' : tab !== 'id'}"
                    class="col-span-2 py-4 font-semibold text-center uppercase cursor-pointer">ID ( INDONESIAN
                    LANGUAGE ) </div>
                <div @click="tab = 'en'"
                    :class="{'bg-gray-300' : tab === 'en', 'bg-gray-200 text-gray-400' : tab !== 'en'}"
                    class="col-span-2 py-4 font-semibold text-center uppercase cursor-pointer">EN ( ENGLISH
                    LANGUAGE )</div>
                <div @click="tab = 'cn'"
                    :class="{'bg-gray-300' : tab === 'cn', 'bg-gray-200 text-gray-400' : tab !== 'cn'}"
                    class="col-span-2 py-4 font-semibold text-center uppercase cursor-pointer">CN ( CHINESE
                    LANGUAGE )</div>
            </div>

            <div x-show="tab === 'id'">
                <div class="p-6 bg-white border-b border-gray-200 sm:px-20">

                    <div class="mt-5 text-2xl">
                        {!! $news->title_id !!}
                    </div>

                    <div class="mt-6 text-gray-500">
                        {!! $news->content_id !!}
                    </div>
                </div>
            </div>
            <div x-show="tab === 'en'">
                <div class="p-6 bg-white border-b border-gray-200 sm:px-20">

                    <div class="mt-5 text-2xl">
                        {!! $news->title_en !!}
                    </div>

                    <div class="mt-6 text-gray-500">
                        {!! $news->content_en !!}
                    </div>
                </div>
            </div>
            <div x-show="tab === 'cn'">
                <div class="p-6 bg-white border-b border-gray-200 sm:px-20">

                    <div class="mt-5 text-2xl">
                        {!! $news->title_cn !!}
                    </div>

                    <div class="mt-6 text-gray-500">
                        {!! $news->content_cn !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
