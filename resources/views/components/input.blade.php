@props([
    'name' => ''    
])

<input name="{{$name}}" {{ $attributes->class([
    'form-control',    
]) }}>
@error($name)

    <p class="small text-danger mb-0">
    {{ $errors->first($name) }}
    </p>

@enderror