<x-mail::message>
# Register Camp {{$checkout->camp->title}}

Hi {{$checkout->user->name}}
<br>
Thank you for register on <b>{{$checkout->camp->title}}</b>, please see payment instruction by click button bellow.

{{-- @component('mail::button', ['url' => route('user.checkout.invoice', $checkout->id)]) --}}
@component('mail::button', ['url' => route('dashboard')])
My Dashboard
@endcomponent


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
