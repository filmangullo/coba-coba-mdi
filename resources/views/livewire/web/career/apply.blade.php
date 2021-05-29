<div>
<div class="z-20 flex flex-row-reverse flex-wrap items-start space-y-8 lg:container lg:mx-auto md:space-y-0 md:space-x-6 md:flex-row md:flex-nowrap">
    <div class="w-full px-6 py-10 text-white md:w-6/12 bg-mark-default md:rounded-l-md">
        <div class="text-4xl font-bold text-center">"Staf IT"</div>

        <div class="mb-4">
            <label class="block mb-2 text-sm font-bold text-gray-700" for="job">
              Full Name : {{$nama}}
            </label>
        </div>
    </div>
    <div class="w-full px-6 pb-10 md:w-6/12 ">
        <div class="mb-4">
            <label class="block mb-2 text-sm font-bold text-gray-700" for="job">
              Apply Job
            </label>
            <select class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                <option>Select</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block mb-2 text-sm font-bold text-gray-700" for="name">
              Name
            </label>
            <input wire:model="nama" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" type="text" placeholder="Full Name">
        </div>

        <div class="mb-4">
            <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
              Email
            </label>
            <input wire:model="email"
                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" type="email" placeholder="Email">
        </div>

        <div class="mb-4">
            <label class="block mb-2 text-sm font-bold text-gray-700" for="phone">
              Phone
            </label>
            <input class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" type="tel" placeholder="Phone">
        </div>

        <div class="mb-4">
            <label class="block mb-2 text-sm font-bold text-gray-700" for="address">
              Address
            </label>
            <textarea class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" placeholder="Your current address"></textarea>
        </div>

        <div class="mb-4">
            <label class="block mb-2 text-sm font-bold text-gray-700" for="about">
                Tell about yourself
            </label>
            <textarea class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" placeholder="Tell it briefly and clearly"></textarea>
        </div>

        <div class="mb-4">
            <label class="block mb-2 text-sm font-bold text-gray-700" for="why">
                Why we should hire you?
            </label>
            <textarea class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" placeholder="Give a brief and clear explanation"></textarea>
        </div>

        <div class="mb-4">
            <div wire:click='submit' class="inline-block px-4 py-3 mb-2 text-sm font-bold text-white rounded-md cursor-pointer bg-mark-default hover:bg-mark-dark">
            Submit
            </div>
        </div>
    </div>
</div>
</div>