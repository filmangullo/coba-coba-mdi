<style>
* {
    background-color: #F07721 !important;
}
</style>

@component('mail::message')
# Introduction


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

@component('mail::button', ['url' => 'mailto:'. $details['email']])
Reply Now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
