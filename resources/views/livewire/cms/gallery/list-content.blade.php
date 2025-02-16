<div>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="container px-4 mx-auto overflow-hidden bg-white shadow-xl sm:rounded-lg">

                <div class="grid grid-cols-4 gap-4 p-4">
                    @forelse ($galleries as $item)
                        <div class="p-2 text-center border border-gray-400 rounded-t-md">
                            <div class="flex items-center justify-center overflow-hidden h-52">
                                <img src="{{ asset($item->img) }}" class="w-full m-auto">
                            </div>
                            <span class="my-1 text-xs">
                                @if ($item->is_product == true)
                                image of product
                                @else
                                non product
                                @endif
                            </span>
                            <div class="py-3 text-center border-t border-gray-400">
                                <button wire:click='openModalDelete({{$item->id}})'
                                    type="button"
                                    class="inline-block px-5 py-2 font-semibold text-white uppercase bg-red-600 rounded-lg">delete</button>
                                <a href="{{ route('cms-gallery.update', $item->id) }}"
                                    class="inline-block px-5 py-2 font-semibold text-white uppercase bg-green-600 rounded-lg">Update</a>
                            </div>
                        </div>

                    @empty
                        Undefined Data
                    @endforelse
                </div>
                <div class="px-4 pt-2 pb-5">
                    {{ $galleries->links() }}
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
</div>
