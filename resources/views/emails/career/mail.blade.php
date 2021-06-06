<div style="background-color: #F07721; width: full; height: full">
    <div style="width: full">
        <img style="padding-top: 40px; margin-bottom: 40px; margin-left: auto; margin-right: auto;display: block; width:25%" src="{{ $message->embed(public_path('/img/logo-white.png')) }}" alt="Mark Dynamics Logo">
    </div>
    <div style="padding:24px; border-radius:6px; background-color:white;margin:0 auto; width:50%">
        <div style="color: black; margin-bottom: 12px;">
            <div>
                Full Name : {{$details['name']}}
            </div>
            <div>
                Job Applied : {{$details['apply']}}
            </div>
            <div>
                Phone : {{$details['phone']}}
            </div>
            <div>
                Email : {{$details['email']}}
            </div>
            <div>
                Address : {{$details['address']}}
            </div>
            <div>
                About yourself : {{$details['about']}}
            </div>
            <div>
                Why we should hire you? : {{$details['why']}}
            </div>
        </div>
        
        <div style="color:black">
            Thanks,<br>
            {{ config('app.name') }}
        </div>
    </div>
    <div style="padding: 20px 0; text-align: center; color: white;">
        © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
    </div>
</div>