<div {{ $attributes->class([
    'container', 'bg-light', 'mt-5', 'rounded-5'
]) }}>
    <div class="m-5">
        {{ $slot }}
    </div>
</div>