<section class="bg-rojo wow fadeIn">
    <x-layout.container>
        <x-layout.cols2>
            <?php $items = $page->missionInfo()->toStructure(); foreach ($items as $item): ?>
            <div class="wow fadeInLeft" data-wow-delay="0.5s">
                <h3 class="text-white uppercase text-xl tracking-wider">{{ $item->missionTitle() }}</h3>
                <x-text.p-light>{{ $item->missionText() }}</x-text.p-light>
            </div>
            <?php endforeach ?>
        </x-layout.cols2>

    </x-layout.container>
</section>