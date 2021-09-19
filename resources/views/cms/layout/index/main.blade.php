<div class="flex flex-col">
	@php
		use App\Services\CMSService;
	@endphp
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
				  <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
				</td>
				<td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
				  <a href="#" class="text-indigo-600 hover:text-indigo-900">Delete</a>
				</td>
				<td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
				@if($m->type == 'page')
					@dump($m->page)
				@endif
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
						<a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
					</td>
					<td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
						<a href="#" class="text-indigo-600 hover:text-indigo-900">Delete</a>
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
							<a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
						</td>
						<td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
							<a href="#" class="text-indigo-600 hover:text-indigo-900">Delete</a>
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