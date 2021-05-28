
<form class="z-20 flex items-start flex-row-reverse lg:container lg:mx-auto space-y-8 md:space-y-0 md:space-x-6  md:flex-row flex-wrap md:flex-nowrap">
    <div class="w-full md:w-6/12 px-6 py-10 text-white bg-mark-default md:rounded-l-md">
        <div class="text-4xl font-bold text-center">"Staf IT"</div>

        <div class="mb-4">
            <label class="block mb-2 text-sm font-bold text-gray-700" for="job">
              Full Name : {{$fullname}}
            </label>
        </div>
    </div>
    <div class="px-6 pb-10 w-full md:w-6/12 ">
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
            <input wire:model="fullname"
                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" type="text" placeholder="Full Name">
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
    </div>
</form>

