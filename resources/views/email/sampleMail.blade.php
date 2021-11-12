

@component('mail::message')
# Introduction

The body of your message.
<h1>Dear User I am {{$details['name']}}</h1>
<h1>{{ $details['title'] }}</h1>
<h1>{!! $details['body'] !!}</h1>

@component('mail::button', ['url' => 'https://rosoborn.com/'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent


