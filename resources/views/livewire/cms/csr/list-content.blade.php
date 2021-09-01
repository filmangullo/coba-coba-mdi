<div>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            @forelse ($csr as $n)
                <div class="mb-4 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                    <div class="grid grid-cols-1 p-6 bg-white border-b border-gray-200 md:grid-cols-4 sm:px-20">

                        <div class="mt-6 text-gray-500">
                            <img class="object-contain w-full h-48" src="{{asset($n->img)}}">
                        </div>

                        <div class="items-center col-span-1 px-2 mt-6 font-bold text-gray-500 md:col-span-3 justify-items-start">
                            <div class="mb-2 text-left">
                                {!! $n->description_id !!}
                            </div>
                            <div class="mb-2 italic font-normal text-right">
                                {!! $n->description_en !!}
                            </div>
                            <div class="mb-2 font-normal text-right">
                                {!! $n->description_cn !!}
                            </div>
                        </div>

                    </div>
                    <div class="px-6 mt-5 mb-3 text-2xl text-right">

                        <a href="{{ route('cms-csr.update', $n->id) }}" type="button" class="py-2 text-sm text-green-600 border border-green-600 rounded-md focus:outline-none px-7 hover:bg-green-50">Edit</a>

                        <button wire:click='openModalDelete({{$n->id}})'
                            type="button" class="px-5 py-2 text-sm text-red-600 border border-red-600 rounded-md focus:outline-none hover:bg-red-50">Delete</button>
                    </div>
                </div>
            @empty
                <div class="mb-4 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                    <div class="p-6 text-center bg-white border-b border-gray-200 sm:px-20">
                        Undefined Content
                    </div>
                </div>
            @endforelse

            <div>
                {{ $csr->links() }}
            </div>
        </div>
    </div>

    @if($modalDelete == true)
    <div class="fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true"></div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div
                class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto bg-red-100 rounded-full sm:mx-0 sm:h-10 sm:w-10">
                            <!-- Heroicon name: outline/exclamation -->
                            <svg class="w-6 h-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">
                                Delete
                            </h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">
                                    Are you sure you want to delete this file? All of your data will be permanently
                                    removed. This action cannot be undone.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button wire:click="delete({{ $idFileDelete }})"
                        type="button"
                        class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-red-600 border border-transparent rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Delete
                    </button>
                    <button wire:click="closeModalDelete()"
                        type="button"
                        class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
