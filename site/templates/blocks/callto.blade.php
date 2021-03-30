
<section>
    @if ($image = $page->ctaBg()->toFile())
    <div class="bg-right bg-cover wow fadeIn" style="background-image: url({{ $image->url() }})">
    @endif

        <x-layout.container>

                <div class="flex items-center py-12">
                    <div class="w-full wow fadeIn" data-wow-delay="0.5s">
                        <h2 class="text-3xl md:text-6xl text-right text-white tracking-wider callto"><?= $page->ctaheadline()->kti() ?></h2>
                        <p class="text-white text-right text-lg mt-5"><?= $page->ctaText()->kti() ?></p>
                        <?php 
                        $items = $page->buttonText()->toStructure();
                        foreach ($items as $item): ?>
                        <x-buttons.tertiary class="float-right">
                            {{ $item->text() }}
                        </x-buttons.tertiary>
                        <?php endforeach ?>
                    </div>
                </div>

        </x-layout.container>
    </div>
</section>
