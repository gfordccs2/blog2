@component('mail::message')
# Introduction

The body of your message.

-three
-two
-one

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

@component('mail::panel', ['url' => ''])
tiam porta sem malesuada magna mollis euismod
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
