<div>
    @if($super ?? false)
    <span {!! $attributes->merge(['class' => 'font-light uppercase text-gris-dark tracking-wider']) !!}>{{ $super }}</span>
    @endif
    <h2 {!! $attributes->merge(['class' => 'text-2xl lg:text-4xl text-azul uppercase tracking-wider']) !!}>
        {{ $slot }}
    </h2>
    <div class="w-24 h-1 bg-rojo mt-3 wow fadeInLeft" data-wow-delay="0.5s"></div>
</div>

