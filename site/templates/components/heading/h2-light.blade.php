<div>
    @if($super ?? false)
    <span {!! $attributes->merge(['class' => 'font-light uppercase text-white tracking-wider']) !!}>{{ $super }}</span>
    @endif
    <h2 {!! $attributes->merge(['class' => 'text-2xl lg:text-4xl text-white uppercase tracking-wider']) !!}>
        {{ $slot }}
    </h2>
    <div class="w-24 h-1 bg-rojo mt-3"></div>
</div>