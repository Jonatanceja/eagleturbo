@extends('layouts.default')
@section('content')

<x-layout.container>
    <x-layout.cols2>
        <div>
            @if ($image = $page->productImage()->toFile())
            <img src="{{ $image->url() }}" alt="">  
            @endif
        </div>

        <div>
            <x-text.p class="hover:text-gris-dark">
            <?php foreach($site->breadcrumb() as $crumb): ?>
                <a href="<?= $crumb->url() ?>" <?= e($crumb->isActive(), 'aria-current="page"') ?>>
                    <?= html($crumb->title()) ?>
                </a>
                /
            <?php endforeach ?>
            </x-text.p>
            <h2 class="text-xl text-rojo tracking-wider my-2">{{ $page->productCode() }}</h2>
            <h1 class="text-2xl md:text-4xl text-azul tracking-wider my-2">{{ $page->title() }}</h1>
            <div class="w-24 h-1 bg-rojo mt-3"></div>
            <x-text.p class="my-3"><span><i class="fas fa-tags"></i></span> {{ $page->tags() }}</x-text.p>
            <hr class="border-gris">
            <x-text.p class="my-3"><?= $page->info()->kti() ?></x-text.p>
            <a href="https://wa.me/{{ $site->whatsapp() }}">
            <x-buttons.tertiary>Buy part</i></x-buttons.tertiary>
            </a>

    
        </div>
    </x-layout.cols2>
    
</x-layout.container>

<section class="bg-gris-light">
    <x-layout.container>
        <h1 class="text-2xl md:text-4xl text-azul tracking-wider my-2">Related Products</h1>
        <div class="w-24 h-1 bg-rojo mt-3"></div>
        <div class="grid grid-cols-2 md:grid-cols-4 mt-5 md:mt-10">

            <?php
            $related = $page->relatedPages()->toPages();
            if ($related->count() > 0):
            ?>
            <?php foreach($related as $product): ?>

                <a href="<?= $product->url() ?>">
                    <div class="bg-white px-5 rounded-2xl shadow-xl hover:shadow-2xl relative py-5 group transform hover:-translate-y-1 transition">
                        <p class="bg-rojo absolute w-full left-0 top-0 text-white text-center rounded-t-2xl py-2 uppercase text-xs md:text-sm px-2">{{ $product->tags() }}</p>
                    <?php if($image = $product->productImage()->toFile()): ?>
                        <img class="mt-10" src="{{ $image->url() }}" alt="">
                        <h3 class="text-center text-azul text-base md:text-2xl font-bold">{{ $product->title() }}</h3>
                        <p class="mt-3 text-rojo hover:text-rojo-light transition text-center text-xs md:text-base">Full details →</p>
                    <?php endif ?>
                    </div>  
                
                </a>

            <?php endforeach ?>
            <?php endif ?>        


        </div>
    </x-layout.container>
</section>

@endsection