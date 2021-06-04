<img src="{{ $message->embed(public_path('/img/logo-white.png')) }}" class="logo" alt="Laravel Logo">

Full Name : {{$details['name']}}
<br>
            
Job Applied : {{$details['apply']}}
<br>

Phone : {{$details['phone']}}
<br>

Email : {{$details['email']}}
<br>

Address : {{$details['address']}}
<br>

About yourself : {{$details['about']}}
<br>

Why we should hire you? : {{$details['why']}}
<br>


Thanks,<br>
{{ config('app.name') }}