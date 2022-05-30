@component('mail::message')
# Introduction

Thank you {{$user['name']}} for Registration

Your Email is : {{$user['email']}}
Your Password is : {{$user['password']}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
