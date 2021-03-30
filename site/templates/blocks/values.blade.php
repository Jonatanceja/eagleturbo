<x-layout.container class="wow fadeIn">
    <x-heading.h2>
        <x-slot name="super">{{ $page->valuesSubtitle() }}</x-slot>
        {{ $page->valuesTitle() }}
    </x-heading.h2>

    <x-layout.cols3 class="py-5 md:py-10 wow fadeInDown" data-wow-delay="0.5s">
        <?php $items = $page->blurbs()->toStructure(); foreach ($items as $item): ?>
            <div>
                <?php if($image = $item->icon()->toFile()): ?>
                    <div class="bg-rojo rounded-full mx-auto w-28 h-28 p-3 mb-6">
                        <img class="h-20 m-auto" src="{{ $image->url() }}" class="m-auto">
                    </div>
                <?php endif ?>
                <h2 class="text-azul text-center uppercase text-2xl tracking-wider">{{ $item->blurbTitle() }}</h2> 
                <x-text.p class="text-center">
                    {{ $item->blurbText() }}
                </x-text.p>
            </div>
            
        <?php endforeach ?>
    </x-layout.cols3>
    
</x-layout.container>