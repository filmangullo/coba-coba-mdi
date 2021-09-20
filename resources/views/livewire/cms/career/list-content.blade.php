<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
			<div class="p-6 px-16">
                <div class="mb-2 font-medium">Career is {{ $active ? 'Active' : 'Unactive'}} now. {{ $active ? 'Deactive to hide from main website.' : 'Activate to show career menu at main website.'}}</div>
                <button wire:click='career' type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-white border border-transparent rounded-md shadow-sm  focus:outline-none focus:ring-2 focus:ring-offset-2 @if($active) bg-red-600 focus:ring-red-500 hover:bg-red-700 @else bg-indigo-600 focus:ring-indigo-500 hover:bg-indigo-700 @endif">
                    {{$active ? 'Deactive' : 'Active'}}
                </button>
			</div>
            <div class="grid grid-cols-1 p-6 bg-white border-b border-gray-200 sm:px-20 md:grid-cols-3">
                @forelse ($listCareer as $lC)
                    <div class="border border-gray-200">
                        <div class="py-3 text-xl font-bold text-center uppercase bg-gray-200">
                            {{ $lC->job_position_id }}
                        </div>
                        <div class="px-2">
                            <div class="w-1/2 m-auto text-center divide-y-2 divide-gray-400 divide-dashed ">
                                <div class="text-5xl font-bold">{{ date('d', strtotime($lC->publish_date)) }}</div>
                                <div class="text-xl">{{ date('M Y', strtotime($lC->publish_date)) }}</div>
                            </div>
                            <div class="text-center">
                                <p>{{ Str::limit($lC->brief_description_id, 100) }}</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 py-4">
                            <div class="inline-block m-auto mt-2">
                                <a href="{{ route('cms-career.update', $lC->id) }}" class="focus:outline-none text-white text-sm py-2.5 px-8 rounded-md bg-gradient-to-r from-blue-400 to-blue-600 transform hover:scale-110">Edit</a>
                            </div>

                            <div class="inline-block m-auto mt-2">
                                <a href="button" class="focus:outline-none text-white text-sm py-2.5 px-7 rounded-md bg-gradient-to-r from-green-400 to-green-600 transform hover:scale-110">Show</a>
                            </div>
                        </div>
                    </div>
                @empty
					No Career has been added.
                @endforelse


            </div>
        </div>
    </div>
</div>

