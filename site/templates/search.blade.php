@extends('layouts.default')
@section('content')

<x-layout.container class="">

    
      <ul>
        <?php foreach ($results as $result): ?>
        <x-heading.h2 class="wow fadeIn">
            <x-slot name="super">
                Your results for
            </x-slot>
            {{ $query }}
        </x-heading.h2>
        <a class="uppercase text-azul tracking-wider" href="<?= $result->url() ?>">
        <li class="bg-white shadow-xl rounded-lg p-5 mb-5 group hover:shadow-2xl hover:translate-y-1 transition flex items-center mt-5 wow fadeIn">
            <?php if($image = $result->productImage()->toFile()): ?>
                <img class="w-32 pr-5" src="{{ $image->url() }}" alt="">
            <?php endif ?>
            <div>
                <h3 class="text-xl font-bold">{{ $result->title()  }}</h3> 
                <x-text.p class="-mt-1">
                    {{ $result->tags()  }} | {{ $result->productCode()  }}
                </x-text.p>
                <p class="mt-3 text-rojo hover:text-rojo-light transition text-xs md:text-base">Full details →</p>
            </div>
        </li>
        </a>
        <?php endforeach ?>
      </ul>

</x-layout.container>

@endsection