<div class="">
    <div class="pt-16 pb-24 lg:py-24 text-4xl font-bold text-center">Products</div>
    <div class=" border-b border-gray-500">
        <div class="flex items-center">
            <div class="w-full  h-3/4 ">
                <img class="object-cover w-full rounded-md" src="{{ asset( $preview->img ) }}" alt="Mark Dynamics Gallery & Products">
            </div>
        </div>

        
        <div class="flex items-start  lg:container lg:mx-auto py-14 w-full xsm:px-4 lg:flex-nowrap flex-wrap sm:px-6 lg:px-8 mx-auto -my-3 ">
        @for($i=0; $i <= 5; $i++)
        <div class="xsm:w-6/12 lg:w-6/12 w-full xl:w-2/12 px-3 py-3">
            <img class="object-cover rounded-md w-full h-48 lg:h-28 " src="{{ asset('img/bg-slider.jpg') }}" alt="Mark Dynamics Gallery & Products">
        </div>
        @endfor
        </div>
    </div>
</div>
