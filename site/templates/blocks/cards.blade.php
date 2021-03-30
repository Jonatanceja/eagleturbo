<section class="bg-no-repeat bg-contain bg-bottom -mb-1" style="background-image: url('/images/divider.svg')">
    <x-layout.container>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 md:gap-10 mb-10">
            <div class="col-span-1 md:col-span-2 group bg-white hover:bg-rojo transition rounded-2xl shadow-2xl border-r-8 p-5 md:p-10 relative wow fadeIn duration-500">
                <div class="absolute bg-rojo w-6 group-hover:w-full h-full z-10 right-0 top-0 rounded-r-2xl transform origin-right"></div>
                <div class="grid grid-cols-2 items-center gap-5">
                    <div class="col-span-1">
                        <h2 class="text-4xl text-rojo group-hover:text-white tracking-wider">{{ $page->sliderHeadline() }}</h2>
                        <a href="{{ $page->sliderLink() }}"><x-buttons.secondary>{{ $page->sliderButton() }}</x-buttons.secondary></a>
                    </div>

                    <div class="col-span-1">
                        <x-layout.slider>
                            <?php $images =  $page->slides()->toFiles();
                            foreach($images as $image): ?>  
                            <div class="swiper-slide mx-auto"><img class="mx-auto py-3" src="{{ $image->url() }}" alt=""></div>
                            <?php endforeach ?>
                        </x-layout.slider>
                    </div>
                    

                </div>
            </div>

            <div class="col-span-1 space-y-10">
                <?php $items = $page->catalog()->toStructure(); foreach ($items as $item): ?>
                <x-layout.card class="wow fadeIn group">

                    <div class="">
                        <h2 class="font-bold tracking-wider text-azul group-hover:text-white text-2xl">{{ $item->name() }}</h2>
                        <a href="{{ $item->link() }}"><x-buttons.primary class="group-hover:text-white">{{ $item->buttonText() }}</x-buttons.primary></a> 
                    </div>

                    <div>
                    <?php if($image = $item->image()->toFile()): ?>
                    <a href="{{ $item->link() }}"><img class="mx-auto w-40" src="{{ $image->url() }}" class="m-auto"></a>
                    <?php endif ?>
                    </div>

                </x-layout.card>

            <?php endforeach ?>

            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 md:gap-10">


                <?php $items = $page->catalog2()->toStructure(); foreach ($items as $item): ?>
                <x-layout.card class="wow fadeIn group">

                    <div>
                        <h2 class="font-bold tracking-wider text-azul text-2xl group-hover:text-white">{{ $item->name() }}</h2>
                        <a href="{{ $item->link() }}"><x-buttons.primary class="group-hover:text-white">{{ $item->buttonText() }}</x-buttons.primary></a> 
                    </div>

                    <div>
                    <?php if($image = $item->image()->toFile()): ?>
                    <a href="{{ $item->link() }}"><img class="mx-auto w-40" src="{{ $image->url() }}" class="m-auto"></a>
                    <?php endif ?>
                    </div>

                </x-layout.card>

            <?php endforeach ?>


                <div class="grid grid-cols-1 items-center shadow-2xl rounded-2xl gap-5 md:gap-10 p-5 bg-white hover:bg-azul transition relative group">
                    <div class="absolute bg-azul w-3 group-hover:w-full h-full z-10 right-0 top-0 rounded-r-2xl transform origin-right"></div>
                    <div>
                        <h2 class="font-bold tracking-wider mt-4 text-azul text-2xl group-hover:text-white">Watch full catalog</h2>
                        <a href="{{ $item->link() }}"><x-buttons.primary class="group-hover:text-white">{{ $item->buttonText() }}</x-buttons.primary></a> 
                    </div>
                </div>
            

        </div>

    </x-layout.container>

</section>