<div {!! $attributes->merge(['class' => 'grid grid-cols-2 items-center shadow-2xl rounded-2xl gap-5 md:gap-10 p-5 bg-white hover:bg-rojo transition relative duration-500']) !!}>
    <div class="absolute bg-rojo w-3 group-hover:w-full h-full z-10 right-0 top-0 rounded-r-2xl transform origin-right"></div>

    {{ $slot }}

</div>

