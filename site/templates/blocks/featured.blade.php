<section class="bg-gris-light swiper-container-3">
    <x-layout.container>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-5 md:gap-10">
            <div class="col-span-1 relative">
                <x-heading.h2 class="wow fadeInUp">
                    <x-slot name="super">Just Arrived</x-slot>
                    Recent products
                </x-heading.h2>
                <a href="/catalog">
                <x-buttons.tertiary class="mt-10 wow fadeInUp">
                    See catalog
                </x-buttons.tertiary>
                </a>
            </div>

            
                <div class="col-span-1 md:col-span-3">
                    <div class="grid grid-cols-1 md:grid-cols-4 wow fadeInUp" data-wow-delay="0.5s">

                        <?php
                        $related = $page->featuredPages()->toPages();
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
                </div>
            

        </div>

    </x-layout.container>
</section>