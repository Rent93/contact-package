@component('mail::message')
# Introduction

<p>New message from {{ $name }}</p>

{{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
