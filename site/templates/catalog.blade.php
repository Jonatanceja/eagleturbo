@extends('layouts.default')
@section('content')

<x-layout.container class="-mt-6 md:mt-0">
    <div class="grid grid-cols-1 md:grid-cols-4 md:gap-10">
        <div class="col-span-1 hidden md:block wow fadeIn" data-wow-delay="0.5s">
            <h1 class="text-xl uppercase font-bold text-azul mb-6 tracking-wider">Products</h1>
                        <ul class="text-gris hover:text-gris-dark uppercase tracking-wide">
                            @foreach (page('catalog')->children() as $subpage)
                            <a href="<?= $subpage->url() ?>"><li><?= $subpage->title() ?></li></a>
                            @endforeach 
                        </ul>
        </div>
        <div class="col-span-3 wow fadeIn" data-wow-delay="0.7s">
            <x-heading.h2>
                <x-slot name="super">
                    <?php foreach($site->breadcrumb() as $crumb): ?>
                    <a href="<?= $crumb->url() ?>" <?= e($crumb->isActive(), 'aria-current="page"') ?>>
                        <?= html($crumb->title()) ?> 
                    </a>
                    /
                    <?php endforeach ?>
                </x-slot>
                    {{ $page->title() }}
            </x-heading.h2>

            <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 my-5 md:my-10">
                @foreach (page('catalog')->grandchildren() as $subpage)
                                <a href="<?= $subpage->url() ?>">
                                    <div class="bg-white px-5 rounded-2xl shadow-xl hover:shadow-2xl relative py-5 swiper-slide group transform hover:-translate-y-1 transition">
                                        <p class="bg-rojo absolute w-full left-0 top-0 text-white text-center rounded-t-2xl py-2 uppercase text-xs md:text-sm px-2">{{ $subpage->tags() }}</p>
                                    <?php if($image = $subpage->productImage()->toFile()): ?>
                                        <img class="mt-10" src="{{ $image->url() }}" alt="">
                                        <h3 class="text-center text-azul text-base md:text-2xl font-bold">{{ $subpage->title() }}</h3>
                                        <p class="mt-3 text-rojo hover:text-rojo-light transition text-center text-xs md:text-base">Full details →</p>
                                    <?php endif ?>
                                    </div>  
                                
                                </a>
                @endforeach 
                            </div>
        </div>
    </div>
    
</x-layout.container>

@endsection