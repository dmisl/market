@props([
    'method' => 'POST',    
])

@php

$method = strtoupper($method);
$_method = in_array($method, ['POST', 'GET']);

@endphp

<form {{ $attributes->merge([
    'method' => $_method ? $method : 'POST'
]) }}>

@if(!$_method)

    @method($method)

@endif

@if($method !== 'GET')

    @csrf

@endif

{{ $slot }}
</form>