@component('mail::message')
@component('mail::panel')
#### {{$request['title']}}
@endcomponent
{{$request['desc']}}
@endcomponent