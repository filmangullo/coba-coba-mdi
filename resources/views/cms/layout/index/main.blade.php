<div class="flex flex-col">
	@php
		use App\Services\CMSService;
	@endphp

    @if(Session::has('fail'))
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="p-4 mb-8 rounded-md bg-red-50">
        <div class="flex">
        <div class="flex-shrink-0">
            <!-- Heroicon name: solid/x-circle -->
            <svg class="w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
            </svg>
        </div>
        <div class="ml-3">
            <h3 class="text-sm font-medium text-red-800">
            {{ Session::get('fail') }}
            </h3>
        </div>
        </div>
    </div>
    @endif


    @if(Session::has('success'))
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="p-4 mb-8 rounded-md bg-green-50">
        <div class="flex">
          <div class="flex-shrink-0">
            <!-- Heroicon name: solid/check-circle -->
            <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
          </div>
          <div class="ml-3">
            <h3 class="text-sm font-medium text-green-800">
                {{ Session::get('success')}}
            </h3>
          </div>
        </div>
      </div>
    @endif
	<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
	  <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
		<div class="">
		  <table class="min-w-full divide-y divide-gray-200">
			<thead class="bg-gray-50">
			  <tr>
				<th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
				  Type
				</th>
				<th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
				  Menu
				</th>
				<th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
				  Slug
				</th>
				<th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
				  Active
				</th>
				<th scope="col" class="relative px-6 py-3">
				  <span class="sr-only">Edit</span>
				</th>
				<th scope="col" class="relative px-6 py-3">
				  <span class="sr-only">Delete</span>
				</th>
			  </tr>
			</thead>
			<tbody class="bg-white divide-y divide-gray-200">
			@forelse($menu as $m)
			  <tr>
				<td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
					{{ CMSService::type($m)}}
				</td>
				<td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
					{{ $m->name_en }}
				</td>
				<td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
					{{ $m->slug }}
				</td>
				<td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
				  {{ $m->active ? 'Active' : 'Inactive'}}
				</td>
				<td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
				  <a href="{{route('cms.update', $m->id)}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
				</td>
				<td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                    <form onsubmit="return confirm('Apakah anda yakin mau menghapus {{$m->name_en}}?');" method="POST" action="{{route('cms.delete')}}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $m->id }}">
                        <button type="submit" class="font-medium text-indigo-600 hover:text-indigo-900">Delete</button>
                    </form>
				</td>
			  </tr>
			  	@foreach($m->child as $sm)
				<tr>
					<td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
						{{ CMSService::type($sm)}}
					</td>
					<td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
						{{ $m->name_en }} >> {{ $sm->name_en }}
					</td>
					<td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
						{{ $sm->slug }}
					</td>
					<td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
					{{ $sm->active ? 'Active' : 'Inactive'}}
					</td>
					<td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
						<a href="{{route('cms.update', $sm->id)}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
					</td>
					<td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
						<form onsubmit="return confirm('Apakah anda yakin mau menghapus {{$sm->name_en}}?');" method="POST" action="{{route('cms.delete')}}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $sm->id }}">
                            <button type="submit" class="font-medium text-indigo-600 hover:text-indigo-900">Delete</button>
                        </form>
					</td>
				</tr>
					@foreach($sm->child as $smm)
					<tr>
						<td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
							{{ CMSService::type($smm)}}
						</td>
						<td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
							{{ $m->name_en }} >> {{ $sm->name_en }} >> {{ $smm->name_en }}
						</td>
						<td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
							{{ $smm->slug }}
						</td>
						<td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
						{{ $smm->active ? 'Active' : 'Inactive'}}
						</td>
						<td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
							<a href="{{route('cms.update', $smm->id)}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
						</td>
						<td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
							<form method="POST" onsubmit="return confirm('Apakah anda yakin mau menghapus {{$smm->name_en}}?');" action="{{route('cms.delete')}}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $smm->id }}">
                                <button type="submit" class="font-medium text-indigo-600 hover:text-indigo-900">Delete</button>
                            </form>
						</td>
					</tr>
					@endforeach
				@endforeach
			@empty
				<tr>
					<td colspan="4" class="px-6 py-4 text-sm font-medium text-center text-gray-900 whitespace-nowrap">
					No menu found!
					</td>
				</tr>
			@endforelse
			  <!-- More people... -->
			</tbody>
		  </table>
		  <div class="py-8">
		  	{{ $menu->links() }}
		  </div>
		</div>
	  </div>
	</div>
  </div>
