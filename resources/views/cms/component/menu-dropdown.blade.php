<!-- This example requires Tailwind CSS v2.0+ -->
<div x-data="{ open: false }"
    class="relative inline-block w-full text-left">
  <div>
    <button type="button" @click="open = true" class="inline-flex justify-center w-full px-4 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="menu-button" aria-expanded="true" aria-haspopup="true">
      Select your menu on this button
      <!-- Heroicon name: solid/chevron-down -->
      <svg class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
      </svg>
    </button>
  </div>

  <div x-show="open"
       @click.away="open = false"
       x-cloak
    class="absolute right-0 w-56 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
    <div class="py-1" role="none">
      <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
      <a href="{{ route('cms-csr.index') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-indigo-400" role="menuitem" tabindex="-1" id="menu-item-0">CSR</a>
      <a href="{{ route('cms-environment.index') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-indigo-400" role="menuitem" tabindex="-1" id="menu-item-1">Environment</a>
      <a href="{{ route('cms-awards-certificates.index') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-indigo-400" role="menuitem" tabindex="-1" id="menu-item-2">Awards & Certificates</a>
    </div>
  </div>
</div>

