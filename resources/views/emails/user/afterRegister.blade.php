<x-mail::message>
# Welcome!!

Hi {{$user->name}}
<br>
welcome to laravel, your account has been created success. now you can choose the best match camp

@component('mail::button', ['url' => route('login')])
  Login Here
@endcomponent


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
