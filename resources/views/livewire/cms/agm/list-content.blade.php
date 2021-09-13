<div>
    <button wire:click="openAddYearModal" type="button" class="inline-flex items-center float-right px-3 py-2 mt-5 mr-10 text-sm font-medium leading-4 text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        <!-- Heroicon name: solid/mail -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
        </svg>
        Add Year
    </button>
    <div class="relative py-16 ">
        <div class="max-w-md px-4 mx-auto text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
            @foreach ($years as $y)
            {{-- Year --}}
            <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                {{ $y->year }}
            </p>
            <div class="mt-12">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">

                    {{-- Annual General Meeting --}}
                    <div class="pt-6">
                        <div class="flow-root px-6 pb-8 rounded-lg shadow-md bg-gray-50">
                            <div class="-mt-6">
                                <div>
                                    <span
                                        class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                        <!-- Heroicon name: outline/cloud-upload -->
                                        <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900">Push to Deploy</h3>
                            </div>
                            <button type="button" class="inline-flex items-center mt-2 px-3 py-1.5 border border-transparent text-xs font-medium rounded-full shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Delete
                            </button>
                        </div>
                    </div>


                </div>
            </div>
            @endforeach
            <div class="px-4 py-2">
                {{ $years->links() }}
            </div>
        </div>
    </div>

    {{-- Modal Add Year --}}
    @if($addYearModal)
    <div class="fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true"></div>

            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div
                class="inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
                <div>
                    <div class="flex items-center justify-center w-12 h-12 mx-auto bg-green-100 rounded-full">
                        <!-- Heroicon name: outline/check -->
                        <svg class="w-6 h-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-5">
                        <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">
                            Add Year
                        </h3>
                        <div class="mt-2">
                            <div>
                                <div class="mt-1 text-left">
                                    <input wire:model.debounce.1s='year' type="number" name="year" id="year" value="{{ date('Y', strtotime(now())) }}" min="2000" max="3000" class="block w-full px-4 border-gray-300 rounded-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Select years">
                                    @error('year') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense">
                    <button wire:click='saveYear' type="button"
                        class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:col-start-2 sm:text-sm">
                        Save
                    </button>
                    <button wire:click="closeAddYearModal" type="button"
                        class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:col-start-1 sm:text-sm">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
