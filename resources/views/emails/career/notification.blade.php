@component('mail::message')
# Introduction


{{$details['text']}}

{{-- @component('mail::button', ['url' => 'mailto:'. $details['email']])
Reply Now
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
