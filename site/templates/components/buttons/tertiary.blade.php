<button {!! $attributes->merge(['class' => 'bg-rojo px-5 py-2 text-white uppercase rounded-full my-5 transform hover:scale-110 transition group']) !!}>
    {{ $slot }} <i class="fas fa-chevron-right"></i>
</button>