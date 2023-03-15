@props([
    'name' => ''    
])

@php

$uuid = (string) Str::uuid();

@endphp

<input {{ $attributes }} type="checkbox" name="remember" id="{{ $uuid }}">
<label for="{{ $uuid }}">
    {{ $slot }}
</label>

@error($name)

    <p class="small text-danger">
        {{ $errors->first($name) }}
    </p>

@enderror