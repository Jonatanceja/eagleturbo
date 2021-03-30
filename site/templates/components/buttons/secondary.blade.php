<button {!! $attributes->merge(['class' => 'bg-rojo px-5 py-2 text-white uppercase rounded-full my-5 group-hover:bg-white group-hover:text-rojo']) !!}>
    {{ $slot }} <i class="fas fa-chevron-right"></i>
</button>