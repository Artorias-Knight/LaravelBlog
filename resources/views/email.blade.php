@component('mail::message')
    {{$data[0]['mailsubject']}}
@component('mail::subcopy')
    {{$data[0]['content']}}
@endcomponent

@endcomponent
